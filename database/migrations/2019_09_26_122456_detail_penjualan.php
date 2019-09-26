<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailPenjualan extends Migration
{
    private $table = 'detail_penjualan';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function(Blueprint $t){
            $t->integer('id_penjualan')->unsigned();
            $t->integer('id_barang')->unsigned();
            $t->integer('jumlah')->default(0);
            $t->integer('total_harga')->default(0);
            $t->timestamps();

            $t->foreign('id_penjualan')
                    ->references('id_penjualan') // table : penjualan
                    ->on('penjualan');
            $t->foreign('id_barang')
                    ->references('id_barang') // table : barang
                    ->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
