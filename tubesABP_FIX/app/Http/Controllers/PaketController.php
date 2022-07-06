<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paket;

class PaketController extends Controller
{
    public function index() {
        $dbpaket = DB::table('paket')->get();

        return view('package.holiday',['dbpaket' => $dbpaket]);
    }

}
