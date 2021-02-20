<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--begin:: Global Optional Vendors -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css">
    <!--end:: Global Optional Vendors -->
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.min.css')}}" rel="stylesheet"
        type="text/css">

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/css/demo5/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/estilo_saf.css')}}" rel="stylesheet" type="text/css">
    <!--end::Global Theme Styles -->


    <link href="{{ asset('css/nav.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css')}}" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('css/bulma.css')}}" />

    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
        type="text/css">
    {{--   <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components"
    type="text/css"> --}}
    <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pages/css/login-5.min.css')}}" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        // var global URL
    var url = '{!! URL::asset('') !!}';
    </script>
    @yield('scripts')

</head>


<nav style="min-height: 85px; border-bottom:0px solid #fff; background-color: #fff;">
    <div class="container">
        <nav class="level" id="only-mobile">

            <div class="level-left">
                <div class="level-item" id="SAF-mobile">
                    <figure class="image">
                        <img style="width: 300px; height: 70px; padding-top: 10px;"
                            src="{{asset('img/logotipoCDMX.svg')}}" alt="Imagenes">
                    </figure>
                </div>
            </div>


        </nav>
    </div>
</nav>






<body>
    <div class="kt-header__bottom borde_inferior">
        <div class="kt-container">
            <!-- begin: Header Menu -->
            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
                <i class="la la-close"></i>
            </button>
            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1; float: right;">
                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                            <!-- kt-menu__item--open-dropdown kt-menu__item--hover -->
                            <a href="{{url('inicio')}}" class="kt-menu__link">
                                <span class="kt-menu__link-text fuente-menu">Inicio</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel dropdown">
                            <a class="btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Oferta Academica
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Media Superior</a>
                                <a class="dropdown-item" href="#">Licenciatura e Ingeniería</a>
                                <a class="dropdown-item" href="#">Maestría</a>
                            </div>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel dropdown">
                            <a class="btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Convocatoria 2021
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Etapa 1: Pre-inscripción</a>
                                <a class="dropdown-item" href="#">Etapa 2: Etapa de Inducción</a>
                                <a class="dropdown-item" href="#">Etapa 3: Inscripción else here</a>
                            </div>
                        </li>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                            <a href="#" class="kt-menu__link">
                                <span class="kt-menu__link-text">Contacto</span>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="kt-header-toolbar">
                    <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact"
                        id="kt_quick_search_inline">
                        <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px">
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true" data-height="300"
                                data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Header Menu -->
        </div>
    </div>
    {{--  <div class="container">
<!-- Static navbar -->
<div class="topnav" id="myTopnav">
  <a class="navbar-brand" style="background-color: #00B140; margin-left: 25px;"></a>
  <a href="inicio">Inicio</a>		
  <a href="centros_Luz_María">Centros</a>
  <a href="inscripcion_from">Preinscripción</a>
  <a href="reinscripcion">Reinscripción</a>
  <a href="informacion_destacada">Información destacada</a>
  <a href="preguntas_frecuentes">Preguntas frecuentes</a>
  <a href="login">Iniciar sesión</a> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>	  --}}

    <div class="container">
        @yield('mycontent')
    </div>

    <script>
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>

</body>

</html>