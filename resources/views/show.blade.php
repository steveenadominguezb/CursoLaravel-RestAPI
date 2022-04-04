<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show a Game</title>
</head>

<body>

    @if ($categorie)
    <h1>Bienvenido a la pagina del juego: {{$name_game}} que pertenece a la categoria: {{$categorie}}</h1>
    @else
    <h1>Bienvenido a la pagina del juego: {{$name_game}}</h1>
    @endif

    <h2>{{ $date }}</h2>
</body>

</html>