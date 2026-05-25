<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Bloopers</title>
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
        <h1>Blooper</h1>
        <h2>Sono confusionario il 90% delle volte😂!</h2>
        <p> {{$serg_Johnson}} </p>
        <p> {{ $master_Chief }} </p>
    </main>
</body>

</html>