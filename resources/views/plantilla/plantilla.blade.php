<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('titulo','App Informativa Covid-19')</title>
        <!-- Font Awesome icons (free version)-->
        <script src="{!! asset('js/all.js') !!}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{!! asset('font/font1.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('font/font1.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" type="text/css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('inicio') }}">Consultorio "Sandoval"</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Covid-19
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('conocelo') }}">Conócelo</a>
                            <a class="dropdown-item" href="{{ route('preparate') }}">Prepárate</a>
                            <a class="dropdown-item" href="{{ route('actua') }}">Actúa</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estadisticas
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('estadistica.index') }}">Nacional</a>
                            <a class="dropdown-item" href="{{ route('mundial') }}">Internacional</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('preguntas.index') }}">Citas</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('test.create') }}">Consultas</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('medico.create') }}">Médicos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('test.index') }}">Reportes</a></li>
                <!--<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('recetamedica.index') }}">Recetas medicas</a></li>-->
                <li>
                <li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} -  {{ Auth::user()->rol }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </li>
            </div>
        </nav>
  
@yield('contenido')     
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Numeros de Contacto</h4>
                        <button class="btn btn-danger">763-75-982</button>
                        <button class="btn btn-danger">3-365-25-22</button>
                        <p class="lead mb-0">Ante Cualquier Consulta llame<br />a los Números habilitados</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Visita.</h4>
                        <a href="http://www.gmsantacruz.gob.bo/" class="btn btn-success btn-round" style="margin-right: 5px;margin-bottom: 5px;">
						    Gobernacion.
                        </a>
                        <a href="https://www.minsalud.gob.bo/" class="btn btn-success btn-round" style="margin-right: 5px;margin-bottom: 5px;">
						    Ministerio de Salud
					    </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2022</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        



        


        <!-- Bootstrap core JS-->
        <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/bootstrap.bundle.min.js') !!}"></script>
        <!-- Third party plugin JS-->
        <script type="text/javascript" src="{!! asset('js/jquery.easing.min.js') !!}"></script>
        <!-- Contact form JS-->
        <script type="text/javascript" src="{!! asset('assets/mail/jqBootstrapValidation.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/mail/contact_me.js') !!}"></script>
        <!-- Core theme JS-->
        <script type="text/javascript" src="{!! asset('js/scripts.js') !!}"></script>
    </body>
</html>
