<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/pag-index.css">
</head>
<body>
    <a href="/"><h1>Oficina Laravel</h1></a>
    
    <div class="corpo">
        <div class="esquerda">

            <div class="links">
                <a href="{{ route('carros.index') }}">Lista de Carros</a>
                <a href="{{ route('revisoes.index') }}">Lista de Revisões</a>
                <a class="cadastrar" href="{{ route('clientes.create') }}">Adicionar Cliente</a>
            </div>

        
            


            <div class="clientes">
            <ul>
                @foreach ($clientes as $cliente)

                <li> <a href="{{ route('clientes.show',['cliente'=>$cliente->id]) }}">{{ $cliente->nome }}  {{ $cliente->sobrenome }}</a>  <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}">Edit</a> </li>
                @endforeach

            </ul>
            </div>
        </div>

        <div class="grafico">
            <p>{{ $chart1->options['chart_title'] }}</p>
            {!! $chart1->renderHtml() !!}
        </div>

        {!! $chart1->renderChartJsLibrary() !!}
        {!! $chart1->renderJs() !!}

    </div>
</body>
</html>