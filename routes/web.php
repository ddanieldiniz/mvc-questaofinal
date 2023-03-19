<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ContatoController;
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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/pedido', function () {
    return view('pedido');
}); */

Route::get('/',  [HomeController::class, 'index']);
Route::get('/home',  [HomeController::class, 'index']);
Route::get('/pedido', [PedidoController::class, 'novoPedido']);
Route::get('/contatodev', [ContatoController::class,'contatodev']);