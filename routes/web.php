<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\AjustesController;
use App\Http\Controllers\ReporteVentaController;


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
    // Rutas de productos
    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
    Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    // Rutas de proveedores
    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
    Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
    Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
    Route::delete('/proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');
    Route::put('/proveedores/{proveedor}', [ProveedorController::class, 'update'])->name('proveedores.update');
    Route::get('/proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    // Rutas de pqrss
    Route::get('/pqrss', [PqrsController::class, 'index'])->name('pqrss.index');
    Route::post('/pqrss', [PqrsController::class, 'store'])->name('pqrss.store');
    Route::get('/pqrss/create', [PqrsController::class, 'create'])->name('pqrss.create');
    Route::delete('/pqrss/{pqrs}', [PqrsController::class, 'destroy'])->name('pqrss.destroy');
    Route::put('/pqrss/{pqrs}', [PqrsController::class, 'update'])->name('pqrss.update');
    Route::get('/pqrss/{pqrs}/edit', [PqrsController::class, 'edit'])->name('pqrss.edit');
    // Rutas de facturas
    Route::get('/facturas', [FacturaController::class, 'index'])->name('facturas.index');
    Route::post('/facturas', [FacturaController::class, 'store'])->name('facturas.store');
    Route::get('/facturas/create', [FacturaController::class, 'create'])->name('facturas.create');
    Route::delete('/facturas/{factura}', [FacturaController::class, 'destroy'])->name('facturas.destroy');
    Route::put('/facturas/{factura}', [FacturaController::class, 'update'])->name('facturas.update');
    Route::get('/facturas/{factura}/edit', [FacturaController::class, 'edit'])->name('facturas.edit');
    // Rutas de inventarios
    Route::get('/inventarios', [InventarioController::class, 'index'])->name('inventarios.index');
    Route::post('/inventarios', [InventarioController::class, 'store'])->name('inventarios.store');
    Route::get('/inventarios/create', [InventarioController::class, 'create'])->name('inventarios.create');
    Route::delete('/inventarios/{inventario}', [InventarioController::class, 'destroy'])->name('inventarios.destroy');
    Route::put('/inventarios/{inventario}', [InventarioController::class, 'update'])->name('inventarios.update');
    Route::get('/inventarios/{inventario}/edit', [InventarioController::class, 'edit'])->name('inventarios.edit');
});

//ruta de términos y condiciones, la ruta para acceder a la vista es http://localhost:8000/terminos-y-condiciones
Route::get('/terminos-y-condiciones', function () {
    return view('terminosycondiciones.index');
})->name('terminosycondiciones');
//ruta de política de datos,la ruta para acceder a la vista es http://localhost:8000/politicadatos

Route::get('/politicadatos', function () {
    return view('politicadatos.index');
})->name('politicadedatos');
 

Route::get('/admin', function () {
    return view('admin.index');
}); 

Route::get('/ventas', function () {
    return view('ventas.index');
}); 

//ruta de ajustes
Route::get('/ajustes', [AjustesController::class, 'index'])->name('ajustes.index');

// Ruta para la vista de reportes
Route::get('/reportes', function () {
    return view('ajustes.reportes');
})->name('reportes');

// Ruta para la configuración del sistema
Route::get('/configuracion', function () {
    return view('ajustes.configuracion');
})->name('configuracion');


Route::get('/reporte-de-venta', [ReporteVentaController::class, 'index'])->name('reporte-de-venta');
Route::get('/reportedeventa', [ReporteVentaController::class, 'download'])->name('reportedeventa');

//PARTE Y RUTAS DE USUARIO

Route::get('/usuarios', function () {
    return view('usuario.index');
})->name('usuarios');

Route::get('/usuario_producto/1', function () {
    return view('usuario_producto.producto1');
})->name('usuario_producto1');

Route::get('/usuario_producto/2', function () {
    return view('usuario_producto.producto2');
})->name('usuario_producto2');

Route::get('/usuario_producto/3', function () {
    return view('usuario_producto.producto3');
})->name('usuario_producto3');

Route::get('/pagos', function () {
    return view('pagos.index');
})->name('pagos.index');

Route::get('/homeu', function () {
    return view('homeu.index');
})->name('homeu.index');

Route::get('/usuarioini', function () {
    return view('usuarioini.index');
})->name('usuarioini.index');

Route::get('/perfiuser', function () {
    return view('perfiuser.index');
})->name('perfiuser.index');



require __DIR__.'/auth.php';