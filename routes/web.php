<?php

use App\Http\Controllers\DireccionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutoVentaController;
use App\Http\Controllers\AutoCompraController;
use App\Http\Middleware\isAuthenticated;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::middleware([isAuthenticated::class])->group(function(){
    Route::get('/auto_compra',[AutoCompraController::class,'index']);
    Route::get('/auto_renta',[AutoVentaController::class,'index']);
    Route::get('/direccion',[DireccionController::class,'index']);
    Route::get('/usuario',[UsuarioController::class,'index']);
    Route::get('/inicio_admin', function() {
        return view('inicio_admin');
    })->name('inicio_admin');
});


Route::get('/auto_compra/create',[AutoCompraController::class,'create']);
Route::get('/auto_compra/{autocompra}',[AutoCompraController::class,'show']);
Route::post('/auto_compra',[AutoCompraController::class,'store']);
Route::get('/auto_compra/{autocompra}/editar',[AutoCompraController::class,'edit']);
Route::put('/auto_compra/{autocompra}',[AutoCompraController::class,'update']);
Route::delete('/auto_compra/{autocompra}',[AutoCompraController::class,'destroy']);


Route::get('/auto_renta/create',[AutoVentaController::class,'create']);
Route::get('/auto_renta/{autoventa}',[AutoVentaController::class,'show']);
Route::post('/auto_renta',[AutoVentaController::class,'store']);
Route::get('/auto_renta/{autoventa}/editar',[AutoVentaController::class,'edit']);
Route::put('/auto_renta/{autoventa}',[AutoVentaController::class,'update']);
Route::delete('/auto_renta/{autoventa}',[AutoVentaController::class,'destroy']);


Route::get('/direccion/create',[DireccionController::class,'create']);
Route::get('/direccion/{direccion}',[DireccionController::class,'show']);
Route::post('/direccion',[DireccionController::class,'store']);
Route::get('/direccion/{direccion}/editar',[DireccionController::class,'edit']);
Route::put('/direccion/{direccion}',[DireccionController::class,'update']);
Route::delete('/direccion/{direccion}',[DireccionController::class,'destroy']);


Route::get('/usuario/create',[UsuarioController::class,'create']);
Route::get('/usuario/{usuario}',[UsuarioController::class,'show']);
Route::post('/usuario',[UsuarioController::class,'store']);
Route::get('/usuario/{usuario}/editar',[UsuarioController::class,'edit']);
Route::put('/usuario/{usuario}',[UsuarioController::class,'update']);
Route::delete('/usuario/{usuario}',[UsuarioController::class,'destroy']);

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/inicio', function() {
    return view('inicio');
})->name('inicio');