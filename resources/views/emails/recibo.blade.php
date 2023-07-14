<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo Zona Sport</title>
    <style>
        @page {margin:0px;}
        body{
            font-family: 'Poppins', sans-serif;
            background-image: url("assets/img/fondo_reporte.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 815px 1150px;                    
        }
        #encabezado{
            font-size: 0.9rem;
            width: 100%;
            line-height: 0.9rem;
        }
        #main-container{            
            width: 100%;
            margin-top: 3rem;
        }

        #tabla{
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
            border-color: black;
            font-size: 1rem;            
        }

        #tabla th, #tabla td{
            padding: 3px 20px;
        }

        #tabla thead{
            background-color: #004fa3;
            border-bottom: solid 5px #004187;
            color: white;
        }

        #tabla tr:nth-child(even){
            background-color: #ddd;
        }

        #contenido{
            margin: 65px 40px;
        }

    </style>
</head>
<body>
    <div id="contenido">
        <table id="encabezado" style="margin-top: 50px; color:#fff" >
            <tr>
                <td style="font-size: 1.1rem;">__________________________________</td>
                <td style="font-size: 1.2rem; text-align:right"><b>Comprobante No. {{$id_reserva}}</b></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    
        <br><br><br><br><br><br><br><br>
        <span style="font-size: 1.1rem"><b>Datos del cliente</b></span>
        <table style="width: 100%; margin-top: 10px" id="tabla" border="1">
            <tr>
                <td>Nombre: {{$nombre }}</td>
                <td>DPI: {{$dpi }}</td>
            </tr>
            <tr>
                <td>Telefono: {{$telefono }}</td>
                <td>Correo: {{$correo }}</td>
            </tr>
        </table>
        
        <br><br><br><br><br><br>
        <table style="width: 100%" id="tabla" border="1">
            <tr>
                <th style="width: 80%;">Descripción</th>
                <th style="width: 20%;">Total</th>
            </tr>
            <tr>
                <td>Por alquiler de cancha sintética para el día {{$fecha}} dando inicio a las {{$h_inicio}} hrs y terminando a las {{$h_final }} hrs
                    <br><br>
                    El pago efectuado fue <b>
                    @if ($tipo_pago==1)
                        con tarjeta(débito/crédito)
                    @elseif($tipo_pago==2)
                        previo depósito
                    @elseif($tipo_pago==3)
                        en efectivo
                    @endif
                    </b>
                    el estado de el pago se encuentra <b>
                    @if ($estado==1)
                        cancelado
                    @elseif($estado==2)
                        pendiente
                    @elseif($estado==3)
                        cancelado
                    @elseif($estado==4)
                        pendiente
                    @elseif($estado==5)
                        cancelado
                    @endif
                    </b>

                    <br><br>
                    La cancha fue reservada para usarse <b>
                    @if($luz==0)
                        sin luz
                    @elseif($luz==1)
                        con luz
                    @endif
                    </b>
                </td>
                <td style="text-align: center"><b>Q. <span style="color:red">{{number_format($total,2)}}</span></b></td>
            </tr>
        </table>
    
    
        <table id="encabezado" style="margin-top: 190px">
            <tr>
                <td style="font-size: 1.1rem">Zona Sport</td>
                <td></td>
            </tr>
            <tr>
                <td>2da av 3-00 zona 1 de San Lucas, Sacatepéquez, Guatemala</td>
                <td></td>
            </tr>
            <tr>
                <td>Tel: 51547845</td>
                <td></td>
            </tr>
            <tr>
                <td>Correo: ejemplo@gmail.com</td>
                <td></td>
            </tr>
            <tr>
                <td>website: wwww.ejemplo.com.gt</td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>