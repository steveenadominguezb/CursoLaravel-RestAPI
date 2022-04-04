<?php

use App\Http\Controllers\GamesControlller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Pagina principal";
});


Route::get('/games', [GamesControlller::class, 'index']);
#El orden es importante
Route::get('/games/create', [GamesControlller::class, 'create']);
Route::get('/games/{name_game}/{categorie?}', [GamesControlller::class, 'help']);

Route::get('/consumirapi', [GamesControlller::class, 'consuapi']);
