<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PqrsController extends Controller
{

    public function index()
    {
        
        //$pqrs = Pqrs::all();
        $pqrss = DB::table('pqrss')
            ->join('clientes', 'pqrss.id_cliente', '=', 'clientes.id')
            ->select('pqrss.*', 'clientes.nombre')
            ->get();
        return view('pqrs.index', ['pqrss'=>$pqrss]);
    }


    public function create()
    {
        $clientes = DB::table('clientes')
        ->orderBy('nombre')
        ->get();

        return view('pqrs.new', ['clientes' => $clientes]);



    }

    public function store(Request $request)
    {
        $pqrs = new Pqrs();
        //$pqrs->id = strtoupper($request->id);
        $pqrs->id_cliente = $request->nombre;
        $pqrs->estado = $request->estado;
        $pqrs->fecha = $request->fecha;
        $pqrs->observacion = $request->observacion;
        $pqrs->solucion = $request->solucion;

        $pqrs->save();

        $pqrss = DB::table('pqrss')
            ->join('clientes', 'pqrss.id_cliente', '=', 'clientes.id')
            ->select('pqrss.*', 'clientes.nombre')
            ->get();
        return view('pqrs.index', ['pqrss'=>$pqrss]);
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $pqrs= Pqrs::find($id);
        $clientes = DB::table('clientes')
        ->orderBy('nombre')
        ->get();
        return view('pqrs.edit', ['pqrs' => $pqrs, 'clientes' => $clientes]);
    }

    public function update(Request $request, $id)
    {
        $pqrs= Pqrs::find($id);
        $pqrs->id_cliente = $request->nombre;
        $pqrs->estado = $request->estado;
        $pqrs->fecha = $request->fecha;
        $pqrs->observacion = $request->observacion;
        $pqrs->solucion = $request->solucion;
        $pqrs->save();
        $pqrss = DB::table('pqrss')
            ->join('clientes', 'pqrss.id_cliente', '=', 'clientes.id')
            ->select('pqrss.*', 'clientes.nombre')
            ->get();
        return view('pqrs.index', ['pqrss' => $pqrss]);
    }

    public function destroy( $id)
    {
        $pqrs= Pqrs::find($id);
        $pqrs->delete();

        $pqrss = DB::table('pqrss')
            ->join('clientes', 'pqrss.id_cliente', '=', 'clientes.id')
            ->select('pqrss.*', 'clientes.nombre')
            ->get();
        return view('pqrs.index', ['pqrss' => $pqrss]);
    }
}
