<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Validator;

/*
* CONTOH PENGGUNAAN HELPER VALIDATOR
*/

class BarangController extends Controller
{
    public function simpanBarang(Request $r)
    {
    	// Validasi requiest
    	$validator = Validator::make($r->all(),[
    		'nama_barang' => 'required|min:10'
    	]);

    	// Pengecekan apabila terjadi kesalahan validasi
    	if($validator->fails()){
    		abort(403, "Kesalahan input.");
    	} else {
    	// Aksi apabila tidak ada kesalahan validasi
    		try{
    			// Mencoba eksekusi perintah
				$data 	= new Barang();
				$data->nama_barang 	= $r->nama_barang;
				$data->harga_barang = $r->harga_barang;
				$data->qty 			= $r->qty_barang;
				$data->save();

				return redirect('/input-barang');
    		} catch(Exception $e){
    			// Redirect apabila terjadi kesalahan
    			return view('errors.123');
    		}
    	}
    }
}
