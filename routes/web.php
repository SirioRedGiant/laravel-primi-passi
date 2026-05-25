<?php


//Le View dovrebbero non devono elaborare dati, devono solo mostrarli. I dati dovrebbero arrivargli dalla Rotta (o meglio ancora da un Controller).Per stampare una variabile in Blade in modo sicuro (proteggendo il sito da attacchi XSS), Laravel usa una sintassi a doppie parentesi graffe: {{ $variabile }}

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $welcome = "Ciao, sono nuovo qua... i miei primi passi in questo mondo";
    $quote = "che figata!";
    return view('home', [
        'messaggio' => $welcome,
        'quote' => $quote
    ]);
})->name('home');


Route::get('/chi-siamo', function () {
    $iAm = "Noob a rapporto";
    $motto = "Barcollo, ma non mollo";
    return view('about', [
        'presentazione' => $iAm,
        'motto' => $motto
    ]);
})->name('about');


Route::get('/contatti', function () {
    $email = "1233456789";
    $kkk = "random service";
    return view('contacts', [
        'email' => $email,
        'servizio' => $kkk
    ]);
})->name('contacts');

Route::get('/errori-nel-back', function () {
    $serg_Johnson = "l'esercito non paga ad ore";
    $master_Chief = "give me a weapon";
    return view('bloopers', compact('serg_Johnson', 'master_Chief'));
})->name('bloopers');
