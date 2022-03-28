<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('comics.create') }}">Crea Fumetto</a>

    @foreach($comics as $comic)
    <ul>
        <li>{{ $comic['title'] }}</li>
        <li>{{ substr($comic['description'], 0, 100) }}</li>
        <li>{{ $comic['thumb'] }}</li>
        <li>{{ $comic['price'] }}</li>
        <li>{{ $comic['series'] }}</li>
        <li>{{ $comic['sale_date'] }}</li>
        <li>{{ $comic['type'] }}</li>
    </ul>
    <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
    
    <form 
        action="{{ route('comics.destroy', $comic->id) }}" 
        method="POST">
        @METHOD('delete')
        @CSRF
            <button type="submit">Elimina</button>
    </form>
    @endforeach
</body>
</html>