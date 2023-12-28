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
    <p>Criar</p>
    <form action="{{ route('carros.store') }}" method="post">
        @csrf
        <input type="text" name="nome">
        <input type="text" name="marca">
        <input type="text" name="cor">
        <input type="text" name="ano_lancamento">
        <input type="text" name="slug_dono">

        <button type="submit">criar</button>
    </form>
</body>
</html>