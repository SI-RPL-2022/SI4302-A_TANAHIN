<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BBN extends Model
{
    use HasFactory;

    protected $table = 'bbns';
    protected $fillable = ["id", "luas_tanah", "alamat", "harga", "pemilik_lama", "Pemilik_baru", "kategori", "upload_sertifikat", "upload_foto_tanah", "created_at"];
    protected $guarded = [];

    public function bbn()
    {
        return $this->belongsTo(BBN::class);
    }
}
