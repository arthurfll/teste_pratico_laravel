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
    <h1><a href="/">Oficina Laravel</a></h1>
    <p>Criar</p>
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="campo">
            <label for=""> Nome: </label>
            <input type="text" placeholder="Insira Nome" name="nome">
        </div>

        <div class="campo">
            <label for=""> Sobrenome: </label>
            <input type="text" placeholder="Insira o Sobrenome" name="sobrenome">
        </div>

        <div class="campo">
            <label for=""> Slug: </label>
            <input type="text" placeholder="Insira o Slug" name="slug">
        </div>

        <div class="campo">
            <label for="">Gênero:</label>
        <select name="genero">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
           </select>
        </div>
        <button type="submit">Criar</button>
    
    </form>
</body>
</html>