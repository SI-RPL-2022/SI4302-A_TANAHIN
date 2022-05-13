<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualtanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jualtanahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->integer('luas_tanah');
            $table->text('alamat');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->text('sertifikat');
            $table->text('foto');
            $table->integer('status')->default(1);
            $table->text('moservicer')->nullable();
            $table->text('relander')->nullable();
            $table->text('maps')->nullable();
            $table->text('foto_evidence')->nullable();
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
        Schema::dropIfExists('jualtanahs');
    }
}
