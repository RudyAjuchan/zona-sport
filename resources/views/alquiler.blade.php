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
                        <h6 class="card-title">Nuestros términos</h6>
                        <div id="content">
                            <ul class="timeline">
                                <li class="event" data-date="Término 1" data-aos="fade-down">
                                    <h3>Aceptación de pagos</h3>
                                    <p>Al realizar una reserva por medio de nuestra página web; usted acepta pagar el monto correspondiente utilizando una tarjeta de crédito o débito válida.</p>
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
    <div class="container">
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>Los datos con borde rojo son obligatorios</span>
                    <form>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-signature"></i></span>
                            <input type="text" name="nombre" required class="form-control" placeholder="Nombre completo" aria-label="Nombre completo*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-id-card"></i></span>
                            <input type="text" name="dpi" required class="form-control" placeholder="DPI" aria-label="DPI*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <input type="text" name="telefono" required class="form-control" placeholder="Telefono" aria-label="Telefono*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-at"></i></span>
                            <input type="email" name="correo" required class="form-control" placeholder="Correo" aria-label="Correo*" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-id-badge"></i></span>
                            <input type="text" name="nit" class="form-control" placeholder="NIT" aria-label="NIT" aria-describedby="basic-addon1">
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
                                <p class="text-center">Por favor seleccione el horario.</p>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn1" onclick="apartar(1);">2:00-2:30pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn2" onclick="apartar(2);">2:30-3:00pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn3" onclick="apartar(3);">3:00-3:30pm <br>Libre</button>
                                <br>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn4" onclick="apartar(4);">3:30-4:00pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn5" onclick="apartar(5);">4:00-4:30pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn6" onclick="apartar(6);">4:30-5:00pm <br>Libre</button>
                                <br>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn7" onclick="apartar(7);">5:00-5:30pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn8" onclick="apartar(8);">5:30-6:00pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn9" onclick="apartar(9);">6:00-6:30pm <br>Libre</button>
                                <br>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn10" onclick="apartar(10);">6:30-7:00pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn11" onclick="apartar(11);">7:00-7:30pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn12" onclick="apartar(12);">7:30-8:00pm <br>Libre</button>
                                <br>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn13" onclick="apartar(13);">8:00-8:30pm <br>Libre</button>
                                <button class="btn btn-secondary btn-sm mt-2" type="button" id="btn14" onclick="apartar(14);">8:30-9:00pm <br>Libre</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Pasar al método de pago</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>