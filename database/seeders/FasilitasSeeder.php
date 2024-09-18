<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fasilitas = [
            [
                'nama' => 'Ruang Teori',
                'photo' => 'fasilitas/fasilitas 1.jpg',
            ],
            [
                'nama' => 'Lab UI/UX',
                'photo' => 'fasilitas/fasilitas 2.jpg',
            ],
            [
                'nama' => 'Musholla',
                'photo' => 'fasilitas/fasilitas 3.jpg',
            ],
            [
                'nama' => 'Kantin',
                'photo' => 'fasilitas/fasilitas 4.jpg',
            ],
            [
                'nama' => 'Pojok Membaca',
                'photo' => 'fasilitas/fasilitas 5.jpg',
            ],
        ];
        foreach ($fasilitas as $fasilitas) {
            Fasilitas::insert([
                'uuid' => uuid_create(),
                'nama' => $fasilitas['nama'],
                'photo' => $fasilitas['photo']
            ]);
        }
    }
}
