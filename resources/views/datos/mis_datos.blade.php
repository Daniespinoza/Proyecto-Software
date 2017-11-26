@extends('layouts.master')


@section('title','Mi Perfil')
@section('ventana','Mis Datos')
@section('contenido')
<div class="page-content">
                        <script src="/js/perfil.js"></script>
<div id="user-profile-2" class="user-profile">
    <div class="tabbable">
        <ul class="nav nav-tabs padding-18">
            <li class="active">
                <a aria-expanded="true" data-toggle="tab" href="#home">
                    <i class="green ace-icon fa fa-user bigger-120"></i> Mi info
                </a>
            </li>
            @if (Auth::user()->id_rol == 4)
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#misDirecciones">
                    <i class="orange ace-icon fa fa-home bigger-120"></i> Mi Direccion
                </a>
            </li>
            @endif
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#cambio_pass">
                    <i class="blue ace-icon fa fa-key bigger-120"></i> Cambio Contraseña
                </a>
            </li>
        </ul>

        <div class="tab-content no-border padding-24">

            <div id="home" class="tab-pane active">

                <div class="page-header">
                    <h1>
                        Mi Información
                    </h1>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12 col-sm-9">
                        <h4 class="blue">
                            <span class="middle"> {{ $array['nombre'] }} </span>
                        </h4>
                        <div class="profile-user-info">
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Rut </div>
                                <div class="profile-info-value">
                                    <span>{{$array['rut']}}</span>
                                </div>
                            </div>
                            @if (Auth::user()->id_rol == 4)
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Sexo </div>
                                <div class="profile-info-value">
                                    <span>{{$expo->genero}}</span>
                                </div>
                            </div>
                            @endif
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Correo UTEM </div>
                                <div class="profile-info-value">
                                    <span>{{$array['correo']}}</span>
                                </div>
                            </div>
                            @if (Auth::user()->id_rol == 4)
                              <div class="profile-info-row">
                                  <div class="profile-info-name">
                                      <i class="middle ace-icon fa fa-phone-square bigger-150 light-blue"></i>
                                  </div>
                                  <div class="profile-info-value">
                                      <span style="display: inline;" class="editable editable-click celular" id="celular"><b>{{$expo->alu_celular}}</b></span>
                                  </div>
                              </div>

                              <div class="profile-info-row">
                                  <div class="profile-info-name">
                                      <i class="fa fa-university" aria-hidden="true"></i>
                                  </div>
                                  <div class="profile-info-value">
                                      <span ><b>{{$carrera->nombre}}</b></span>
                                  </div>
                              </div>
                            @endif
                        </div>
                        <div class="hr hr-8 dotted"></div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="space-20"></div>

                <div id="mensaje">
                                    </div>
            </div>
            <!-- /#home -->
            @if (Auth::user()->id_rol == 4)
            <div id="misDirecciones" class="tab-pane">
                <div class="page-header">
                    <h1>
                        Mi Direccion
                    </h1>
                </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-xs-8 label label-lg label-info arrowed-in arrowed-in-right">
                                    <b>Mi Dirección</b>
                                </div>
                            </div>
                            <ul class="list-unstyled spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Dirección: </b></span>{{$expo->direccion}}
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Region: </b></span>{{$region->nombre}}
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Comuna: </b></span>{{$comuna->nombre}}
                                </li>

                            </ul><br><br>
                             <button type="button" class="btn btn-info action-buttons center" data-toggle="modal" data-target="#form_direccion">
                                    <i class="fa fa-pencil-square-o fa-2"></i> Actualizar dirección
                                </button>

                            </div>
                          </div>


                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix">
                            </div>
                            @endif
            <!-- /.row -->

            <div id="cambio_pass" class="tab-pane">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-header">
                            <h1>
                                Cambio Contraseña
                            </h1>
                        </div>
                        <form class="form-horizontal cambio_clave" method="post" action="">
                            <div class="space-10"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Nueva Contraseña</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="password" name="nueva_password" id="nueva_password" required="required"  maxlength="15">&nbsp;&nbsp;&nbsp;<strong>Recuerda solo ingresar números y letras, sin acentos ni espacios.</strong>

                                    <div class="val_pass">
                                    </div>
                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirmar Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" name="confirmacion_password" id="confirmacion_password" required="required"  maxlength="15">
                                </div>
                            </div>


                             <div class="space-4"></div>

                            <div class="col-sm-10 col-sm-offset-1">

                                <div class="alert alert-warning">
                                    <i class="ace-icon fa fa-warning"></i>

                                    <strong>Alerta! </strong> Al guardar, se cambiará la clave

                                </div>
                            </div>

                            <div class="space-40"></div>
                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i> Guardar
                                    </button>
                                </div>
                            </div>
                            <div class="content msg_error" style="display: none">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <div class="alert alert-danger log_error">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="form_direccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height: 200">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title green" id="myModalLabel"><center>Modificar Dirección</center></h4>
                        </div>
                        <form class="form-horizontal seleccionComuna" method="post" action="/perfil/modificarDireccion">

                            <div class="modal-body cuerpo_detalle_reserva">
                                <table class="ui table segment">
                                    <tr>
                                        <td>
                                            <label> Dirección </label>
                                        </td>
                                        <td class="form-control-static">
                                            <input type="text" class="col-md-12" name="txtDireccion" required placeholder="Ingrese nueva dirección" id="form-field-1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label> Comuna </label>
                                        </td>
                                        <td class="form-control-static">
                                            <select name="selectComuna" id="selectComuna" class="selectComuna col-md-12">

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label> Teléfono </label>
                                        </td>
                                        <td class="form-control-static">
                                            <input type="number" class="col-md-12" name="txtTelefono" placeholder="Ingrese nuevo teléfono" id="txtTelefono">
                                        </td>
                                    </tr>
                                </table>
                                <div class="validacion_direccion"> </div>
                            </div>
                            <div class="modal-footer">e4
                                <button type="submit" class="btn btn-success">Modificar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- /.row -->

@endsection
