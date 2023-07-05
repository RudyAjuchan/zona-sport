<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | Zona Sport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-6 d-md-flex align-items-center col-9 col-sm-8 form-login py-4">
                <img src="assets/img/logo_principal.png" alt="" width="200" class="logoLogin animate__animated animate__rotateIn">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}" class="animate__animated animate__fadeInLeft" id="formLogin">
                    @csrf
                    <h1 class="text-center my-4">Inicio de Sesión</h1>
                    <label for="usuario">Usuario</label>
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" id="email" class="form-control mt-2" placeholder="usuario@ejemplo.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <label for="usuario" class="mt-4">Contraseña</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password" class="form-control mt-2" placeholder="********">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <!-- Remember Me -->
                    <div class="block mt-4 text-center">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="text-center">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success mt-3">Iniciar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 h-100 align-items-center d-none d-md-flex">
                <img src="assets/img/pelota.png" alt="" width="200" height="200" class="animate__animated animate__bounceInDown">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>