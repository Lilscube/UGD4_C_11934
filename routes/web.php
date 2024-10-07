<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-11934');
});

Route::get('/home-11934', function () {
    return view('home-11934');
});

Route::get('/profile-Anjes', function () {
    $data = [
        'foto' => '/images/Anjes.png',
        'nama' => 'I PUTU ANJES VERNANDA - 220711934',
        'quote' => 'Tetap Bertahan Walaupun NOOB, Pepatah Mengatakan Berakit rakit kehulu, berenang
        renang ketepian, bersakit sakit dahulu bersenang senang kemudian',
    ];
    return view('profile-Anjes', compact('data'));
});



