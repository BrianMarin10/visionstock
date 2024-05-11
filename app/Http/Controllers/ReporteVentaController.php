<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class ReporteVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ajustes.deventa');

    }
    public function download(Request $request)
    {
        $format = $request->input('format');

    // Lógica para generar el archivo CSV o PDF (futuroo)


    $filePath = storage_path('app/temp/reportedeventa.' . $format);

    // Comprueba si el archivo existe y es accesible
    if (!file_exists($filePath)) {
        abort(404);
    }

    $mimeType = ($format === 'csv') ? 'text/csv' : 'application/pdf';

    // Descarga el archivo con el nombre apropiado
    return response()->download($filePath, 'reportedeventa.' . $format, ['Content-Type' => $mimeType]);
    }

    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
