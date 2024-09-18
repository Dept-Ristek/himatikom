<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BeritaController extends Controller
{
    public function index(): View
    {
        return view('authority.berita.index', [
            'title' => 'HIMATIKOM POLSUB | Berita',
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('authority.berita.create', [
        'title' => 'HIMATIKOM POLSUB | Berita Create',
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'foto' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'isi' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'foto.required' => 'Foto wajib diisi!',
            'isi.required' => 'Isi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->foto->extension();
        $request->file('foto')->storeAs('public/artikel', $fileName);

        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        
        $save_url = '';
        if ($request->file('foto')) {
            $manager = new ImageManager(new Driver());
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $img = $manager->read($request->file('foto'));
            $img = $img->resize(1920, 1080);

            $img->toJpeg(80)->save(base_path('public/uploads/berita' . $newName));
            $save_url = 'uploads/berita' . $newName;
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'foto' => $save_url,
            'isi' => $dom->saveHTML(),
        ]);

        return redirect(route('halaman-artikel'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('authority.berita.edit', [
        'title' => 'HIMATIKOM POLSUB | Berita Edit',
        'berita' => $berita,  // Pastikan variabel berita dikirim ke view
    ]);
}


public function update(Request $request, $id)
{
    $berita = Berita::find($id);

    # Jika ada gambar baru
    if ($request->hasFile('foto')) {
        $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png,webp';
    } else {
        $fileCheck = '';
    }

    $rules = [
        'judul' => 'required',
        'foto' => $fileCheck,
        'isi' => 'required|min:20',
    ];

    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'foto.required' => 'Foto wajib diisi!',
        'isi.required' => 'Isi wajib diisi!',
    ];

    $this->validate($request, $rules, $messages);
    
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($berita->image) {
            Storage::delete('foto/' . $berita->image);
        }
        $manager = new ImageManager(new Driver());
        $extension = $request->file('foto')->getClientOriginalExtension();
        $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
        $img = $manager->read($request->file('foto'));
        $img = $img->resize(1920, 1080);
        

        $img->toJpeg(80)->save(base_path('public/uploads/berita' . $newName));
        $save_url = 'uploads/berita' . $newName;
        // Set nama foto baru pada request
        $request['foto'] = $save_url;
        

    } else {
        # Jika tidak ada gambar baru, tetap gunakan gambar lama
        $save_url = $berita->foto;
    }
    
    # Proses isi artikel
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
    libxml_clear_errors();

    

    # Update data berita
    $berita->update([
        'judul' => $request->judul,
        'foto' => $save_url,
        'isi' => $dom->saveHTML(),
    ]);

    return redirect(route('halaman-artikel'))->with('success', 'data berhasil di update');
}


    public function destroy($id) 
    {
        $berita = Berita::find($id);
        if (\File::exists('storage/artikel/' . $berita->foto)) {
            \File::delete('storage/artikel/' . $berita->foto);
        }

        $berita->delete();

        return redirect(route('halaman-artikel'))->with('success', 'data berhasil di hapus');
    }

    // app/Http/Controllers/BeritaController.php

public function filter(Request $request)
{
    $date = $request->date; // Format: YYYY-MM
    $year = substr($date, 0, 4);
    $month = substr($date, 5, 2);

    // Filter berita berdasarkan bulan dan tahun
    $beritas = Berita::whereYear('created_at', $year)
                     ->whereMonth('created_at', $month)
                     ->get();

    // Render ulang berita dalam HTML untuk dikembalikan via AJAX
    $view = view('partials.berita-list', compact('beritas'))->render();
    return response()->json($view);
}

}
