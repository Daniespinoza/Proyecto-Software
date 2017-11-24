<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="cache-control" content="no-store" />
	<meta http-equiv="cache-control" content="must-revalidate" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href= "{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" type="text/css" href=" {{asset('css/font-awesome.min.css')}}" />
  <link rel="stylesheet" type="text/css" href=" {{asset('css/css5c0a.css')}}" />
  <link rel="stylesheet" type="text/css" href=" {{asset('css/ace.min.css')}}" />
  <link rel="stylesheet" href=" {{asset('css/bootstrap-responsive.min.css')}}" />
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
                    <a href="" class="navbar-brand">
                        <small>
                            <img src="{{asset('images/logo.png')}}" height="23px">
                            Difusión UTEM
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
											<!-- ALERTA ALERTAAA -->
											@if (Auth::user()->id_rol==4)
											<li class="purple">
											<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#">
											<i class="ace-icon fa fa-bell icon-animated-bell"></i>
											<span class="badge badge-success">1</span>
											</a>
											<ul style="" class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
											<li class="dropdown-header">
											<i class="ace-icon fa fa-exclamation-triangle"></i>
											1 Notificación
											</li>
											<li style="position: relative;" class="dropdown-content ace-scroll">
											<div style="display: none;" class="scroll-track"><div class="scroll-bar"></div></div><div style="" class="scroll-content">
											<ul class="dropdown-menu dropdown-navbar navbar-pink">
											<li>
											<a href="#">
											<div class="clearfix">
											<span class="pull-left">
											<i class="fa fa-exclamation blue bigger-130 "></i>
											<b>Notificación de turno</b><br />
											Nuevo turno asignado. Revisar sus turnos.
											<br />
											</span>
											</div>
											</a>
											</li>

											</ul>
											</div>
											</li>
											</ul>
											</li>
											@endif
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                                <img class='nav-user-photo' src="images/desconocido.jpg" />
                                <span class="user-info">
                                    <small>Hola, {{ Auth::user()->name }}</small>
                                    </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="">
                                        <i class="ace-icon fa fa-user"></i>
                                        Mis Datos
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="{{ route('logout') }}"
																		onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Salir
																		</a>
																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																				{{ csrf_field() }}
																		</form>
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
                <a href="">
                    <i class="menu-icon fa fa-newspaper-o"></i>
                    Mis Datos
                </a>
                <b class="arrow"></b>
            </li>
						@if (Auth::user()->id_rol == 4)
						<li class="">
                <a href="">
                    <i class="menu-icon fa fa-calendar"></i>
                    Mi horario
                </a>
                <b class="arrow"></b>
            </li>
						@endif
        </ul>
    </li>

		<!-- Expositores -->
		@if (Auth::user()->id_rol != 4)
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-group"></i>
            <span class="menu-text"> Expositores </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a class="link" href="">
                    <i class="menu-icon fa fa-search"></i>
                	Ver Todo

                </a>
                <b class="arrow"></b>
            </li>
						@if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
						<li class="">
                <a class="link" href="">
                    <i class="menu-icon fa fa-plus"></i>
                		Agregar
                </a>
                <b class="arrow"></b>
            </li>
						<li class="">
                <a class="link" href="">
                    <!--i class="menu-icon fa fa-refresh"></i-->
										<i class="menu-icon fa fa-refresh fa-spin fa-3x fa-fw"></i>
                	Actualizar

                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a class="link" href="">
                    <i class="menu-icon fa fa-times"></i>
                    Eliminar
                </a>
                <b class="arrow"></b>
            </li>
						@endif
        </ul>
    </li>
		@endif

		<!-- Evento -->

    <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-flag"></i>
                <span class="menu-text"> Evento </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
							@if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 3 )
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-plus"></i>
                        Crear Evento
                    </a>
                    <b class="arrow"></b>
                </li>
								@endif

								@if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2 )
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-plus-circle"></i>
                        Asignar Horario
                    </a>

                    <b class="arrow"></b>
                </li>
								@endif
                <li class="">
                    <a href="">
                        <i class="menu-icon fa fa-calendar"></i>
                        Calendario de actividades
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>

				<!-- Establecimiento -->
				@if (Auth::user()->id_rol != 4)
				<li class="">
		        <a href="#" class="dropdown-toggle">
		            <i class="menu-icon fa fa-university"></i>
		            <span class="menu-text"> Establecimientos </span>

		            <b class="arrow fa fa-angle-down"></b>
		        </a>
		        <b class="arrow"></b>

		        <ul class="submenu">
		            <li class="">
		                <a class="link" href="">
		                    <i class="menu-icon fa fa-search"></i>
		                	Ver Todo

		                </a>
		                <b class="arrow"></b>
		            </li>
								@if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
								<li class="">
		               <a class="link" href="">
		                    <i class="menu-icon fa fa-plus"></i>
		                	Agregar

		                </a>
		                <b class="arrow"></b>
		            </li>
								<li class="">
		               <a class="link" href="">
		                    <i class="menu-icon fa fa-refresh fa-spin fa-3x fa-fw"></i>
		                	Actualizar

		                </a>
		                <b class="arrow"></b>
		            </li>
		            <li class="">
		                <a class="link" href="">
		                    <i class="menu-icon fa fa-times"></i>
		                    Eliminar
		                </a>
		                <b class="arrow"></b>
		            </li>
								@endif
		        </ul>
		    </li>
				@endif




				<!-- Materiales -->
				@if (Auth::user()->id_rol != 4)
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil"></i>
                <span class="menu-text"> Materiales </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                  <a class="link" href="">
                        <i class="menu-icon fa fa-search"></i>
                        Ver todo
                    </a>
                    <b class="arrow"></b>
                </li>
								@if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                <li class="">
                    <a class="link" href="">
                        <i class="menu-icon fa fa-plus"></i>
                        Agregar
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a class="link" href="">
                        <i class="menu-icon fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        Actualizar
                    </a>

                    <b class="arrow"></b>
                </li>
								<li class="">
                    <a class="link" href="">
                        <i class="menu-icon fa fa-times"></i>
                        Eliminar
                    </a>

                    <b class="arrow"></b>
                </li>
								@endif

            </ul>
        </li>
				@endif


			<!-- Sueldos -->
		@if (Auth::user()->id_rol == 4)
    <li class="">
        <a href="" target="_blank">
            <i class="menu-icon fa fa-money "></i>
            <span class="menu-text"> Mi Sueldo </span>
        </a>
        <b class="arrow"></b>
    </li>
		@endif


		<!-- Generar convenio -->
		@if (Auth::user()->id_rol == 1)
    <li class="">
        <a class="link" href="">
            <i class="menu-icon fa fa-pencil-square-o "></i>
            <span class="menu-text"> Generar Convenio </span>
        </a>
        <b class="arrow"></b>
    </li>
		@endif

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
        <a href="">
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
                                <a href="/">Inicio </a>
                            </li>

                            <li class="active"> @yield('ventana')</li>
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


						@yield('contenido')
						<div class="footer">
		                        <div class="footer-inner">
		                            <div class="footer-content">
		                                <span class="bigger-120">
		                                    Universidad Tecnológica Metropolitana
		                                </span>
		                            </div>
		                        </div>
		                    </div>

		                    <a href="#" id="btn-scroll-u" class="btn-scroll-up btn btn-sm btn-inverse">
		                        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		                    </a>
		                </div><!-- /.main-container -->
		            </div>
		        </div>
						<script type="text/javascript">
            window.jQuery || document.write("<script src='/js/jquery.min.js'>" + "<" + "/script>");
        </script>
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>


        <style>
            @media only screen and (max-height: 540px){
                .ace-nav>li>.dropdown-menu {  margin-top: auto;
                                              z-index: 1042;
                                              position: absolute;
                }
            }
        </style>

	</body>
</html>
