<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BiroDepartment;
use App\Models\Fasilitas;
use App\Models\PengurusHarian;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index', [
            'title' => 'JTIK POLSUB',
            'beritas' => Berita::orderBy('id', 'desc')->limit(9)->get(),
        ]);
    }


    public function berita(Request $request)
    {
        // Pencarian berdasarkan judul (keyword)
        $keyword = $request->keyword;
    
        $query = Berita::query();
    
        if ($keyword) {
            $query->where('judul', 'LIKE', '%' . $keyword . '%');
        }
    
        // Pencarian berdasarkan tanggal, bulan, dan tahun
        if ($request->filled('tanggal') || $request->filled('bulan') || $request->filled('tahun')) {
            if ($request->filled('tahun')) {
                $query->whereYear('created_at', $request->tahun);
            }
            if ($request->filled('bulan')) {
                $query->whereMonth('created_at', $request->bulan);
            }
            if ($request->filled('tanggal')) {
                $query->whereDay('created_at', $request->tanggal);
            }
        }
    
        // Urutkan berita dari yang terbaru
        $query->orderBy('created_at', 'desc');
    
        // Paginate hasil pencarian
        $beritas = $query->paginate(9);
        $totalBerita = $query->count();
    
        return view('landing.berita.berita', [
            'title' => 'JTIK POLSUB',
            'beritas' => $beritas, 
            'keyword' => $keyword,
            'totalBerita' => $totalBerita,
        ]);
    }


public function detail($slug): View
{
    $berita = Berita::where('slug', $slug)->first();
    $beritas = Berita::where('slug', '!=', $slug)
                     ->orderBy('id', 'desc')
                     ->limit(9)
                     ->get();

    return view('landing.berita.detail', [
        'title' => 'JTIK POLSUB',
        'beritas' => $beritas,
        'berita' => $berita,
    ]);
}


    public function profile(): View
    {
        return view('landing.profile', [
            'title' => 'JTIK POLSUB | Profile',
        ]);
    }

    public function absensi(): View
    {
        return view('landing.absensi', [
            'title' => 'JTIK POLSUB | Absensi Program Kerja atau Agenda',
        ]);
    }

    public function visi_misi(): View
    {
        return view('landing.tentangJTIK.Visi-Misi.index', [
            'title' => 'JTIK POLSUB | Visi & Misi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function tujuan(): View
    {
        return view('landing.tentangJTIK.Tujuan.index', [
            'title' => 'JTIK POLSUB | Tujuan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function riwayatSingkat(): View
    {
        return view('landing.tentangJTIK.riwayatSingkat.index', [
            'title' => 'JTIK POLSUB | Riwayat Singkat',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function strukturOrganisasi(): View
    {
        return view('landing.tentangJTIK.strukturOrganisasi.index', [
            'title' => 'JTIK POLSUB | Struktur Organisasi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }

    public function fasilitas(): View
    {
        $fasilitas = Fasilitas::all();
        return view('landing.tentangJTIK.Fasilitas.index', [
            'title' => 'JTIK POLSUB | Fasilitas Kami',
            'fasilitas' => $fasilitas,
        ]);
    }

    public function kompetensiLulusan(): View
    {
        return view('landing.tentangJTIK.kompetensiLulusan.index', [
            'title' => 'JTIK POLSUB | Kompetensi Lulusan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }

    public function himpunan(): View
    {
        return view('landing.tentangJTIK.himpunan.index', [
            'title' => 'JTIK POLSUB | Himpunan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function kontak(): View
    {
        return view('landing.kontak.index', [
            'title' => 'JTIK POLSUB | Kontak Kami',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function sistemInformasi(): View
    {
        return view('landing.programStudi.sistemInformasi.si_index', [
            'title' => 'JTIK POLSUB | Sistem Informasi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
    public function teknikRPL(): View
    {
        return view('landing.programStudi.teknologiRekayasaPerangkatLunak.trpl_index', [
            'title' => 'JTIK POLSUB | Teknik Rekayasa Perangkat Lunak',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all(),
        ]);
    }
}
