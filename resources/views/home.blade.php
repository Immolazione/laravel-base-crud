<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Crude</title>
</head>
<body>
    <div class="container">
        <h1>DC COMICS</h1>
        <a href="{{ route('comics.index') }}">Lista Fumetti</a>
        <a href="{{ route('comics.create') }}">Crea Squadra</a>
    </div>
</body>
</html>