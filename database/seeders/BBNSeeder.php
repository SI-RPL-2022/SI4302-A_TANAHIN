<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BBN;

class BBNSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bbn = [
            [
                'luas' => '500',
                'alamat' => 'JL. Kentang',
                'harga' => '750000000',
                'pemilik_lama' => 'cahyo',
                'pemilik_baru' => 'edbert',
                'upload_sertifikat' => 'sertifikat(1).jpg',
                'upload_foto_tanah' => 'foto_tanah(1).jpg',
            ],
            [
                'luas' => '800',
                'alamat' => 'JL. Tomat',
                'harga' => '950000000',
                'pemilik_lama' => 'bima',
                'pemilik_baru' => 'fitria',
                'upload_sertifikat' => 'sertifikat(1).jpg',
                'upload_foto_tanah' => 'foto_tanah(1).jpg',
            ],
        ];

        foreach ($bbn as $key => $value)
        {
            BBN::create($value);
        }
    }
}
