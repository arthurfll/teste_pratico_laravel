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
    <form action="{{ route('revisoes.store') }}" method="post">
        @csrf
        <div class="campo">
            <label for="">Id do Carro:</label>
            <input type="number" name="car_id">
        </div>
        <button type="submit">criar</button>
    </form>
</body>
</html>