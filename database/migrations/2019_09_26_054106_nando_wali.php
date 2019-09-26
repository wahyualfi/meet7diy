<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NandoWali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali', function (Blueprint $t) {
            $t->Increments('nik');
            $t->string('nama');
            $t->string('alamat');
            $t->integer('idkelas');
            $t->timestamps();

            $t->foreign('idkelas')
                ->references('id')
                ->on('kelas')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wali');
    }
}
