<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quaerat distinctio ratione laboriosam mollitia dolore ipsum illo! Quidem beatae placeat possimus reprehenderit doloribus error cupiditate, dolores blanditiis illum, mollitia quo.';

    return view('home', compact('text'));
});

Route::get('/info', function () {
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quaerat distinctio ratione laboriosam mollitia dolore ipsum illo! Quidem beatae placeat possimus reprehenderit doloribus error cupiditate, dolores blanditiis illum, mollitia quo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quaerat distinctio ratione laboriosam mollitia dolore ipsum illo! Quidem beatae placeat possimus reprehenderit doloribus error cupiditate, dolores blanditiis illum, mollitia quo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quaerat distinctio ratione laboriosam mollitia dolore ipsum illo! Quidem beatae placeat possimus reprehenderit doloribus error cupiditate, dolores blanditiis illum, mollitia quo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quaerat distinctio ratione laboriosam mollitia dolore ipsum illo! Quidem beatae placeat possimus reprehenderit doloribus error cupiditate, dolores blanditiis illum, mollitia quo.';

    return view('info', compact('text'));
});

