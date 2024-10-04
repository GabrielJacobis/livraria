<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de professores</title>
</head>
<body>
    <h1>Detalhes de professores</h1>
    <p>Nome: {{ $professor['nome'] }}</p>
    <p>E-mail: {{ $professor['email'] }}</p>
    <a href="{{ route('professores.index') }}"> Voltar para a Lista </a>
</body>
</html>