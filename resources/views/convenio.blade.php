@extends('layouts.master')

@section('title','Generar Convenio')
@section('ventana','Generar Convenio')
@section('contenido')

<div class="tabbable">
        <ul class="nav nav-tabs padding-18">
            <li class="active">
                <a aria-expanded="true" data-toggle="tab" href="#generarcupon">
                    <i class="blue ace-icon fa fa-money bigger-120"></i> Generar Convenio
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#cuponesgenerados">
                    <i class="blue ace-icon fa fa-files-o bigger-120"></i> Convenios Generados
                </a>
            </li>
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#cuponespagados">
                    <i class="blue ace-icon fa fa-check-square-o bigger-120"></i> Convenios Pagados
                </a>
            </li>
        </ul>

        <div class="tab-content no-border padding-24">
                    <div id="generarcupon" class="tab-pane active">
                        <div class="page-header">
                            <h1>Generar Convenio</h1>
                        </div>
                        <div class="row">
                                <div class="space-20"></div>
                                <div class="content">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="row">
                                            <div class="alert alert-info">
                                                <i class="ace-icon fa fa-info-circle"></i> Actualmente, no puedes generar convenios.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                    <br>




                            <div class="space-7"></div>
                            <!--div class="content">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>
                                            <h6><i class="ace-icon fa fa-info-circle"></i>
                                                <strong>INFORMACIÓN IMPORTANTE</strong>
                                                <br>Letras que <strong>NO</strong> se encuentran vencidas, pagarlas directamente en Banco correspondiente.<br>
                                                <br><i class="ace-icon fa fa-info-circle"></i>
                                                <strong>LETRAS DE ARANCELES</strong>
                                                <br>Se generará un Cupón con la suma de todas las Letras. Imprimir Cupón y pagarlo en Banco BCI o en Caja UTEM.<br>
                                                <br><i class="ace-icon fa fa-exclamation-triangle"></i>
                                                <strong>LETRAS DE CUOTA BASICA</strong>
                                                <br>Se generarán <strong>2</strong> Cupones:
                                                <br>Un Cupón con el monto de la Letra, y otro Cupón con el Recargo y Protestos.
                                                <br>Imprimir los <strong>2</strong> Cupones y pagarlos en Banco BCI o en Caja UTEM.
                                              </h6>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                    <!-- /#generarconvenio -->

            <div id="cuponesgenerados" class="tab-pane">
                <div class="page-header">
                    <h1>Convenios Generados</h1>
                </div>
                <div class="row">

                        <div class="space-20"></div>
                        <div class="content">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="alert alert-info">
                                        <i class="ace-icon fa fa-info-circle"></i> Actualmente, no posees convenios generados.
                                    </div>
                                </div>
                            </div>
                        </div>





                    <br>
                    <div class="space-7"></div>
                    <!--div class="content">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <h6>
                                        <i class="ace-icon fa fa-info-circle"></i>
                                        <strong>INFORMACIÓN IMPORTANTE</strong>
                                        <br>Letras que <strong>NO</strong> se encuentran vencidas, pagarlas directamente en Banco correspondiente.<br>
                                        <br><i class="ace-icon fa fa-info-circle"></i>
                                        <strong>LETRAS DE ARANCELES</strong>
                                        <br>Se generará un Cupón con la suma de todas las Letras. Imprimir Cupón y pagarlo en Banco BCI o en Caja UTEM.<br>
                                        <br><i class="ace-icon fa fa-exclamation-triangle"></i>
                                        <strong>LETRAS DE CUOTA BASICA</strong>
                                        <br>Se generarán <strong>2</strong> Cupones:
                                        <br>Un Cupón con el monto de la Letra, y otro Cupón con el Recargo y Protestos.
                                        <br>Imprimir los <strong>2</strong> Cupones y pagarlos en Banco BCI o en Caja UTEM.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
            <!-- /#cuponesgenerados -->

            <div id="cuponespagados" class="tab-pane">
                <div class="page-header">
                    <h1>Convenios Pagados</h1>
                </div>

            <div class="row">
                    <div class="space-20"></div>
                    <div class="content">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">
                                <div class="alert alert-info">
                                    <i class="ace-icon fa fa-info-circle"></i> Actualmente, no posees convenios pagados.
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            </div>
</div>
</div>

@endsection
