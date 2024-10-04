<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    private $professores;
	public function __construct()
    {
		$this->professores = [
			1 => ['id' => 1, 'nome' => 'Armando', 'email' => 'armando@exemplo.com'],
			2 => ['id' => 2, 'nome' => 'Irineu', 'email' => 'irineu@exemplo.com'],
		];
	}
	
	public function index()
	{
		return view('professores.index', ['professores' => $this->professores]);
	}
	
	public function show($id)
	{
		return view('professores.show', ['professor' => $this->professores[$id]]);
	}
}
