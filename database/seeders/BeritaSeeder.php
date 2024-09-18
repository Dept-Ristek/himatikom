<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'judul' => 'JTIK POLSUB Luncurkan Website Desa Wisata Sidajaya',
                'isi' => 'Jurusan Teknologi Informasi dan Komputer (JTIK) Politeknik Negeri Subang (POLSUB) pada Kamis, 12 September 2024 melaksanakan kegiatan Pengabdian kepada Masyakarat (PkM) di Desa Sidajaya, Kabupaten Subang.',
                'foto' => 'artikel/artikel1.jpg',
            ],
            [
                'judul' => 'Wakil Ketua Himpunan',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'foto' => 'artikel/artikel2.jpg',
            ],
            [
                'judul' => 'Keseruan Malam Bimbingan (MABIM) 2024 Jurusan Teknologi Informasi dan Komputer',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'foto' => 'artikel/artikel3.jpg',
            ],
            [
                'judul' => 'Bendahara',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'foto' => 'artikel/artikel4.jpg',
            ],
            [
                'judul' => 'Komisi Disiplin',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'foto' => 'artikel/artikel5.jpg',
            ],
        ];

        foreach ($beritas as $berita) {
            DB::table('berita')->insert([
                'judul' => $berita['judul'],
                'isi' => $berita['isi'],
                'foto' => $berita['foto']
            ]);
        }
    }
}
