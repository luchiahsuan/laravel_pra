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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('word');
});
Route::get('/', function () {
    for ($i = 0; $i <= 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    for ($i = 0; $i <= 4; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 4; $k >=$j; $k--) {
            echo "*";
        }
        echo "<br>";
    }
    return view('home');

});

Route::get('/1', function () {
    return view('f1');
})->name('hi_f1');

Route::get('/2', function () {
    return view('f2');
})->name('hi_f2');

Route::get('/3', function () {
    return view('f3');
})->name('hi_f3');

Route::get('/new_4', function () {
    return view('f4');
})->name('hi_f4');
