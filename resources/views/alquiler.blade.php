<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquier-Cancha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/cancha.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icono_zs.ico">
</head>

<body>
    <header>
        <div class="d-flex justify-content-between align-items-center cont_responsive">
            <a href="/" class="logo"><img src="assets/img/logo_lg_blanco.png" class="logoLG" width="200"><img src="assets/img/logo_responsive_blanco.png" class="logoSM" width="100"></a>
            <button type="button" class="btn text-white btn_responsive" onclick="menu_toggle()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <ul id="list">
            <li class="mt-3"><a href="/">Inicio</a></li>
            <li class="mt-3"><a href="/alquilar">Alquiler</a></li>
            <li class="mt-3"><a href="/acercade">Sobre Nosotros</a></li>
            <li class="mt-3"><a href="/contacto">Contacto</a></li>
        </ul>
    </header>

    <section class="banner2 pt-5">
        <h1 class="text-white display-1 titulos mt-5 text-center animate__animated animate__fadeInLeft">¡Comienza alquilar ahora!</h1>
        <span class="text-white text-center animate__animated animate__fadeInRight">Antes de alquilar, por favor lee toda la información de esta sección</span>
        <!-- <a href="#" class="btn btn-outline-light mt-4 animate__animated animate__fadeInLeft"  data-bs-toggle="modal" data-bs-target="#modalId">¡Reserva la cancha aquí!</a> -->
        <lottie-player class="icon_movie mt-3 animate__animated animate__fadeInDown" src="https://assets3.lottiefiles.com/private_files/lf30_by03eilq.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </section>

    <!-- TERMINA HEADER -->

    <div class="container d-md-block d-none">
        <div class="row">
            <center>
                <h1 class="titulos display-4 my-4" data-aos="fade-down">¡Conoce como alquilar!</h1>
            </center>
            <div class="col-md-12 alquiler" data-aos="fade-down">

            </div>
            <div class="col-md-12 bg-success alquiler2">
                <div class="row cards-content">
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/img/uno.png" alt="" height="50">
                                <h2 class="my-3">Paso 1</h2>
                                <p>Llena el formulario con todos los datos solicitados.
                                    <b>Asegúrate de colocar bien tu correo;</b> ya que se estará enviando el comprobante de reserva por ese medio.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/img/dos.png" alt="" height="50">
                                <h2 class="my-3">Paso 2</h2>
                                <p>Deberás seleccionar <b>la fecha y hora</b> según disponibilidad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/img/tres.png" alt="" height="50">
                                <h2 class="my-3">Paso 3</h2>
                                <p>Elige el método de pago. Al finalizar; si el pago fue procesado correctamente, recibirás el comprobante de reserva que deberás presentar en las instalaciones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center" data-aos="fade-down">
                        <a href="#" class="btn btn-light mt-4" data-bs-toggle="modal" data-bs-target="#modalId">¡Reserva la cancha aquí!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-sm-block d-md-none">
        <div class="row">
            <div class="col-md-12" data-aos="fade-down">
                <center>
                    <h1 class="titulos display-4 my-4">¡Conoce como alquilar!</h1>
                </center>
                <img src="assets/img/cancha1.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-md-4 mt-4" data-aos="fade-down">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/img/uno.png" alt="" height="50">
                        <h2 class="my-3">Paso 1</h2>
                        <p>Llena el formulario con todos los datos solicitados.
                            <b>Asegúrate de colocar bien tu correo;</b> ya que se estará enviando el comprobante de reserva por ese medio.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4" data-aos="fade-up">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/img/dos.png" alt="" height="50">
                        <h2 class="my-3">Paso 2</h2>
                        <p>Deberás seleccionar <b>la fecha y hora</b> según disponibilidad.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4" data-aos="fade-down">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/img/tres.png" alt="" height="50">
                        <h2 class="my-3">Paso 3</h2>
                        <p>Elige el método de pago. Al finalizar; si el pago fue procesado correctamente, recibirás el comprobante de reserva que deberás
                            presentar en las instalaciones.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center" data-aos="fade-up">
                <a href="#" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#modalId">¡Reserva la cancha aquí!</a>
            </div>
        </div>
    </div>

    <!-- Para linea -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Nuestras tarifas</h6>
                        <div id="content">
                            <ul class="timeline">
                                <li class="event" data-date="Media hora" data-aos="fade-down">
                                    <h3>Con luz Q<span class="text-danger"><b> 65.00</b></span></h3>                                    
                                </li>
                                <li class="event" data-date="Media hora" data-aos="fade-down">
                                    <h3>Sin luz Q<span class="text-danger"><b> 50.00</b></span></h3>                                    
                                </li> 
                                <li class="event" data-date="Una hora" data-aos="fade-down">
                                    <h3>Con luz Q<span class="text-danger"><b> 130.00</b></span></h3>                                    
                                </li>
                                <li class="event" data-date="Una hora" data-aos="fade-down">
                                    <h3>Sin luz Q<span class="text-danger"><b> 100.00</b></span></h3>                                    
                                </li>                               
                            </ul>
                        </div>
                        <br><br>
                        <h6 class="card-title">Nuestros términos</h6>
                        <div id="content">
                            <ul class="timeline">
                                <li class="event" data-date="Término 1" data-aos="fade-down">
                                    <h3>Aceptación de pagos</h3>
                                    <p>Al realizar una reserva por medio de nuestra página web; usted acepta pagar el monto correspondiente utilizando una tarjeta de crédito o débito válida.
                                        El pago con tarjeta tiene un recargo del 5% + $0.25, el total a cancelar se calculará cuando elija este tipo de pago.
                                    </p>
                                </li>
                                <li class="event" data-date="Término 2" data-aos="fade-down">
                                    <h3>Seguridad de la información</h3>
                                    <p>Se tomarán medidas razonables para garantizar la seguridad de la información de la tarjeta de crédito o débito. Esta Página web no guardará los datos de su tarjeta.</b></p>
                                </li>
                                <li class="event" data-date="Término 3" data-aos="fade-down">
                                    <h3>Uso adecuado de la tarjeta</h3>
                                    <p>La persona que realiza el pago deberá ser el titular legítimo de la tarjeta de crédito o débito. Se advierte que el uso de tarjetas de manera fraudulenta está prohibido y no nos responsabilizamos del uso inadecuado de las mismas.</p>
                                </li>
                                <li class="event" data-date="Término 4" data-aos="fade-down">
                                    <h3>Información precisa</h3>
                                    <p>Se requiere que la información proporcionada sea verídica y esté actualizada al momento de completar la reservación.</p>
                                </li>
                                <li class="event" data-date="Término 5" data-aos="fade-down">
                                    <h3>Cancelaciones y reembolsos</h3>
                                    <p>Para cancelar la reserva; deberá ser notificada con un mínimo de 24 horas de anticipación. Se procederá a cambiar la fecha de alquiler por otra fecha según disponibilidad. No se hace ningún tipo de reembolso.</p>
                                </li>
                                <li class="event" data-date="Término 6" data-aos="fade-down">
                                    <h3>Responsabilidad limitada</h3>
                                    <p>No nos hacemos responsables por cualquier pérdida o daño que pueda surgir como resultado de problemas técnicos, errores de procesamiento de pagos o cualquier otra incidencia que esté fuera de nuestro control.</p>
                                </li>
                                <li class="event" data-date="Término 7" data-aos="fade-down">
                                    <h3>Privacidad y protección de datos</h3>
                                    <p>Esta página Web utiliza una aplicación de terceros para efectuar la transacción con pago de tarjeta de crédito o débito. La información no será compartida fuera de la transacción.</p>
                                </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Para linea -->

    <!-- FOOTER -->
    <div class="container-fluid px-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img src="assets/img/logo_responsive_negro.png" alt="" width="50">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Zona Sport</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </footer>
    </div>

    <!-- Modal para alquiler -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Formulario de reserva</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset();"></button>
                </div>
                <div class="modal-body">
                    <span>Los datos con borde rojo son obligatorios (completa los datos para continuar)</span>
                    <form id="formReserva" name="formReserva">                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-signature"></i></span>
                            <input type="text" name="nombre" id="nombre" required class="form-control" placeholder="Nombre completo" aria-label="Nombre completo*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-id-card"></i></span>
                            <input type="text" name="dpi" id="dpi" 
                            onkeyup="
                                var v = this.value;
                                if (v.match(/^\d{4}$/) !== null) {
                                    this.value = v + ' ';
                                }else if (v.match(/^\d{4}\ \d{5}$/) !== null) {
                                    this.value = v + ' ';
                                };"
                            maxlength="15"
                            required class="form-control" placeholder="DPI" aria-label="DPI*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <input type="text" name="telefono" id="telefono" required class="form-control" placeholder="Telefono" aria-label="Telefono*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-at"></i></span>
                            <input type="email" name="correo" id="email" required class="form-control" placeholder="Correo" aria-label="Correo*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-id-badge"></i></span>
                            <input type="text" name="nit" id="nit" class="form-control" placeholder="NIT" aria-label="NIT" aria-describedby="basic-addon1">
                        </div>
                        <div class="align-items-center d-flex">
                            <label for="luz" class="my-2 text-primary">Con luz (selecciona si quieres usar luz)</label>
                            <input type="checkbox" name="luz" class="my-2" id="luz">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="fecha">Día a reservar:</label>
                                <input type="text" required name="fecha" class="form-control mt-1" min="2023-07-04" id="fecha">
                            </div>
                            <div class="col-md-4">
                                <label for="horaI">Hora de inicio:</label>
                                <input type="time" name="horaI" required class="form-control mt-1" id="hora" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="horaF">Hora a terminar:</label>
                                <input type="time" name="horaF" required class="form-control mt-1" id="hora2" disabled>
                            </div>
                        </div>                        
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12 text-center">
                                <div id="content-btn">
                                    {{-- Aquí se generan los botones --}}
                                </div>                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="abrirModoPago();">Pasar al método de pago</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modael modo de pago --}}
    <div class="modal fade" id="modalPago" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modo de pago</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset();"></button>
                </div>
                <div class="modal-body px-5">
                    <form name="formTarjeta" id="formTarjeta">
                        <label for="tipoPago">Seleccione el tipo de pago</label>
                        <select name="tipoPago" id="tipoPago" class="form-control" onchange="mostrarPago();">
                            <option value="" disabled selected hidden>Seleccione Pago</option>
                            <option value="1">Pago con tarjeta</option>
                            <option value="2">Pago previo deposito</option>
                            <option value="3">Pago efectivo</option>
                        </select>                    

                        <div id="tipoPago1">
                            <h4 class="mt-4">Por favor complete los datos</h4>
                            <h5 class="text-end"><b>Total a cancelar Q. <span style="color: red" class="textPago1">150.00</span></b></h5>
                            <div class="row">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="card-group my-4">
                                        <div class="card">
                                            <div class="logo"><img src="assets/img/Visa-Logo-PNG-Image.png" alt="Visa"></div>
                                            <div class="chip"><img src="assets/img/chip.png" alt="chip"></div>
                                            <div class="number" id="cardNumber">XXXX XXXX XXXX XXXX</div>
                                            <div class="name" id="cardName">XXXXXXX XXXXXXX</div>
                                            <div class="from">00/00</div>
                                            <div class="to">000</div>
                                            <div class="ring"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-6 align-items-center pt-4">
                                    <label for="" class="mt-2">Nombre titular de la tarjeta</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-id-card"></i></span>
                                        <input type="text" name="nombreTarjeta" id="nombreTarjeta" onkeyup="cardName();" required class="form-control" placeholder="Nombre Titular de la tarjeta" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="" class="mt-2">Número tarjeta</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-cc-visa"></i></span>
                                        <input type="text" name="numeroTarjeta" 
                                        onkeyup="
                                                var v = this.value;
                                                if (v.match(/^\d{4}$/) !== null) {
                                                    this.value = v + ' ';
                                                }else if (v.match(/^\d{4}\ \d{4}$/) !== null) {
                                                    this.value = v + ' ';
                                                }else if (v.match(/^\d{4}\ \d{4}\ \d{4}$/) !== null) {
                                                    this.value = v + ' ';
                                                }; cardNumber();"
                                            maxlength="19"
                                        id="numeroTarjeta" required class="form-control" placeholder="Número de la tarjeta" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="" class="mt-2">Fecha expiración</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-calendar"></i></span>
                                                <input type="text" name="fechaExpiracion" required class="form-control" placeholder="00/00" aria-describedby="basic-addon1"
                                                onkeyup="
                                                var v = this.value;
                                                if (v.match(/^\d{2}$/) !== null) {
                                                    this.value = v + '/';
                                                }"
                                                maxlength="5"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="" class="mt-2">CVC</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-credit-card"></i></span>
                                                <input type="number" name="cvc" 
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                required class="form-control" placeholder="000" aria-describedby="basic-addon1" maxlength="3">
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>

                        <div id="tipoPago2" class="my-5">
                            <h4>Pago deposito previo</h4>

                            Para llevar a cabo este procedimiento, siga los siguientes pasos:
                            <br>
                            <ol>
                                <li>Elija el banco de su preferencia.</li>
                                <li>Presione confirmar y reservar para generar una orden de reserva</li>
                                <li>Realice el depósito según el monto indicado.</li>
                                <li>Una vez realizado el depósito, envíe una captura del comprobante al número +502 54125425 para validar el pago.</li>
                                <li>Una vez validado el pago, procederemos a reservar y enviarle el comprobante a la dirección de correo proporcionada.</li>
                            </ol>                            
                            <br>
                            <h5 class="text-end"><b>Total a cancelar Q. <span style="color: red" class="textPago2">150.00</span></b></h5>
                            <br><br>
                            Bancos disponibles
                            <ul>
                                <li><b>BANRURAL</b></li>
                                <ul>
                                    <li>A nombre de: Nombre X Apellido X</li>
                                    <li>Cuenta: 0021654116584</li>
                                </ul>

                                <li><b>BANRURAL</b></li>
                                <ul>
                                    <li>A nombre de: Nombre X Apellido X</li>
                                    <li>Cuenta: 0021654116584</li>
                                </ul>

                                <li><b>BANRURAL</b></li>
                                <ul>
                                    <li>A nombre de: Nombre X Apellido X</li>
                                    <li>Cuenta: 0021654116584</li>
                                </ul>

                                <li><b>BANRURAL</b></li>
                                <ul>
                                    <li>A nombre de: Nombre X Apellido X</li>
                                    <li>Cuenta: 0021654116584</li>
                                </ul>
                            </ul>
                        </div>

                        <div id="tipoPago3" class="my-5">
                            <h4>Pago en Efectivo</h4>
                            <br>
                            <h5 class="text-end"><b>Total a cancelar Q. <span style="color: red" class="textPago3">150.00</span></b></h5>
                            <br><br>
                            <p>
                                Para este método de pago consta de la siguiente manera; Una vez elegido el tipo de pago efectivo, deberá cancelar en las
                                instalaciones de la cancha, deberá cancelar previo a utilizar la cancha. El comprobante le llegará a su correo luego de cancelar en las instalaciones
                            </p>
                        </div>

                        <br>
                        <a href="/terminos" target="_blank">Lee nuestros términos</a><br>

                        <input type="checkbox" name="terminos" id="terminos" onclick="habilitarBoton()"><label for="terminos"> He leido y acepto los terminos y condiciones</label>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="regresar();">Atrás</button>
                    <button type="button" class="btn btn-success" id="btn-reservar" onclick="guardarReserva();" disabled>Confirmar y reservar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>