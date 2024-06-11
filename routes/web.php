<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', function () {  //inserisci URI /articoli nel browser
    return view('articles');
});

Route::get('/contatti', function () {
    return view('contacts');
});

Route::get('/chi-siamo', function () {
    $variabile1 = 'Inserisco qui';
    return view('chi_siamo', ['variabile1' => $variabile1]);
});
