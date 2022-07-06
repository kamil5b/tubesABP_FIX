<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\destinasi;

class DestinasiController extends Controller
{
    public function index() {
        $dbdestinasi = DB::table('destinasi')->get();

        return view('admin.destination',['destinasi' => $dbdestinasi]);
    }

    public function add() {
 
		return view('admin.destination.add');
 
	}


    public function store(Request $request) {
		DB::table('destinasi')->insert([
			'Lokasi' => $request->Lokasi,
		]);

		return redirect('/destination');
    }

    public function delete() {
        return view('admin.destination.delete');
    }

    public function hapus($id)
	{
		DB::table('destinasi')->where('Lokasi',$id)->delete();
		
		return redirect('/destination');
	}

    public function update(Request $request)
	{
		DB::table('destinasi')->where('Lokasi',$request->id)->update([
			'Lokasi' => $request->Lokasi,
		]);

		return redirect('/destination');
	}
}
