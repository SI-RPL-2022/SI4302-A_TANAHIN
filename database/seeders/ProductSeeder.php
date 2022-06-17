<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'user_id' => 7,
                'luas' => 1000,
                'alamat' => 'Jalan Telekomunikasi',
                'kota' => 'Bandung',
                'harga' => 1000000,
                'cocok' => 'bisnis',
                'deskripsi' => 'ini tanah bisnis',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],
            [
                'user_id' => 8,
                'luas' => 2000,
                'alamat' => 'Jalan Telekomunikasi 2',
                'kota' => 'Bandung',
                'harga' => 1100000,
                'cocok' => 'pribadi',
                'deskripsi' => 'ini tanah pribadi',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],
            [
                'user_id' => 9,
                'luas' => 1500,
                'alamat' => 'Jalan Telekomunikasi 3',
                'kota' => 'Bandung',
                'harga' => 1300000,
                'cocok' => 'pabrik',
                'deskripsi' => 'ini tanah pabrik',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],
            [
                'user_id' => 7,
                'luas' => 1250,
                'alamat' => 'Jalan Telekomunikasi 4',
                'kota' => 'Bandung',
                'harga' => 1650000,
                'cocok' => 'bisnis',
                'deskripsi' => 'ini tanah bisnis',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],
            [
                'user_id' => 8,
                'luas' => 900,
                'alamat' => 'Jalan Telekomunikasi 5',
                'kota' => 'Bandung',
                'harga' => 1750000,
                'cocok' => 'bisnis',
                'deskripsi' => 'ini tanah bisnis',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],
            [
                'user_id' => 9,
                'luas' => 1600,
                'alamat' => 'Jalan Telekomunikasi 6',
                'kota' => 'Bandung',
                'harga' => 1350000,
                'cocok' => 'bisnis',
                'deskripsi' => 'ini tanah bisnis',
                'sertifikat' => 'sertifikat tanah.jpg',
                'foto1' => 'tanah.jpg',
                'foto2' => 'tanah.jpg',
                'foto3' => 'tanah.jpg',
            ],


        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
