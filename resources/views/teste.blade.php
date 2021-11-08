<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellow Word {{ $nome .' '. $sobrenome }}!</h1>
    {{ isset($teste)?$test:"outro valor" }}
    {{ $teste??"outro valor" }}

    {!! "<h2> Testando </h2>" !!}

    @if ($value > 100)
        <p>Valor maior que 100</p>
    @else
        <p>Valor menor que 100</p>
    @endif

    @for($i = 0; $i < $value; $i++)
       <br> {{$i}}
    @endfor

    @php
        $i = 0;
        $myArray = ['1', '2', '3'];
    @endphp

    @while($i < $value)
        {{$i+1}}
        @php
            $i++;
        @endphp
    @endwhile

    @foreach($myArray as $key => $value)
        <p>{{$loop->index}} {{$key}} - {{$value}}</p>
    @endforeach

    @foresl([] as $key => $value)
        <p>{{$loop->index}} {{$key}} - {{$value}}</p>
    @empty
        <p>Nenhum registro encontrado!</p>
    @endforelse






    
    






</body>
</html>