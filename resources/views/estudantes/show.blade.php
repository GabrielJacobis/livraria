<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Estudante</title>
</head>
<body>
    <h1>Detalhes do Estudantes</h1>
    <p>Nome: {{ $estudante['nome'] }}</p>
    <p>E-mail: {{ $estudante['email'] }}</p>
    <a href="{{ route('estudantes.index') }}"> Voltar para a Lista </a>
</body>
</html>