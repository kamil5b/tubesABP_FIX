<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paket;

class PaketController extends Controller
{
    public function index() {
        $dbpaket = DB::table('paket')->get();

        return view('admin.package',['dbpaket' => $dbpaket]);
    }

    public function add() {
 
		return view('admin.package.add');
	}

	public static function getAll(){
		$dbpaket = DB::table('paket')->get();
		return response()->json([
			'success' => true,
			'data' => $dbpaket
		   ]);
	}

    public function store(Request $request) {
		DB::table('paket')->insert([
			'nama' => $request->nama,
            'durasi' => $request->durasi,
            'pulau' => $request->pulau,
            'fasilitas' => $request->fasilitas,
            'fasilitas2' => $request->fasilitas2,
            'fasilitas3' => $request->fasilitas3,
            'harga' => $request->harga,
			'url_pic' => $request->url_pic
		]);

		return redirect('/package');
    }

    public function delete() {
        return view('admin.package.delete');
    }

    public function hapus($id)
	{

		DB::table('paket')->where('nama',$id)->delete();
		
		return redirect('/package');
	}

    public function update(Request $request)
	{
		DB::table('paket')->where('nama',$request->id)->update([
			'nama' => $request->nama,
			'durasi' => $request->durasi,
			'pulau' => $request->deskripsi,
			'fasilitas' => $request->fasilitas,
			'fasilitas2' => $request->fasilitas2,
			'fasilitas3' => $request->fasilitas3,
            'harga' => $request->harga,
		]);

		return redirect('/package');
	}


}
