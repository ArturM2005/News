<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hitech', function () {
    return 'Новости о высоких технологиях';
});
Route::get('/medicina', function () {
    return 'Новости о медицине';
});
Route::get('/tag/{tag}', function (string $tag) {
    switch ($tag) {
        case 'политика':
            return 'новости политики';
        case 'спорт':
            return 'новости спорта';
        case 'авто':
            return 'новости авто';
    };
});
Route::get('nauka', function () {
    return 'новости о науке';
});

