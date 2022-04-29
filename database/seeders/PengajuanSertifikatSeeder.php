<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sertifikat;

class PengajuanSertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'user_id' => '1',
                'luas_tanah' => '200',
                'alamat' => 'Bandung',
                'harga' => '700000',
                'deskripsi' => 'ujungberung',
                'kategori' => '2',
                'foto' => 'layanan/buatsertif/foto1.jpg',
                'status' => '1',
            ],
            [
                'user_id' => '2',
                'luas_tanah' => '225',
                'alamat' => 'Pasanggrahan',
                'harga' => '1000000',
                'deskripsi' => 'dekat Indomaret',
                'kategori' => '2',
                'foto' => 'layanan/buatsertif/foto2.jpg',
                'status' => '1',
            ],
            [
                'user_id' => '3',
                'luas_tanah' => '370',
                'alamat' => 'Bogor',
                'harga' => '950000',
                'deskripsi' => 'Cibinong',
                'kategori' => '2',
                'foto' => 'layanan/buatsertif/foto3.jpg',
                'status' => '1',
            ],
        ];
        foreach ($user as $key => $value) {
            Sertifikat::create($value);
        }
    }
}
