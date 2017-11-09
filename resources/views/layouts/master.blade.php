<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href= "{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href=" {{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css" href=" {{asset('css/css5c0a.css')}}" />
        <link rel="stylesheet" type="text/css" href=" {{asset('css/ace.min.css')}}" />
        <link href=" {{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href=" {{asset('css/select2.min.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/ace-responsive.min.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/dataTables.bootstrap.css')}}" />
	    	<link rel="stylesheet" href=" {{asset('css/bootstrap-editable.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/colorbox.min.css')}}" />

     	<link rel="stylesheet" href=" {{asset('css/ace-skins.min.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/datepicker.min.css')}}" />
        <link rel="apple-touch-icon" href=" {{asset('images/apple-touch-icon.png')}}">


</head>

<body class="no-skin">

        <div id="navbar" class="navbar navbar-default">
            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="/inicio" class="navbar-brand">
                        <small>
                            <img src="{{asset('images/logo.png')}}" height="23px">
                            Difusion Utem
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                                                                                                <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                                <img class='nav-user-photo' src="images/desconocido.jpg" />
                                <span class="user-info">
                                    <small>Hola Intruso</small>
                                    </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="/perfil/mis_datos">
                                        <i class="ace-icon fa fa-user"></i>
                                        Mis Datos
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="/salir">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Salir
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>
        <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
        </script>

            <div id="sidebar" class="sidebar responsive">
                <script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'fixed')
    } catch (e) {
    }
</script>


<ul class="nav nav-list">
    <li>
        <a href="/">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Inicio </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Mi Perfil </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="/perfil/mis_datos">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Mis Datos
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

		<!-- Expositores -->

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Expositores </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="/agregar_expositor">
                    <i class="menu-icon fa fa-caret-right"></i>
                	Ver Todo

                </a>
                <b class="arrow"></b>
            </li>
						<li class="">
                <a href="/agregar_expositor">
                    <i class="menu-icon fa fa-caret-right"></i>
                	Agregar

                </a>
                <b class="arrow"></b>
            </li>
						<li class="">
                <a href="/agregar_expositor">
                    <i class="menu-icon fa fa-caret-right"></i>
                	Actualizar

                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="/perfil/mis_datos">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Eliminar
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>


		<!-- Evento -->

    <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-medkit"></i>
                <span class="menu-text"> Evento </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="/sesaes/reserva_hora">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Asignar horario
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Calendario
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Crear Evento
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

				<!-- Establecimiento -->
				<li class="">
		        <a href="#" class="dropdown-toggle">
		            <i class="menu-icon fa fa-globe"></i>
		            <span class="menu-text"> Establecimientos </span>

		            <b class="arrow fa fa-angle-down"></b>
		        </a>

		        <b class="arrow"></b>

		        <ul class="submenu">
		            <li class="">
		                <a href="/agregar_expositor">
		                    <i class="menu-icon fa fa-caret-right"></i>
		                	Ver Todo

		                </a>
		                <b class="arrow"></b>
		            </li>
								<li class="">
		                <a href="/agregar_expositor">
		                    <i class="menu-icon fa fa-caret-right"></i>
		                	Agregar

		                </a>
		                <b class="arrow"></b>
		            </li>
								<li class="">
		                <a href="/agregar_expositor">
		                    <i class="menu-icon fa fa-caret-right"></i>
		                	Actualizar

		                </a>
		                <b class="arrow"></b>
		            </li>
		            <li class="">
		                <a href="/perfil/mis_datos">
		                    <i class="menu-icon fa fa-caret-right"></i>
		                    Eliminar
		                </a>
		                <b class="arrow"></b>
		            </li>
		        </ul>
		    </li>





				<!-- Materiales -->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-globe"></i>
                <span class="menu-text"> Materiales </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="/sesaes/reserva_hora">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Ver todo
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Agregar
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Actualizar
                    </a>

                    <b class="arrow"></b>
                </li>
								<li class="">
                    <a href="/sesaes/anular_reserva">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Eliminar
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>


			<!-- Sueldos -->
        <li class="">
        <a href="#" target="_blank">
            <i class="menu-icon fa fa-credit-card "></i>
            <span class="menu-text"> Sueldos </span>
        </a>
        <b class="arrow"></b>
    </li>


		<!-- Generar convenio -->
    <li class="">
        <a href="#">
            <i class="menu-icon fa fa-credit-card "></i>
            <span class="menu-text"> Generar Convenio </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
    <b class="arrow"></b>
        <!--a href="#" class="dropdown-toggle"-->
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-globe"></i>
            <span class="menu-text"> Accesos Directos </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="https://www.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Página UTEM
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://postulacion.utem.cl/" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    DirDoc
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="http://reko.utem.cl/portal/" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Reko
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://biblioteca.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Catálogo Biblioteca
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://bienestarestudiantil.blogutem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Bienestar Estudiantil
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="http://validacion.utem.cl" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Validación Certificados
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li>
        <a href="/contacto">
            <i class="menu-icon fa fa-send"></i>
            <span class="menu-text"> Contáctanos</span>
        </a>
        <b class="arrow"></b>
    </li>
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed')
    } catch (e) {
    }
</script>
            </div>

            <div class="main-content">
                <div class="main-content-inner">


                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="/">Inicio</a>
                            </li>

                            <li class="active"></li>
                        </ul>
                        </div><!-- /.main-content -->
                    <div class="page-content">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


         <script src="js/formulario.js"></script>
        <script src="{{asset('js/jquery.carousel.js')}}"></script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/bootbox.min.js')}}"></script>
        <script src="{{asset('js/ace-elements.min.js')}}"></script>
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/jquery.dataTables.bootstrap.min.js')}}"></script>

        <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
        <script src="{{asset('js/ace.min.js')}}"></script>
        <script src="{{asset('js/fuelux/fuelux.wizard.min.js')}}"></script>
        <script src="{{asset('js/x-editable/ace-editable.min.js')}}"></script>
        <script src="{{asset('js/x-editable/bootstrap-editable.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/date-time/datepicker.min.js')}}"></script>
        <script src="{{asset('js/date-time/moment.js')}}"></script>
        <script src="{{asset('js/date-time/bootstrap-datepicker.min.js')}}"></script>

        <div class="main-container" >
						@yield('contenido')
				</div>
	</body>
</html>
