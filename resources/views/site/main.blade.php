<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>

<body>
    <h3>Principal</h3>

    <ul>
        <li>
            <a href="{{ route('site.login') }}">Conecte-se</a>
        </li>
        <li>
            <a href="{{ route('site.main') }}">Pincipal</a>
        </li>
         <li>
            <a href="{{ route('site.information') }}">Sobre nós</a>
        </li>
        <li>
            <a href="{{ route('site.contact') }}">Contato</a>
        </li>
    </ul>
</body>

</html>