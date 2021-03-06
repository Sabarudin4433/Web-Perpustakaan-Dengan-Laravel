<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul_buku');
            $table->string('pengarang_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_buku');
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
        Schema::dropIfExists('tb_buku');
    }
}
