<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquier-Cancha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <section class="banner4">        
        <h1 class="text-white display-1 titulos mt-5 text-center animate__animated animate__fadeInLeft">¡Habla con nosotros!</h1>
        <lottie-player class="icon_movie mt-3 animate__animated animate__fadeInDown" src="https://assets3.lottiefiles.com/private_files/lf30_by03eilq.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
    </section>

    <!-- TERMINA HEADER -->

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 contact-i p-5" data-aos="fade-down">
                <h3 class="text-white">Envíanos un mensaje</h3>
                <form class="my-4">                    
                    <div class="inputBox">
                        <input type="text" name="nombre" required>
                        <span>Nombre</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="correo" required>
                        <span>Correo</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="asunto" required>
                        <span>Asunto</span>
                    </div>

                    <div class="inputBox">
                        <textarea name="mensaje" cols="30" rows="6" required></textarea>
                        <span>Mensaje</span>
                    </div>

                    <button class="btn btn-outline-light">Enviar</button>
                </form>
            </div>
            <div class="col-md-6 p-5" data-aos="fade-up">
                <h3>Contáctanos</h3>
                <p>Queremos escuchar tus sugerencias</p>
                <br>
                <div class="row">
                    <div class="mt-5 col-1">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="mt-5 col-11">
                        Dirección: 2da av 3-00 zona 1 de San Lucas, Sacatepéquez, Guatemala
                    </div>

                    <div class="mt-5 col-1">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="mt-5 col-11">
                        Telefono: +502 40186862
                    </div>

                    <div class="mt-5 col-1">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="mt-5 col-11">
                        correo: ejemplo@gmail.com
                    </div>

                    <div class="mt-5 col-1">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="mt-5 col-11">
                        website: wwww.ejemplo.com.gt
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center my-5">Visitanos</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241.29767105735235!2d-90.65728955019594!3d14.612587447970473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85890b0abf928a4b%3A0x99656ab69a127e0f!2s2a%20Avenida%203-00%2C%20San%20Lucas%20Sacatep%C3%A9quez!5e0!3m2!1ses-419!2sgt!4v1688148616083!5m2!1ses-419!2sgt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapa"></iframe>
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