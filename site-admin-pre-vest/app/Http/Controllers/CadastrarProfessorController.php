<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Professor;

class CadastrarProfessorController extends Controller
{
    public function prepararCadastro(){
        return view('cadastrarProfessor');
    }

	public function cadastrar(Request $request){
		try{
			\App\Validator\ProfessorValidator::validate($request->all());
			$dados = $request->all();
			$dados['disponibilidade'] = implode(', ', $dados['disponibilidade']);
			$dados['areasAtuacao'] = implode(', ', $dados['areasAtuacao']);
			Professor::create($dados);
			return "Professor cadastrado";
		}
		catch(\App\Validator\ValidationException $exception){
			return redirect('/cadastrar/professor')->withErrors($exception->getValidator())->withInput();

		}
	}
}
