@extends('layouts.layout')

@section('contenido')
    <!--=============== MAIN ===============-->
    <main class="containerS sectionS py-5" id="content-grafica">        
        <div class="container px-5">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-around">
                        <div class="col-3 text-info card-estadistica" style="border-radius: 15px; background-color: #fff">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-4 col-md-3 col-sm-2 text-center">
                                    <h1 class="display-5" style="color: #0EC4E9"><b><span id="reserva">0</span></b></h1>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-10 justify-between d-flex pe-3 pe-sm-1 pe-md-3 text-center">
                                    Reservas Hoy <i class="fa-solid fa-chart-line d-md-block d-sm-none d-block d-none" style="font-size: 1.3rem"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-3  text-warning card-estadistica" style="border-radius: 15px; background-color: #fff">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-4 col-md-3 col-sm-2 text-center">
                                    <h1 class="display-5" style="color:#FFC107"><b><span id="reserva2">0</span></b></h1>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-10 justify-between d-flex pe-3 pe-sm-1 pe-md-3 text-center">
                                    Reservas Mes <i class="fa-solid fa-chart-simple d-md-block d-sm-none d-block d-none" style="font-size: 1.3rem"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 text-success card-estadistica" style="border-radius: 15px; background-color: #fff">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-4 col-md-3 col-sm-2 text-center">
                                    <h1 class="display-5" style="color:#39986C"><b><span id="reserva3">0</span></b></h1>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-10 justify-between d-flex pe-3 pe-sm-1 pe-md-3 text-center">
                                    Reservas Año <i class="fa-solid fa-chart-column d-md-block d-sm-none d-block d-none" style="font-size: 1.3rem"></i>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
    
                <div class="col-md-5 my-5 p-4" id="cardGrafica">
                    <div class="row">
                        <div class="col-md-12">
                            <figure>
                                <center><h2><b>Tendencia método de pago (mes actual)</b></h2></center>
                                <canvas id="grafica3"></canvas>
                            </figure>
                        </div>
                        <div class="col-6 my-5 offset-md-3 offset-3 bg-primary text-white card-estadistica" style="border-radius: 15px">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-4 col-md-3 col-sm-2 text-center">
                                    <h1 class="display-5" style="color:white"><b><span id="reserva4">0</span></b></h1>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-10 justify-between d-flex pe-3 pe-sm-1 pe-md-3 text-center">
                                    Reservas del mes anterior 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="row" style="margin: 0; padding:0;">
                        <div class="col-md-12 my-5 p-4" style="margin: 0; padding:0;" id="cardGrafica">
                            <figure >
                                <center><h2><b>Comparativa Reservas con el mes anterior</b></h2></center>
                                <canvas id="grafica1"></canvas>
                            </figure>
                        </div>
                        <div class="col-md-12 my-5 p-4" style="margin: 0; padding:0;" id="cardGrafica">
                            <figure >
                                <center><h2><b>Tendencia de horario del Mes</b></h2></center>
                                <canvas id="grafica2"></canvas>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/helpers.js"></script>
    <script src="assets/js/graficas.js"></script>
@endsection