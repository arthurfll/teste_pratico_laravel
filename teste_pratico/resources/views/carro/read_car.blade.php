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
    <a href="{{ route('carros.create') }}">adicionar carro</a>


        @foreach ($carros as $carro)

        <li> <a href="{{ route('carros.show',['carro'=>$carro->id]) }}">{{ $carro->nome }}  {{ $carro->slug_dono }}</a> | <a href="{{ route('carros.edit', ['carro' => $carro->id]) }}">edit</a> </li>
        @endforeach
    </ul>
</body>
</html>