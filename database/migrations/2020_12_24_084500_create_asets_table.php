<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('no_rujukan');
            $table->string('nama_aset');
            $table->string('model');
            $table->string('pembekal');
            $table->string('tahun_beli');
            $table->date('tarikh_beli');
            $table->decimal('harga', 10, 2);
            $table->string('lokasi');
            $table->string('status')->default('Guna');
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
        Schema::dropIfExists('asets');
    }
}
