<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_horas;
use App\Models\horas;
use App\Models\Reservas;
use App\Models\reservas_detalle;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dia_id = $request->dia_id;
        $fecha = $request->fecha;
        $horarios = detalle_horas::with(['Horas', 'Dias'])->where('dias_id', $dia_id)->get();
        $reservados = DB::table('reservas_detalles')->join('reservas','reservas_detalles.reservas_id', '=', 'reservas.id')->where('reservas.fecha',$fecha)->get();
        return compact('horarios', 'reservados');
    }

    public function obtenerHoras(Request $request)
    {
        $horaI = $request->horaI;
        $horaF = $request->horaF;
        $datosHI = horas::where('id',$horaI)->first();
        $datosHF = horas::where('id',$horaF)->first();
        return compact('datosHI', 'datosHF');
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
