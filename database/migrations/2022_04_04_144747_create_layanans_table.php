<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('kode_transaksi')->unique();
            $table->integer('luas_tanah');
            $table->text('alamat');
            $table->integer('harga');
            $table->text('deskripsi')->nullable($value = true);
            $table->text('kategori');
            $table->text('maps')->nullable();
            $table->text('pemilik_lama')->nullable($value = true);
            $table->text('pemilik_baru')->nullable($value = true);
            $table->text('sertifikat')->nullable($value = true);
            $table->text('foto')->nullable($value = true);
            $table->integer('status')->default(1);
            $table->text('moservicer')->nullable();
            $table->text('relander')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanans');
    }
}
