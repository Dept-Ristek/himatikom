<?php

namespace App\Http\Controllers;

use App\Models\BiroDepartment;
use App\Models\Fasilitas;
use App\Models\Berita;
use App\Models\PengurusHarian;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index', [
            'title' => 'JTIK POLSUB',
            'beritas' => Berita::orderBy('id', 'desc')->limit(10)->get()
        ]);
    }

    public function berita(Request $request)
{
    $date = $request->input('date');
    $query = Berita::query();

    if ($date) {
        $query->whereYear('created_at', date('Y', strtotime($date)))
              ->whereMonth('created_at', date('m', strtotime($date)));
    }

    // Urutkan berita dari yang terbaru
    $query->orderBy('created_at', 'desc');

    // Gunakan paginate() untuk mendapatkan objek paginator
    $beritas = $query->paginate(6);

    return view('landing.berita.berita', [
        'title' => 'JTIK POLSUB',
        'beritas' => $beritas // Pastikan ini adalah objek paginator
    ]);
}




    public function detail($slug): View
{
    $berita = Berita::where('slug', $slug)->first();
    return view('landing.berita.detail', [
        'title' => 'JTIK POLSUB',
        'berita' => $berita // Changed 'beritas' to 'berita'
    ]);
}

    public function profile(): View
    {
        return view('landing.profile', [
            'title' => 'JTIK POLSUB | Profile'
        ]);
    }

    public function absensi(): View
    {
        return view('landing.absensi', [
            'title' => 'JTIK POLSUB | Absensi Program Kerja atau Agenda'
        ]);
    }

    public function visi_misi(): View
    {
        return view('landing.tentangJTIK.Visi-Misi.index', [
            'title' => 'JTIK POLSUB | Visi & Misi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function tujuan(): View
    {
        return view('landing.tentangJTIK.Tujuan.index', [
            'title' => 'JTIK POLSUB | Tujuan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function riwayatSingkat(): View
    {
        return view('landing.tentangJTIK.riwayatSingkat.index', [
            'title' => 'JTIK POLSUB | Riwayat Singkat',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function strukturOrganisasi(): View
    {
        return view('landing.tentangJTIK.strukturOrganisasi.index', [
            'title' => 'JTIK POLSUB | Struktur Organisasi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }

    public function fasilitas(): View
    {
        $fasilitas = Fasilitas::all();
        return view('landing.tentangJTIK.Fasilitas.index', [
            'title' => 'JTIK POLSUB | Fasilitas Kami',
            'fasilitas' => $fasilitas
        ]);
    }

    public function kompetensiLulusan(): View
    {
        return view('landing.tentangJTIK.kompetensiLulusan.index', [
            'title' => 'JTIK POLSUB | Kompetensi Lulusan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }

    public function himpunan(): View
    {
        return view('landing.tentangJTIK.himpunan.index', [
            'title' => 'JTIK POLSUB | Himpunan',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function kontak(): View
    {
        return view('landing.kontak.index', [
            'title' => 'JTIK POLSUB | Kontak Kami',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function sistemInformasi(): View
    {
        return view('landing.programStudi.sistemInformasi.si_index', [
            'title' => 'JTIK POLSUB | Sistem Informasi',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
    public function teknikRPL(): View
    {
        return view('landing.programStudi.teknologiRekayasaPerangkatLunak.trpl_index', [
            'title' => 'JTIK POLSUB | Teknik Rekayasa Perangkat Lunak',
            'pengurus_harians' => PengurusHarian::all(),
            'biro_departments' => BiroDepartment::all() 
        ]);
    }
}
