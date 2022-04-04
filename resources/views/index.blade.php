<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Games</title>
</head>
<body>
    <h1>Página que muestra la lista de los juegos</h1>
    <table style="text-align: center; margin-left: 20px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($videogames as $key => $game)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$game}}</td>
                </tr>
                @empty
                <tr><td>No hay datos</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>