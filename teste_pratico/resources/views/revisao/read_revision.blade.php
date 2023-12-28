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
    <a href="{{ route('revisoes.create') }}">adicionar revisao</a>
    <ul>
        @foreach ($revisoes as $revisao)

        <li> <a href="{{ route('revisoes.show',['reviso'=>$revisao->id]) }}">{{ $revisao->created_at }}</a> </li>
        @endforeach
    </ul>
</body>
</html>