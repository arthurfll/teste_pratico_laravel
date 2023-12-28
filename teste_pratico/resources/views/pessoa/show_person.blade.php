<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pag-index.css">
    <title>Document</title>
</head>
<body>
    <a href="/"><h1>Oficina Laravel</h1></a>
    <h2>Cliente {{ $cliente->nome }}</h2>

    <ul>
        @foreach ($cars as $carro)
        <li> <a href="{{ route('carros.show',['carro'=>$carro->id]) }}">{{ $carro->nome }} {{ $carro->marca }} {{ $carro->ultima_revisao }}</a> | <a href="{{ route('carros.edit', ['carro' => $carro->id]) }}">edit</a> </li>
        @endforeach
    </ul>


    <form action="{{ route('clientes.destroy',['cliente' => $cliente->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">
            deletar
        </button>
    </form>
</body>
</html>