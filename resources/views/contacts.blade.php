<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Contatti</title>
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
        <h1>Contattaci</h1>
        <h2>Invia una mail a: infoNoob@laravel-primi-passi</h2>
        <p> {{$email}}</p>
        <p> {{$servizio}} </p>
    </main>
</body>

</html>