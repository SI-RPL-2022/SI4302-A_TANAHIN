<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('kode_transaksi')->unique();
            $table->integer('luas_tanah');
            $table->text('alamat');
            $table->integer('harga');
            $table->text('deskripsi')->nullable($value = true);
            $table->text('kategori');
            $table->text('foto')->nullable($value = true);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('sertifikats');
    }
}
