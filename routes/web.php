<?php

use App\Http\Controllers\ProfileController;
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



require __DIR__.'/auth.php';
