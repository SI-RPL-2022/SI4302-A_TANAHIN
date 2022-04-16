<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BBN extends Model
{
    use HasFactory;

    protected $table = 'bbns';
    protected $guarded = [];

    public function bbn()
    {
        return $this->belongsTo(BBN::class);
    }
}
