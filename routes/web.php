<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Rutas de clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
});

//ruta de términos y condiciones, la ruta para acceder a la vista es http://localhost:8000/terminos-y-condiciones
Route::get('/terminos-y-condiciones', function () {
    return view('terminosycondiciones.index');
});
//ruta de política de datos,la ruta para acceder a la vista es http://localhost:8000/politicadatos

Route::get('/politicadatos', function () {
    return view('politicadatos.index');
}); 

Route::get('/admin', function () {
    return view('admin.index');
}); 

Route::get('/pqrs', function () {
    return view('pqrs.index');
}); 

Route::get('/inventario', function () {
    return view('inventario.index');
}); 

Route::get('/inventario-opciones', function () {
    return view('inventario-opciones.index');
}); 

Route::get('/producto-gota-lubricante', function () {
    return view('producto-gota-lubricante.index');
}); 

Route::get('/ventas', function () {
    return view('ventas.index');
}); 

Route::get('/ajustes', function () {
    return view('ajustes.index');
}); 

require __DIR__.'/auth.php';
