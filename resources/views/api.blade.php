<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumir rest api</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($characters as $character)
                <tr>
                    <td>{{ $character['char_id'] }}</td>
                    <td>{{ $character['name'] }}</td>
                    <td>
                            <img src="{{ $character['img'] }}" alt="img" style="width: 200px; height: 300px; object-fit: scale-down;">
                    </td>
                </tr>
            @empty
            No hay datos
                
            @endforelse
        </tbody>
    </table>
</body>
</html>