<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$factura = factura::all();
        $facturas = DB::table('facturas')
            ->join('productos', 'facturas.id_producto', '=', 'productos.id')
            ->join('proveedores', 'facturas.id_proveedor', '=', 'proveedores.id')
            ->select('facturas.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('factura.index', ['facturas'=>$facturas]);
    }


    public function create()
    {
        $productos = DB::table('productos')
        ->orderBy('nombre_producto')
        ->get();

        $proveedores = DB::table('proveedores')
        ->orderBy('nombre_empresa')
        ->get();

        return view('factura.new', ['productos' => $productos], ['proveedores' => $proveedores]);



    }

    public function store(Request $request)
    {
        $factura = new factura();
        //$factura->id = strtoupper($request->id);
        //id	id_proveedor	id_producto	valor	fecha	descripcion
        $factura->id_proveedor = $request->nombre_empresa;
        $factura->id_producto = $request->nombre_producto;
        $factura->valor = $request->valor;
        $factura->fecha = $request->fecha;
        $factura->descripcion = $request->descripcion;
        $factura->save();

        $facturas = DB::table('facturas')
            ->join('proveedores', 'facturas.id_proveedor', '=', 'proveedores.id')
            ->join('productos', 'facturas.id_producto', '=', 'productos.id')
            ->select('facturas.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('factura.index', ['facturas'=>$facturas]);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $factura= factura::find($id);
        $productos = DB::table('productos')
        ->orderBy('nombre_producto')
        ->get();

        $proveedores = DB::table('proveedores')
        ->orderBy('nombre_empresa')
        ->get();
        return view('factura.edit', ['factura' => $factura, 'productos' => $productos, 'proveedores' => $proveedores]);
    }

    public function update(Request $request, $id)
    {
        $factura= factura::find($id);
//id	id_proveedor	id_producto	rol	areaAsignada	estado
        $factura->id_proveedor = $request->nombre_empresa;
        $factura->id_producto = $request->nombre_producto;
        $factura->valor = $request->valor;
        $factura->fecha = $request->fecha;
        $factura->descripcion = $request->descripcion;
        $factura->save();
        $facturas = DB::table('facturas')
            ->join('productos', 'facturas.id_producto', '=', 'productos.id')
            ->join('proveedores', 'facturas.id_proveedor', '=', 'proveedores.id')
            ->select('facturas.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('factura.index', ['facturas' => $facturas]);
    }

    public function destroy( $id)
    {
        $factura= factura::find($id);
        $factura->delete();

        $facturas = DB::table('facturas')
            ->join('productos', 'facturas.id_producto', '=', 'productos.id')
            ->join('proveedores', 'facturas.id_proveedor', '=', 'proveedores.id')
            ->select('facturas.*', 'productos.nombre_producto', 'proveedores.nombre_empresa')
            ->get();
        return view('factura.index', ['facturas' => $facturas]);
    }
}
