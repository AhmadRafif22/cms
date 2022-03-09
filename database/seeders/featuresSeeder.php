<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class featuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'image' => 'pic1.jpg',
                'title' => 'Judul Gambar 1',
                'description' => 'deskripsi gambar 1'
            ],
            [
                'image' => 'pic2.jpg',
                'title' => 'Judul Gambar 2',
                'description' => 'deskripsi gambar 2'
            ],
            [
                'image' => 'pic3.jpg',
                'title' => 'Judul Gambar 3',
                'description' => 'deskripsi gambar 3'
            ],
            [
                'image' => 'pic4.jpg',
                'title' => 'Judul Gambar 4',
                'description' => 'deskripsi gambar 4'
            ]
        ];
        DB::table('features')->insert($features);
    }
}
