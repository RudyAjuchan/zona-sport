<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/estilo_sidebar.css">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Zona Sport</title>
    </head>
    <body>
        <!--=============== NAV ===============-->
        <div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-chevron-right' ></i>
                </div>
    
                <a href="#" class="nav__logo">
                    <img src="assets/img/icono_zs.ico" alt="" width="170" height="25">
                </a>
    
                <div class="nav__list">
                    <a href="/dashboard" class="nav__link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
    
                    <a href="#" class="nav__link">
                        <i class='bx bx-money'></i>
                        <span class="nav__name">Aprobar pago</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-money'></i>
                        <span class="nav__name">Reservaciones</span>
                    </a>
    
                    <a href="#" class="nav__link">
                        <i class='bx bx-building-house'></i>
                        <span class="nav__name">Historial Alquiler</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bxs-report'></i>
                        <span class="nav__name">Reportes</span>
                    </a>
    
                    <a href="/profile" class="nav__link">
                        <i class='bx bx-cog' ></i>
                        <span class="nav__name">Perfil</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="/logout" class="nav__link" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class='bx bx-log-out'></i>
                            <span class="nav__name">Cerrar Sesión</span>
                        </a>
                    </form>                    
                </div>
            </nav>
        </div>

        {{-- Contenido --}}
        @yield('contenido')

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>