<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function simpanBarang(Request $r)
    {
    	// $r->nama_barang
		// $r->harga_barang
		// $r->qty_barang
		$data 	= new Barang();
		$data->nama_barang 	= $r->nama_barang;
		$data->harga_barang = $r->harga_barang;
		$data->qty 			= $r->qty_barang;
		$data->save();

		return redirect('/input-barang');
    }
}
