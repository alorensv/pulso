<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/pulso/public/images/logo.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pulso Propiedades') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/consultas.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67b6e8d4c0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Styles -->
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="col-md-3 bg-white py-1">
                    
                    <a class="navbar-brand" href="{{ route('inicio') }}">
                        <img src="/pulso/public/images/logo.png" class="mx-auto d-block img-fluid">
                    </a>
                </div>

                <div class="col-lg-9 bg-white py-1">
                    <div class="col-lg-12 bg-white py-1">
                        <div class="col-12 pt-1">
                            <p><i class="bi bi-envelope"></i> Escríbenos a : <a class="link-secondary" href="/pulso/public/"> m.orellana@pulsopropiedades.cl</a> / <a class="link-secondary" href="/pulso/public/"> p.vasquez@pulsopropiedades.cl</a></p>
                        </div>
                        <div class="col-12 text-right pt-1">
                            <p><i class="bi bi-whatsapp text-success"></i><a class="text-success" href="/pulso/public/"> +56 9 7608 8239</a></p>
                        </div>
                    </div>
                    <div class="col-lg-12 bg-white py-1">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('inicio') }}">{{ __('Inicio') }}</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link" href="{{ url('/propiedades') }}">{{ __('Propiedades') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/proyectos') }}">{{ __('Proyectos') }}</a>
                                    </li>-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('servicios') }}">{{ __('Servicios') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('entreganos') }}">{{ __('Entréganos tu propiedad') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('nosotros') }}">{{ __('Quienes somos') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contacto') }}">{{ __('Contacto') }}</a>
                                    </li>
                                    <!--
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif-->
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('inicio') }}">{{ __('Inicio') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('servicios') }}">{{ __('Servicios') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('entreganos') }}">{{ __('Entréganos tu propiedad') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('nosotros') }}">{{ __('Quienes somos') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contacto') }}">{{ __('Contacto') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">{{ __('Administrar') }}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>
        <div class="py-3">
            @yield('slide')
        </div>        
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="container py-4">
                <div class="row">
                    <div class="col-sm-5">
                        <h3>Sobre Nosotros</h3>
                        <p>Nuestra empresa se especializa en la Compra, Venta, Arriendos de inmuebles, 
                            Gestión de proyectos y Administración de propiedades, en el Sur de Chile. 
                            Gestionamos de manera personalizada los requerimientos de nuestros clientes.</p>
                    </div>
                    <div class="col-sm-3">
                        <h3>Tipos de Propiedades</h3>
                        <ul>
                            <li>Casas</li>
                            <li>Departamentos</li>
                            <li>Terrenos</li>
                            <li>Parcelas</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3>Contacto</h3>
                        <ul>
                            <li><i class="bi bi-envelope"></i><a class="link-secondary" href="/pulso/public/"> m.orellana@pulsopropiedades.cl</a></li>
                            <li><i class="bi bi-envelope"></i><a class="link-secondary" href="/pulso/public/"> p.vasquez@pulsopropiedades.cl</a></li>
                            <li><i class="bi bi-whatsapp"></i><a href="/pulso/public/"> +56 9 7608 8239</a></li>
                            <li><a href="{{ route('login') }}">Intranet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="subfooter shadow-sm">
            <div class="container">
                <div class="col-12">
                    <p>PULSO PROPIEDADES © Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>

    @yield('js')
</body>
</html>
