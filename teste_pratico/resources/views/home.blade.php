<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <a class="titulo" href="/"><h1>Oficina Laravel</h1></a>
    
    <div class="anchor">
        <a class="item" href="{{ route('clientes.index') }}">Lista de Clientes</a>
        <a class="item" href="{{ route('carros.index') }}">Lista de Carros</a>
        <a class="item" href="{{ route('revisoes.index') }}">Lista de Revisões</a>
    </div>
</body>
</html>