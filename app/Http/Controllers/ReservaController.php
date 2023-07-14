<?php

namespace App\Http\Controllers;

use App\Mail\ReciboMails;
use Illuminate\Http\Request;
use App\Models\detalle_horas;
use App\Models\horas;
use App\Models\Reservas;
use App\Models\reservas_detalle;
use App\Models\divisa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use stdClass;

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

    public function getDivisa(){
        return divisa::all()->first();
    }

    public function insertDivisa(Request $request){
        date_default_timezone_set('America/Guatemala');
        $divisa = divisa::find(1);
        $divisa->dolar_quetzal = $request->divisa;
        $divisa->created_at = date('Y-m-d H:i:s');
        $divisa->save();
        return $request;

    }
    public function insertDivisa2(Request $request){
        $divisa = new divisa();
        $divisa->dolar_quetzal = $request->divisa;        
        $divisa->save();
        return $request;
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
        date_default_timezone_set('America/Guatemala');
        //VERIFICAR SI HAY CONFLICTOS DE HORARIOS
        $fecha = $request->fecha;
        $datosReservaDetalle = DB::table('reservas_detalles')->join('reservas','reservas_detalles.reservas_id', '=', 'reservas.id')->where('reservas.fecha',$fecha)->get();
        $banderaConflicto = false;
        foreach($datosReservaDetalle as $DRD){            
            for($i=$request->inicio; $i<=$request->fin; $i++){
                if($DRD->horas_id==$i){
                    $banderaConflicto=true;
                    break;
                }
            }
        }

        if(!$banderaConflicto){
            //PARA GUARDAR RESERVA
            $reserva = new Reservas();
            $reserva->nombre = $request->nombre;
            $reserva->dpi = $request->dpi;
            $reserva->telefono = $request->telefono;
            $reserva->correo = $request->email;
            $reserva->nit = $request->nit;
            $reserva->fecha = $request->fecha;
            $reserva->h_inicio = $request->h_inicio;
            $reserva->h_final = $request->h_terminar;
            $reserva->total = $request->total;
            $reserva->tipo_pago = $request->tipo_pago;
            $reserva->estado = $request->estado;
            $reserva->luz = $request->luz;
            $reserva->save();
            $id_reserva = $reserva->id;

            //PARA GUARDAR DETALLE RESERVA (HORAS RESERVADAS)
            if($request->inicio==$request->fin){
                $rd = new reservas_detalle();
                $rd->horas_id = $request->inicio;
                $rd->reservas_id = $id_reserva;
                $rd->save();
            }else{
                for($i=$request->inicio; $i<=$request->fin; $i++){
                    DB::table('reservas_detalles')
                    ->insert(array(
                        'horas_id' => $i,
                        'reservas_id' => $id_reserva,
                        "created_at" => date('Y-m-d H:i:s'),
                    ));
                }
            }
            //PARA MANDAR EMAIL
            $reserva2['nombre'] = $request->nombre;
            $reserva2['dpi'] = $request->dpi;
            $reserva2['telefono'] = $request->telefono;
            $reserva2['correo'] = $request->email;
            $reserva2['nit'] = $request->nit;
            $reserva2['fecha'] = $request->fecha;
            $reserva2['h_inicio'] = $request->h_inicio;
            $reserva2['h_final'] = $request->h_terminar;
            $reserva2['total'] = $request->total;
            $reserva2['tipo_pago'] = $request->tipo_pago;
            $reserva2['estado'] = $request->estado;
            $reserva2['luz'] = $request->luz;
            $reserva2['id_reserva'] = str_pad($id_reserva, 6, '0', STR_PAD_LEFT);;

            $reserva2["email"] = $request->email;
            $reserva2["title"] = "Zona Sport";

            $pdf = PDF::loadView('emails.recibo', $reserva2);

            Mail::send('emails.recibo', $reserva2, function($message)use($reserva2, $pdf) {
                $message->to($reserva2["email"], $reserva2["email"])
                        ->subject($reserva2["title"])
                        ->attachData($pdf->output(), "text.pdf");
            });
        }        
        return $request;
    }

    public function pruebaPDF(){
        $reserva2['nombre'] = "Rudy Ajuchán";
        $reserva2['dpi'] = "123522515654";
        $reserva2['telefono'] = "12563254";
        $reserva2['correo'] = "rudy@gmail.com";
        $reserva2['nit'] = "2156-5";
        $reserva2['fecha'] = "2023-07-13";
        $reserva2['h_inicio'] = '14:00';
        $reserva2['h_final'] = '15:00';
        $reserva2['total'] = '100';
        $reserva2['tipo_pago'] = 3;
        $reserva2['estado'] = 2;

        $reserva2["email"] = "rudyajuchansec32@gmail.com";
        $reserva2["title"] = "Zona Sport";

        $pdf = PDF::loadView('emails.recibo', $reserva2);
        return $pdf->setPaper('letter', 'portrait')->stream('recibo.pdf');
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
