<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySite - Home</title>
</head>
<body>
    <header>
        <ul style="list-style: none; display: flex; justify-content: center">
            <li style="margin: 0 1rem"><a href="{{route('shop')}}">Shop</a></li>
            <li style="margin: 0 1rem"><a href="{{route('contacts')}}">Contacts</a></li>
        </ul>
    </header>
    <h1>
        Hello World
    </h1>
    <p>Ciao {{ $nome }}</p>
</body>
</html>
