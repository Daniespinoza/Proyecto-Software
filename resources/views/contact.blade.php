@extends('layouts.master')

@section('title','Contáctanos - Difusión UTEM ')
@section('ventana','Contáctanos')
@section('contenido')
<div class="page-content">
<div class="page-header">
    <h1>
        Comunícate con nosotros
    </h1>
</div>
<div class="row">
          <div class="col-xs-12">
              <form class="form-horizontal enviar_mensaje" method="post" action="{{ url('/contacto/enviar_mensaje') }}">
                {{csrf_field()}}
                  <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Funcionario </label>
                      <div class="col-sm-9" style="width: 40%;">
                        <!--  <select name="area" id="area" class="form-control area">
                            <option value="veronica@utem.cl">JEFA DE AREA DE DIFUSIÓN</option>
                            <option value="amaya@utem.cl">COORDINADORA DE EXPOSITORES</option>
                            <option value="secretaria.difusion@utem.cl">SECRETARIA</option>
                          </select>-->
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tu Email </label>
                      <div class="col-sm-9" style="width: 50%;">
                          <div class="space-4"></div>
                          <p>
                              <span>{{Auth::user()->email}}</span>
                              <!--span class="label label-Default arrowed-in-right arrowed">
                                    <i class="ace-icon fa fa-info-circle bigger-120"></i>
                                    Para cambiar tu email ingresa <a href='/perfil/mis_datos'><b>AQUÍ</b></a>
                                </span-->
                          </p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mensaje <br />
                        <small class="text-success"><div id="contador">(500 caracteres)</div>
                        </small></label>
                      <div class="col-sm-9" style="width: 50%;">
                          <textarea  name="mensaje" class='form-control mensaje' rows="5" maxlength="500" required="true" ></textarea>
                      </div>
                  </div>
                  <!--
                  <div class="clearfix form-actions">
                      <div class="col-md-offset-3 col-md-9">
                          <button class="btn btn-purple" type="submit">
                              <i class="ace-icon fa fa-envelope bigger-110"></i>
                              Enviar
                          </button>
                      </div>
                  </div>-->
              </form>
          </div>
      <div id="mensaje">
                          <div class="space-7"></div>
              <div class="content">
                  <div class="col-sm-10 col-sm-offset-1">
                      <div class="row">
                          <div class="alert alert-info">
                              <i class="ace-icon fa fa-info-circle"></i>
                              <strong>Atenci&oacute;n!</strong> Para contactarnos contigo, verifica que tu email este actualizado.
                          </div>
                      </div>
                  </div>
              </div>
                  </div>
                </div>

  </div>


@endsection
