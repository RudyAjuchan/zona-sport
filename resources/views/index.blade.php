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

    <section class="banner pt-5">
        <img src="assets/img/logo_principal.png" alt="" class="mt-5 pt-5">
        <lottie-player class="icon_movie" src="https://assets9.lottiefiles.com/private_files/lf30_PaH1bn.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </section>

    <!-- TERMINA HEADER -->

    <div class="container mt-5" data-aos="fade-down">
        <div class="row align-items-center">
            <div class="col-xl-6 text-center col-lg-7 text-lg-start">
                <h1 class="titulos display-2">¡Alquila nuestra cancha ahora!</h1>
                <a href="/alquilar" class="btn btn-success btn-lg mt-3">Alquilar</a>
            </div>
            <div class="col-xl-6 mt-3 col-lg-5">
                <img src="assets/img/ilu_cancha.svg" alt="" class="img-fluid">
                <!-- <img src="assets/img/cancha1.png" alt="" class="img-fluid d-none d-lg-block">
                <img src="assets/img/cancha1.1.jpg" alt="" class="img-fluid d-block d-lg-none"> -->
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-2 titulos text-center my-5">¡Conoce nuestras <br> instalaciones!</h2>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/cancha1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ven y disfruta</h5>
                                <p>Busca nuestros horarios disponibles.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/cancha2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Reserva con anticipación</h5>
                                <p>Puedes reservar desde este sitio.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/cancha3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Diferentes tipos de pagos</h5>
                                <p>Contamos con diferentes tipos de pagos, lee más información en este sitio.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-down" style="background-color: #FFFAE5;">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-xl-6 mt-3 col-lg-5">
                    <img src="assets/img/aficionados.svg" alt="" class="img-fluid">
                    <!-- <img src="assets/img/cancha1.png" alt="" class="img-fluid d-none d-lg-block">
                    <img src="assets/img/cancha1.1.jpg" alt="" class="img-fluid d-block d-lg-none"> -->
                </div>
                <div class="col-xl-6 text-center col-lg-7 text-lg-end align-items-center d-flex">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="titulos display-1 text-center">¡Trae a tus amigos y disfruta jugando!</h1>
                        </div>
                        <div class="col-md-12 text-center mt-4">
                            <a href="/alquilar" class="btn btn-success btn-lg">Alquilar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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