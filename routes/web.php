<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'домашняя страница';
});
Route::get('/hitech', function () {
    return 'новости о высоких технологиях';
});
Route::get('/medicina', function () {
    return 'новости о медицине';
});
Route::get('/tag/{tag}', function (string $tag) {
    switch ($tag) {
        case 'политика':
            return 'новости политики';
        case 'politics':
            return 'новости политики';
        case 'спорт':
            return 'новости спорта';
        case 'sport':
            return 'новости спорта';
        case 'авто':
            return 'новости авто';
        case 'auto':
            return 'новости авто';
    };
});
Route::get('nauka', function () {
    return 'новости о науке';
});
Route::redirect('/news.html/{name?}', '/', 301);
Route::redirect('/nauka.htm', '/nauka', 301);
Route::redirect('/nauka.html', '/nauka', 301);
Route::redirect('/nauka/{smth?}', '/nauka', 301);
Route::redirect('/nauka/11-10-1999_nobel.htm', '/nauka', 301);
Route::redirect('/наука', '/nauka', 301);
Route::redirect('/tag/здоровье', '/medicina', 301);
Route::redirect('/tag/hi-tech', '/hitech', 301);
Route::redirect('/internet', '/hitech', 301);
