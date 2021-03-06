<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Professor;

class ProfessorTest extends TestCase
{
    use RefreshDatabase;

	public function inicializarArrayProfessor(){
		$professor = Professor::factory()->make();
		$dados = $professor->toArray();
        return $dados;
	}

//Feature: Cadastro de Professor
    public function testCadastroProfessorIncompleto()
    {
		$dados = $this->inicializarArrayProfessor();
		$dados['nome']="";
        $response = $this->post('/cadastrar/professor', $dados)->assertStatus(302);
    }
}
