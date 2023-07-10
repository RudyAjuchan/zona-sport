<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fecha = $request->fecha;
        $horarios = Reservas::where('fecha',$fecha)->get();
        return $horarios;
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
        
        $reserva = new Reservas();
        $reserva->nombre = $request->nombre;
        $reserva->dpi = $request->dpi;
        $reserva->telefono = $request->telefono;
        $reserva->correo = $request->email;
        $reserva->nit = $request->nit;
        $reserva->fecha = $request->fecha;
        $reserva->h_inicio = $request->h_inicio;
        $reserva->h_terminar = $request->h_terminar;
        $reserva->tipo_pago = $request->tipo_pago;
        $reserva->estado = $request->estado;
        $reserva->save();
        return $request;
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
