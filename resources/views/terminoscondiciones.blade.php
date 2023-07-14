<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquier-Cancha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/cancha.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icono_zs.ico">
</head>

<body class="hidden">
    <div id='loader2'></div>
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

    <section class="banner5">
        <h1 class="text-white display-1 titulos mt-5 text-center animate__animated animate__fadeInLeft">¡Lee nuestros terminos!</h1>
        <lottie-player class="icon_movie mt-3 animate__animated animate__fadeInDown" src="https://assets3.lottiefiles.com/private_files/lf30_by03eilq.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </section>

    <section>
        <div class="container">
            <br><br>
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
    </section>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>