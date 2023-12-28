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
    <a href="{{ route('carros.index') }}">lista de carros</a>
    <a href="{{ route('revisoes.index') }}">lista de revisões</a>


    <a href="/"><h1>Oficina Laravel</h1></a>
    <h2>carro {{ $carro->nome }}</h2>

    Ultimas Revisões
    <ul>
        @foreach ($revisoes as $revisao)
            <li>{{ $revisao->created_at }}</li>
        @endforeach
     </ul>
    <ul>


    <form action="{{ route('carros.destroy',['carro' => $carro->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">
            deletar
        </button>
    </form>
</body>
</html>