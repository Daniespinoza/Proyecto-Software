<!DOCTYPE html>
<html>
    <head>
        <title>Difusión</title>
        <meta name="description" content="Portal de servicios para alumnos de la Universidad Tecnológica Metropolitana" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/css5c0a.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/ace.min.css') }}" />
        <link href="{{ asset('/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/css/ace-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/ace-skins.min.css') }}" />
        <style>
            .main-content .row { margin-right: 0px!important; }
        </style>
</head>
<body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <img alt="25x25" src="images/logo.png" height="40" width="40">
                                    <span class="red">Difusion</span>
                                    <span class="grey" id="id-text2">Utem</span>
                                </h1>
                                <h4 class="blue" id="id-company-text">Universidad Tecnológica Metropolitana</h4>
                            </div>

                            <div class="space-6"></div>
                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">

                                        <div class="widget-main" id="logindiv">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Ingrese su Información
                                            </h4>
                                            <div class="space-6"></div>
                                            <form action="{{ route('login') }}" method="POST" class="login">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input id="email" type="text" name="email" class="form-control" placeholder="email" value="{{ old('email') }}"  required="true" autocomplete="username" />
                                                            {{ csrf_field() }}
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input id="password" type="password" name="password" class="form-control" value=""  placeholder="Contraseña" required="true" autocomplete="current-password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>

                                                    </label>

                                                    <div class="space"></div>
                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" name="recordar_password" class="ace" />
                                                            <span class="lbl"> Recordar Contraseña</span>
                                                        </label>
                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Entrar</span>
                                                        </button>
                                                    </div>

                                                </fieldset>
                                                <!--div class="space"></div>
                                                <a id="link_recuperar_pass" href="javascript:void(0)">                                                                                                                                                                    <i class="ace-icon fa fa-arrow-right" ></i> ¿Olvidó su contraseña?</a>
                                            </form>

                                        </div>
                                        <!-- /.widget-main -->

                                        <!-- /recuperar_pass >
                                        <div id="recuperar" style="display:none">
                                            <div class="widget-main">
                                                <h4 class="header red lighter bigger">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    Recuperar contraseña
                                                </h4>
                                                <div class="space"></div>
                                                <div class="space-6"></div>
                                                <p>
                                                    Ingrese su rut para recuperar la contraseña.
                                                </p>
                                                <form action="/recuperar_contrasena" method="POST" class="recuperar_contrasena">

                                                    <fieldset>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="rut_alumno" class="form-control recuperar-pass" placeholder="RUT" value="" required="true"  />
                                                                <i class="ace-icon fa fa-user"></i>
                                                            </span>
                                                        </label>
                                                        <div class="space"></div>

                                                        <div>
                                                            <p>
                                                                Demuestra que no eres un robot. Escribe los caracteres que veas en la imagen.
                                                            </p>

                                                            <div class="divprueba">


                                                            </div>

                                                            <div>
                                                                                                                                <table background="/images/captcha/3.png" ; style="width: 150px; height: 50px; ">
                                                                    <td VALIGN="MIDDLE" ALIGN="CENTER">
                                                                        <img src="/imagen" width="40" height="20">
                                                                    </td>
                                                                </table>

                                                            </div>
                                                            <br>
                                                            <input type=”text” class="code_verificacion" name=”code_verificacion” width=”25″ placeholder="CODIGO" />

                                                        </div>



                                                        <div id="respuesta_boton" class="col-xs-12" style="height: 60px"> </div>
                                                        <div class="clearfix">
                                                            <!--button type="button" class="width-35 pull-right btn btn-sm btn-danger btn_recuperar_contrasena">
                                                                <i class="ace-icon fa fa-lightbulb-o"></i>
                                                                <span class="bigger-110">Recuperar </span>
                                                            </button>
                                                        </div>
                                                        <a id="link_volver" href="javascript:void()"><i class="ace-icon fa fa-arrow-right" ></i> Volver</a>
                                                        </a>
                                                        <br>

                                                    </fieldset>
                                                </form>

                                            </div>
                                            <!-- /.widget-main -->
                                        </div>

                                    </div>
                                </div>
                                <!-- /.login-box -->
                            </div>
                            <!-- /.position-relative -->
                        </div>
                    </div>
                    <!-- /.col -->

                </div>

                <!-- /.row -->
                <div class="space-16"></div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="alert alert-info">
                            <i class="ace-icon fa fa-info-circle"></i>
                            <strong>Estimado!</strong> Recuerde que su credencial de acceso es personal, confidencial e intransferible.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.main-content -->
        </div>
        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <!--span class="bigger-120">
                        Soporte: <a href="mailto:sgu@utem.cl" title="Problemas técnicos">sgu@utem.cl</a>
                    </span-->
                </div>
            </div>
        </div>
        <!-- /.main-container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('/js/login.js') }}"></script>
</body>
</html>
