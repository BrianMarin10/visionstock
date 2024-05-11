<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$inventario = inventario::all();
        $inventarios = DB::table('inventarios')
            ->join('productos', 'inventarios.id_producto', '=', 'productos.id')
            ->join('proveedores', 'inventarios.id_proveedor', '=', 'proveedores.id')
            ->select('inventarios.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('inventario.index', ['inventarios'=>$inventarios]);
    }


    public function create()
    {
        $productos = DB::table('productos')
        ->orderBy('nombre_producto')
        ->get();

        $proveedores = DB::table('proveedores')
        ->orderBy('nombre_empresa')
        ->get();

        return view('inventario.new', ['productos' => $productos], ['proveedores' => $proveedores]);



    }

    public function store(Request $request)
    {
        $inventario = new Inventario();
        //$inventario->id = strtoupper($request->id);
        //id_producto	id_proveedor	stock	precio_compra	precio_venta	fecha_vencimiento	
        
        $inventario->id_producto = $request->nombre_producto;
        $inventario->id_proveedor = $request->nombre_empresa;
        $inventario->stock = $request->stock;
        $inventario->precio_compra = $request->precio_compra;
        $inventario->precio_venta = $request->precio_venta;
        $inventario->fecha_vencimiento = $request->fecha;
        $inventario->save();

        $inventarios = DB::table('inventarios')
            ->join('proveedores', 'inventarios.id_proveedor', '=', 'proveedores.id')
            ->join('productos', 'inventarios.id_producto', '=', 'productos.id')
            ->select('inventarios.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('inventario.index', ['inventarios'=>$inventarios]);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $inventario= Inventario::find($id);
        $productos = DB::table('productos')
        ->orderBy('nombre_producto')
        ->get();

        $proveedores = DB::table('proveedores')
        ->orderBy('nombre_empresa')
        ->get();
        return view('inventario.edit', ['inventario' => $inventario, 'productos' => $productos, 'proveedores' => $proveedores]);
    }

    public function update(Request $request, $id)
    {
        $inventario= Inventario::find($id);
        
        $inventario->id_producto = $request->nombre_producto;
        $inventario->id_proveedor = $request->nombre_empresa;
        $inventario->stock = $request->stock;
        $inventario->precio_compra = $request->precio_compra;
        $inventario->precio_venta = $request->precio_venta;
        $inventario->fecha_vencimiento = $request->fecha;
        $inventario->save();
        $inventarios = DB::table('inventarios')
            ->join('productos', 'inventarios.id_producto', '=', 'productos.id')
            ->join('proveedores', 'inventarios.id_proveedor', '=', 'proveedores.id')
            ->select('inventarios.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('inventario.index', ['inventarios' => $inventarios]);
    }

    public function destroy( $id)
    {
        $inventario= Inventario::find($id);
        $inventario->delete();

        $inventarios = DB::table('inventarios')
            ->join('productos', 'inventarios.id_producto', '=', 'productos.id')
            ->join('proveedores', 'inventarios.id_proveedor', '=', 'proveedores.id')
            ->select('inventarios.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('inventario.index', ['inventarios' => $inventarios]);
    }
}
