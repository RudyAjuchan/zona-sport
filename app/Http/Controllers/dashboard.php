<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_horas;
use App\Models\horas;
use App\Models\Reservas;
use App\Models\reservas_detalle;
use App\Models\divisa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class dashboard extends Controller
{
    public function obtenerDatosDashboard(){
        $fechaHoy = date("Y-m-d");
        $mesHoy = date("m");
        $anioHoy = date("Y");
        $reservaHoy = Reservas::where('fecha', $fechaHoy)->count();
        $reservaMes = Reservas::whereMonth('fecha', $mesHoy)->count();
        $reservaAnio = Reservas::whereYear('fecha', $anioHoy)->count();
        $reservaMes2 = Reservas::whereMonth('fecha', ($mesHoy-1))->count();
        return compact('reservaHoy', 'reservaMes', 'reservaAnio', 'reservaMes2');
    }
    
    public function obtenerDatosGrafica(){
        $mesHoy = date("m");
        return Reservas::whereMonth('fecha', $mesHoy)->selectRaw('DAY(fecha) as dia')->get();
    }

    public function obtenerDatosGrafica2(){
        $mesHoy = date("m");
        $mesHoy--;
        $mesHoy<10 ? $mesHoy='0'.$mesHoy : $mesHoy;        
        return Reservas::whereMonth('fecha', $mesHoy)->selectRaw('DAY(fecha) as dia')->get();
    }

    public function obtenerDatosGrafica3(){
        $mesHoy = date("m");
        $tendenciaHoras = DB::table('reservas_detalles')
        ->join('reservas', 'reservas.id', '=', 'reservas_detalles.reservas_id')
        ->join('horas', 'horas.id', '=', 'reservas_detalles.horas_id')
        ->whereMonth('reservas.fecha', $mesHoy)
        ->select('reservas_detalles.id as id_reserva_detalle', 'horas.nombre', 'reservas.fecha')
        ->orderBy('horas.id', 'asc')
        ->get();
        return $tendenciaHoras;
    }


    public function obtenerDatosGrafica4(){
        $mesHoy = date("m");
        return Reservas::whereMonth('fecha', $mesHoy)->select('tipo_pago')->get();
    }
}
