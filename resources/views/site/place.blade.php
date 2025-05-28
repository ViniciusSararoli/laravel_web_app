<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localidade</title>
</head>

<body>
    <h3>Localidade</h3>
    {{-- Retorna os estados e cidades existendos no Brasil --}}
    <ul>
        <li>
            <ul>{{ $state }}</ul>
        </li>
        <li>
            <ul>{{ $city }}</ul>
        </li>
    </ul>


    @if ($state != null)
        {{-- @dd($brazilStateCity) --}}
         @foreach ($brazilStateCity as $brazilState)
            @if ($state == $brazilState['acronym'])
                @dd($brazilState['cities'])
            @endif
        @endforeach
    @endif

</body>

</html>
