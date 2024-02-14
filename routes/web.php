<?php

use App\Http\Controllers\CategoriasController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;

use App\Http\Controllers\GuardaPreciosController;


use App\Http\Controllers\ProductosController;
use App\Http\Controllers\verPreciosController;
use App\Models\Supermercadoproducto;
use Illuminate\View\View;



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

function file_get_contents_curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, false);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
};


Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/actualizador', 'actualizador')->name('actualizador');
Route::get('/actmercadona', [GuardaPreciosController::class, 'mercadona'])->name('actmercadona');
Route::get('/actcarrefour', [GuardaPreciosController::class, 'carrefour'])->name('actcarrefour');
Route::get('/acteci', [GuardaPreciosController::class, 'eci'])->name('acteci');
Route::get('/actdia', [GuardaPreciosController::class, 'dia'])->name('actdia');
Route::get('/acteroski', [GuardaPreciosController::class, 'eroski'])->name('acteroski');
Route::get('/actalcampo', [GuardaPreciosController::class, 'alcampo'])->name('actalcampo');

Route::get('/categorias', [CategoriasController::class,'index'])->name('categorias');

Route::get('/categorias/{id}', [CategoriasController::class, 'show']);

Route::get('/subcategorias/{id}', [CategoriasController::class, 'sub']);

// Route::get('/productos/{id}', [CategoriasController::class, 'guardar']);

Route::get('/precios', [CategoriasController::class,'preciosIndex'])->name('precios');

Route::get('/precios/{id}', [CategoriasController::class, 'listar'])->name('precios');






//Route::get ('/producto', [ProductoController::class, "refresh"]);

Route::resource('mensajes', MensajeController::class);
