<?php

use Illuminate\Support\Facades\Route;

Route::get('/list-menu', function () {
    return 'Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy.';
});

Route::get('/list-menu/bakso/8000', function () {
    return 'Anda memilih makanan bakso dengan harga 8000.';
});
