<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;
use DB;

class MensagemController extends Controller
{

	public static function criar(){

	}

    public function listar(){
        $mensagens = DB::select("SELECT * FROM mensagems");
        return view('listaMensagens', ['mensagens' => $mensagens]);
    }
}
