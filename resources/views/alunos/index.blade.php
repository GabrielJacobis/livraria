@extends('layouts.app')
@section('title', 'Listagem de Alunos')
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->data_nascimento }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>
                        <a href="{{ route('alunos.edit', $aluno->id) }}" class"btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST"  style="display:inline-block;">
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Alunos</h1>
        <a href="{{ route('alunos.create') }}" class="btn btn-primary">Adicionar Aluno</a>
    </div>

    <