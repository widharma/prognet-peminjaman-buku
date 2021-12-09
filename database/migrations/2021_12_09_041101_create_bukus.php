<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('kode',10);
            $table->string('judul',100);
            $table->string('deskripsi',255);
            $table->enum('penerbit',['Tiga Serangkai','Balai Pustaka']);
            $table->year('tahun_terbit',4);
            $table->string('pengarang',100);
            $table->integer('jumlah_halaman')->length(11);
            $table->enum('kondisi',['Baik','Sedang','Rusak']);
            $table->enum('status',['Bebas','Terpinjam']);
            $table->string('foto_sampul',255);
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
        Schema::dropIfExists('bukus');
    }
}
