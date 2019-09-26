<?php

use Illuminate\Database\Seeder;

class data_baru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
        	[
	        	'nama_barang' 	=> 'Kecap ABC',
				'harga_barang' 	=> 10000,
				'qty' 			=> 10
			],
			[
	        	'nama_barang' 	=> 'Kecap Bangau',
				'harga_barang' 	=> 18000,
				'qty' 			=> 20
			],
        ]);
    }
}
