<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKutipanTabungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kutipan_tabungs', function (Blueprint $table) {
            $table->id();
            $table->date('tarikh_kutipan');
            $table->integer('rm100');
            $table->decimal('jum_rm100', 10, 2);
            $table->integer('rm50');
            $table->decimal('jum_rm50', 10, 2);
            $table->integer('rm20');
            $table->decimal('jum_rm20', 10, 2);
            $table->integer('rm10');
            $table->decimal('jum_rm10', 10, 2);
            $table->integer('rm5');
            $table->decimal('jum_rm5', 10, 2);
            $table->integer('rm1');
            $table->decimal('jum_rm1', 10, 2);
            $table->integer('rm05');
            $table->decimal('jum_rm05', 10, 2);
            $table->integer('rm02');
            $table->decimal('jum_rm02', 10, 2);
            $table->integer('rm01');
            $table->decimal('jum_rm01', 10, 2);
            $table->integer('rm005');
            $table->decimal('jum_rm005', 10, 2);
            $table->integer('jumlah_keping');
            $table->decimal('jumlah_besar', 10, 2);
            $table->string('pegawai_1');
            $table->string('pegawai_2');
            $table->string('pegawai_3');
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
        Schema::dropIfExists('kutipan_tabungs');
    }
}
