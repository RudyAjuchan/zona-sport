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

    <section class="banner3">        
        <h1 class="text-white display-1 titulos mt-5 text-center animate__animated animate__fadeInLeft">¡Conoce más sobre nosotros!</h1>
        <lottie-player class="icon_movie mt-3 animate__animated animate__fadeInDown" src="https://assets3.lottiefiles.com/private_files/lf30_by03eilq.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
    </section>

    <!-- TERMINA HEADER -->

    <div class="d-none d-md-block">
        <div class="container my-5 py-4" data-aos="fade-down">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="titul text-center">Nuestro servicio</h3><br>
                    <p style="text-align: justify;">
                    En nuestro apasionante mundo del fútbol, sabemos que encontrar el espacio perfecto para jugar es fundamental. Por eso, 
                    estamos aquí para brindarte la mejor experiencia en alquiler de canchas, donde la diversión y la pasión se unen en cada partido.
                    <br><br>Nuestra empresa nace con la firme convicción de ofrecerte un lugar idóneo para disfrutar del fútbol con tus amigos, 
                    compañeros de equipo o familia. Entendemos que el deporte rey es mucho más que un juego, es una forma de vida que fomenta el compañerismo, el espíritu competitivo y el sano entretenimiento.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/entrenador.png" alt="" class="icon_about img-fluid">
                </div>
            </div>
        </div>
    
        <div class="container my-5 py-4" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="assets/img/cancha_icon.png" alt="" class="icon_about img-fluid">
                </div>
                <div class="col-md-6">
                    <h3 class="titul text-center">Nuestras instalaciones</h3><br>
                    <p style="text-align: justify;">
                        Contamos con nuestra cancha de fútbol sintetica, adaptada para satisfacer 
                        todas tus necesidades. Estamos comprometidos en 
                        ofrecerte una experiencia única. Nuestra cancha está diseñada pensando en cada detalle, 
                        desde el tamaño reglamentario hasta la iluminación adecuada, para que puedas disfrutar de partidos emocionantes sin 
                        preocuparte por nada más que jugar.
                    </p>
                </div>
            </div>
        </div>
    
        <div class="container my-5 py-4" data-aos="fade-down">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="titul text-center">Vive la experiencia</h3><br>
                    <p style="text-align: justify;">
                        Queremos que disfrutes de tu tiempo al máximo! Es por esto que estamos siempre atentos para brindarte asistencia 
                        y resolver cualquier consulta que puedas tener. 
                        <br><br>Nos enorgullece ser parte de tu experiencia futbolística y ser testigos de los momentos de alegría 
                        que se viven en nuestras canchas. Queremos ser tu aliado para que disfrutes de este deporte en un ambiente acogedor y seguro.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/jugador.png" alt="" class="icon_about img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="d-block d-md-none">
        <div class="container my-5 py-4" data-aos="fade-down">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="titul text-center">Nuestro servicio</h3><br>
                    <p style="text-align: justify;">
                    En nuestro apasionante mundo del fútbol, sabemos que encontrar el espacio perfecto para jugar es fundamental. Por eso, 
                    estamos aquí para brindarte la mejor experiencia en alquiler de canchas, donde la diversión y la pasión se unen en cada partido.
                    <br><br>Nuestra empresa nace con la firme convicción de ofrecerte un lugar idóneo para disfrutar del fútbol con tus amigos, 
                    compañeros de equipo o familia. Entendemos que el deporte rey es mucho más que un juego, es una forma de vida que fomenta el compañerismo, el espíritu competitivo y el sano entretenimiento.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/entrenador.png" alt="" class="icon_about img-fluid">
                </div>
            </div>
        </div>
    
        <div class="container my-5 py-4" data-aos="fade-up">
            <div class="row align-items-center">                
                <div class="col-md-6">
                    <h3 class="titul text-center">Nuestras instalaciones</h3><br>
                    <p style="text-align: justify;">
                        Contamos con nuestra cancha de fútbol sintetica, adaptada para satisfacer 
                        todas tus necesidades. Estamos comprometidos en 
                        ofrecerte una experiencia única. Nuestra cancha está diseñada pensando en cada detalle, 
                        desde el tamaño reglamentario hasta la iluminación adecuada, para que puedas disfrutar de partidos emocionantes sin 
                        preocuparte por nada más que jugar.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/cancha_icon.png" alt="" class="icon_about img-fluid">
                </div>
            </div>
        </div>
    
        <div class="container my-5 py-4" data-aos="fade-down">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="titul text-center">Vive la experiencia</h3><br>
                    <p style="text-align: justify;">
                        Queremos que disfrutes de tu tiempo al máximo! Es por esto que estamos siempre atentos para brindarte asistencia 
                        y resolver cualquier consulta que puedas tener. 
                        <br><br>Nos enorgullece ser parte de tu experiencia futbolística y ser testigos de los momentos de alegría 
                        que se viven en nuestras canchas. Queremos ser tu aliado para que disfrutes de este deporte en un ambiente acogedor y seguro.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/jugador.png" alt="" class="icon_about img-fluid">
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