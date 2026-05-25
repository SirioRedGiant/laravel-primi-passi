<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alla scoperta di Laravel</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('contacts') }}">Contatti</a></li>
                <li><a href="{{ route('bloopers') }}">Bloopers</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello awesome world!</h1>
        <h2>{{ $messaggio }}</h2>
        <p> {{ $quote }} </p>
    </main>
</body>

</html>