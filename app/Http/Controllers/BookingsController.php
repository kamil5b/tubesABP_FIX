<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bookings;

class BookingsController extends Controller
{

	public static function getAll($user_id){
		$dbbookings = DB::table('bookings')->join('paket', 'paket.id', '=', 'bookings.paket_id')->where('user_id', $user_id)->select('bookings.id as id', 'user_id','tanggal','paket.id as paket_id','nama','durasi',"pulau",'harga','url_pic')->get();
		return response()->json([
			'success' => true,
			'data' => $dbbookings
		   ]);
	}

    public static function store(Request $request) {
		DB::table('bookings')->insert([
			'paket_id' => $request->paket_id,
            'user_id' => $request->user_id,
            'tanggal' => $request->tanggal,
		]);

		return response()->json([
			'success' => true,
		   ]);
    }

    public static function hapus($id)
	{

		DB::table('bookings')->where('id',$id)->delete();
		
		return response()->json([
			'success' => true,
		   ]);
	}

    public static function update(Request $request)
	{
		DB::table('bookings')->where('id',$request->id)->update([
			'tanggal' => $request->tanggal,
		]);

		return response()->json([
			'success' => true,
		   ]);
	}


}
