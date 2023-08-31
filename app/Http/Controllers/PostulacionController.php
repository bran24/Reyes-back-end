<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use Illuminate\Http\Request;

class PostulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Postulacion::all();
        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $postulacion = new Postulacion();
        $postulacion->cargo = $request->get('cargo');
        $postulacion->documento = $request->get('documento');
        $postulacion->nrdocumento = $request->get('nrdocumento');
        $postulacion->correo = $request->get('correo');
        $postulacion->medio = $request->get('medio');
        $postulacion->departamento = $request->get('departamento');
        $postulacion->provincia = $request->get('provincia');
        $postulacion->distrito = $request->get('distrito');
        $postulacion->apaterno = $request->get('apaterno');
        $postulacion->amaterno = $request->get('amaterno');
        $postulacion->nombres = $request->get('nombres');
        $postulacion->fechanac = $request->get('fechanac');
        $postulacion->paisnac = $request->get('paisnac');
        $postulacion->telefono = $request->get('telefono');
        $postulacion->aspsalarios = $request->get('aspsalarios');

        $postulacion->save();
        return response()->json($postulacion, 200);
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
