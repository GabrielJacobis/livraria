<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
</head>
<body>
    <h1>Lista de Professores</h1>
    <ul>
        @foreach($professores as $professor)
            <li>
                <a href="{{ route('professores.show', $professor['id']) }}">
                    {{ $professor['nome'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>