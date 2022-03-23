<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>{{ $comic['title'] }}</li>
        <li>{{ substr($comic['description'], 0, 100) }}</li>
        <li>{{ $comic['thumb'] }}</li>
        <li>{{ $comic['price'] }}</li>
        <li>{{ $comic['series'] }}</li>
        <li>{{ $comic['sale_date'] }}</li>
        <li>{{ $comic['type'] }}</li>
    </ul>
</body>
</html>