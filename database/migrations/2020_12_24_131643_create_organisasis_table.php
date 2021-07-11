<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->string('kod');
            $table->string('nama_organisasi');
            $table->string('alamat1');
            $table->string('alamat2')->nullable();
            $table->string('alamat3')->nullable();
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri');
            $table->string('telefon')->nullable();
            $table->string('email_org')->nullable();
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
        Schema::dropIfExists('organisasis');
    }
}
