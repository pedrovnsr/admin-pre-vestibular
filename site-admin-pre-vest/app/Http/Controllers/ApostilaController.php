<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apostila;
use DB;

class ApostilaController extends Controller
{

	public static function criar(){

	}

    public function listar(){
        $apostilas = DB::select("SELECT * FROM apostilas");
        return view('listaApostilas', ['apostilas' => $apostilas]);
    }
}
