<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
</head>
<body>
    <h1>Lista de Estudantes</h1>
    <ul>
        @foreach($estudantes as $estudante)
            <li>
                <a href="{{ route('estudantes.show', $estudante['id']) }}">
                    {{ $estudante['nome'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>