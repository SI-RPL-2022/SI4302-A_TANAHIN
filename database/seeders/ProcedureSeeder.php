<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Procedure;



class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procedure = [
            [
                'title' => 'Menjual Tanah Di Moland',
                'description' => '<ol><li>Penjual mempersiapkan kelengkapan surat-surat tanah.</li><li>Jika tanah yang dijual belum lengkap, penjual akan diberikan pilihan untuk menggunakan layanan MoLand pengurusan sertifikat</li><li>Jika tanah yang dijual sudah lengkap, penjual akan memasukan formulir pendaftaran agar tanahnya dapat ditampilkan di marketplace</li><li>Real Lander akan melakukan validasi ke lokasi penjualan tanah jika data yang dimasukan tidak meyakinkan</li></ol>',
                'image_path' => 'procedure/prosedur1.png',
            ],
            [
                'title' => 'Membeli Tanah Di Moland',
                'description' => '<ol class="text-justify" style="color: rgb(12, 12, 12); font-family: Montserrat, sans-serif;"><li>Pembeli memilih tanah di e-commerce MoLand</li><li>Pembeli dapat bertanya-tanya kepada Customer Service MoLand mengenai tanah yang akan dibeli</li><li>Pembeli melakukan pembayaran melalui transfer bank ke Rekening MoLand</li><li>Pembeli menerima kelengkapan surat-surat tanah</li></ol>',
                'image_path' => 'procedure/prosedur2.png',
            ],
            [
                'title' => 'Layanan Administrasi Pembuatan Sertifikat Baru atau Ganti Nama Sertifikat',
                'description' => '<ol class="text-justify" style="color: rgb(12, 12, 12); font-family: Montserrat, sans-serif;"><li>Pengguna melakukan pengisian formulir layanan administrasi</li><li>Admin akan menghubungi pengguna untuk menentukan jadwal survey</li><li>Real Lander dan Mapping Expert akan datang langsung ke lokasi untuk membantu pengguna</li><li>Pengguna dapat menunggu hasilnya</li></ol>',
                'image_path' => 'procedure/prosedur3.png',
            ],
        ];

        foreach ($procedure as $key => $value) {
            Procedure::create($value);
        }
    }
}
