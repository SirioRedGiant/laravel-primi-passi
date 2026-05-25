<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Chi Siamo</title>
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
        <h1>Chi Siamo</h1>
        <h2>Sono uno sviluppatore Laravel alle prime armi, ma carico di entusiasmo!</h2>
        <p> {{$presentazione}} </p>
        <p> {{$motto}}</p>
    </main>
</body>

</html>