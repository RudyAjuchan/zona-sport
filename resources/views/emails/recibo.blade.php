<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo Zona Sport</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            /* background-image: url("{{public_path('/img/fondo_reporte.png')}}"); */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 750px 990px;                    
        }
        #main-container{            
            width: 100%;
            margin-top: 3rem;
        }

        table{
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
            border-color: black;
            font-size: 0.7rem;            
        }

        th, td{
            padding: 3px 20px;
        }

        thead{
            background-color: #004fa3;
            border-bottom: solid 5px #004187;
            color: white;
        }

        tr:nth-child(even){
            background-color: #ddd;
        }

    </style>
</head>
<body>
    {{$nombre }} <br>
    {{$dpi }} <br>
    {{$telefono }} <br>
    {{$correo }} <br>
    {{$nit }} <br>
    {{$fecha }} <br>
    {{$h_inicio }} <br>
    {{$h_final }} <br>
    {{$total }} <br>
</body>
</html>