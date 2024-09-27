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
    // return view('welcome');
    return "Bienvenido a la página principal";
});

Route::get('cursos', function () {
    return "Bienvenido a la página cursos";
});

Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido al curso: $curso";
// });

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
});
