<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bookings;

class BookingsController extends Controller
{

	public function getAll($user_id){
		$dbbookings = DB::table('bookings')->where('user_id', $user_id)->get();
		return response()->json([
			'success' => true,
			'data' => $dbbookings
		   ]);
	}

	public function get($id){
		$dbbookings = DB::table('bookings')->where('id', $id)->get();
		return response()->json([
			'success' => true,
			'data' => $dbbookings
		   ]);
	}

    public function store(Request $request) {
		DB::table('bookings')->insert([
			'paket_id' => $request->paket_id,
            'user_id' => $request->user_id,
            'tanggal' => $request->tanggal,
		]);

		return response()->json([
			'success' => true,
		   ]);
    }

    public function hapus($id)
	{

		DB::table('bookings')->where('id',$id)->delete();
		
		return response()->json([
			'success' => true,
		   ]);
	}

    public function update(Request $request)
	{
		DB::table('bookings')->where('id',$request->id)->update([
			'tanggal' => $request->tanggal,
		]);

		return response()->json([
			'success' => true,
		   ]);
	}


}
