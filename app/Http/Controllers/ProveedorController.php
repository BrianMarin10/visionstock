<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = DB::table('proveedores')
            ->select('proveedores.*')
            ->get();
        return view('proveedor.index', ['proveedores' => $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        // $proveedor->comu_codi = $request->id;
        // El código de proveedor es auto incremental
        // 	nit	nombre_empresa	direccion	telefono	email				
        $proveedor->nit = $request->nit;
        $proveedor->nombre_empresa = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->save();

        $proveedores = DB::table('proveedores')
            ->select('proveedores.*')
            ->get();
        return view('proveedor.index', ['proveedores' => $proveedores]);
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
        $proveedor = Proveedor::find($id);
        return view('proveedor.edit', ['proveedor' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->nit = $request->nit;
        $proveedor->nombre_empresa = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->save();
        $proveedores = DB::table('proveedores')
            ->select('proveedores.*')
            ->get();
        return view('proveedor.index', ['proveedores' => $proveedores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $proveedor = Proveedor::find($id);
            $proveedor->delete();

            $proveedores = DB::table('proveedores')
                ->select('proveedores.*')
                ->get();
            return view('proveedor.index', ['proveedores' => $proveedores]);
        } catch (\Exception $e) {
            if ($e->getCode() === '23000') {
                // Este código de error específico indica una violación de integridad referencial
                $proveedores = DB::table('proveedores')
                    ->select('proveedores.*')
                    ->get();
                return view('proveedor.index', ['proveedores' => $proveedores, 'error' => 'No se puede eliminar el proveedor ya que se está usando en otra tabla.']);
            } else {
                // Otros errores de la base de datos
                $proveedores = DB::table('proveedores')
                    ->select('proveedores.*')
                    ->get();
                return view('proveedor.index', ['proveedores' => $proveedores, 'error' => 'Error en la base de datos: ' . $e->getMessage()]);
            }
        }
    }
}