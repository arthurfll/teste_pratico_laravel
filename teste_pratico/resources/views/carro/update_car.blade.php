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
    <p>Editar</p>
    <form action="{{ route('carros.update',['carro'=> $carro->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        nome <input type="text" name="nome" value="{{ $carro->nome }}">
        marca <input type="text" name="marca" value="{{ $carro->marca }}">
        cor <input type="text" name="cor" value="{{ $carro->cor }}">
        ano_lancamento <input type="text" name="ano_lancamento" value="{{ $carro->ano_lancamento }}">
        slug_dono <input type="text" name="slug_dono" value="{{ $carro->slug_dono }}">

        <button type="submit">criar</button>
    </form>
</body>
</html>