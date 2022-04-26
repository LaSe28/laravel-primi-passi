<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySite - Contacts</title>
</head>
<body>
    <header>
        <ul style="list-style: none; display: flex; justify-content: center">
            <li style="margin: 0 1rem"><a href="{{route('home')}}">Home</a></li>
            <li style="margin: 0 1rem"><a href="{{route('shop')}}">Shop</a></li>
        </ul>
    </header>
    <h1>
        Our Contacts
    </h1>
    <div>
        <ul>
            @foreach ($contacts as $contact)
            <li>{{ $contact['type']}}
                <ul>
                    @foreach ($contact['all'] as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
