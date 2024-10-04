<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudanteController extends Controller
{
	private $estudantes;
	public function __construct()
	{
		$this->estudantes = [
			1 => ['id' => 1, 'nome' => 'João', 'email' => 'joao@exemplo.com'],
			2 => ['id' => 2, 'nome' => 'Maria', 'email' => 'maria@exemplo.com'],
		];
	}
	
	public function index()
	{
		return view('estudantes.index', ['estudantes' => $this->estudantes]);
	}
	
	public function show($id)
	{
		return view('estudantes.show', ['estudante' => $this->estudantes[$id]]);
	}
}
