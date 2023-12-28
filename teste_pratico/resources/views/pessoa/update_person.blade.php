<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pag-form-config.css">
    <title>Document</title>
</head>
<body>
    <a href="/"><h1>Oficina Laravel</h1></a>
    <h1>Editar</h1>
    <form action="{{ route('clientes.update',['cliente'=> $cliente->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        nome <input type="text" name="nome" value="{{ $cliente->nome }}">
        sobrenome <input type="text" name="sobrenome" value="{{ $cliente->sobrenome }}">
        slug <input type="text" name="slug" value="{{ $cliente->slug }}">
        genero <input type="text" name="genero" value="{{ $cliente->genero }}">

        <button type="submit">editar</button>
    </form>
</body>
</html>