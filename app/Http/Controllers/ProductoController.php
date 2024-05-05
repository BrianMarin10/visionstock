<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = DB::table('productos')
            ->select('productos.*')
            ->get();
        return view('producto.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        // $producto->comu_codi = $request->id;
        // El código de producto es auto incremental			
        $producto->nombre_producto = $request->nombre;
        $producto->tipo_producto = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        $productos = DB::table('productos')
            ->select('productos.*')
            ->get();
        return view('producto.index', ['productos' => $productos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto.edit', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre_producto = $request->nombre;
        $producto->tipo_producto = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        $productos = DB::table('productos')
            ->select('productos.*')
            ->get();
        return view('producto.index', ['productos' => $productos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $producto = Producto::find($id);
            $producto->delete();

            $productos = DB::table('productos')
                ->select('productos.*')
                ->get();
            return view('producto.index', ['productos' => $productos]);
        } catch (\Exception $e) {
            if ($e->getCode() === '23000') {
                // Este código de error específico indica una violación de integridad referencial
                $productos = DB::table('productos')
                    ->select('productos.*')
                    ->get();
                return view('producto.index', ['productos' => $productos, 'error' => 'No se puede eliminar el producto debido a que se está usando en otra tabla.']);
            } else {
                // Otros errores de la base de datos
                $productos = DB::table('productos')
                    ->select('productos.*')
                    ->get();
                return view('producto.index', ['productos' => $productos, 'error' => 'Error en la base de datos: ' . $e->getMessage()]);
            }
        }
    }
}
