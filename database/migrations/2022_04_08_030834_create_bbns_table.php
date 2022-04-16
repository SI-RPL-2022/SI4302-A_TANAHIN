<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('luas_tanah');
            $table->string('alamat');
            $table->integer('harga');
            $table->string('pemilik_lama');
            $table->string('pemilik_baru');
            $table->string('upload_sertifikat');
            $table->string('upload_foto_tanah');
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
        Schema::dropIfExists('bbns');
    }
}
