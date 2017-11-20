@extends('layouts.master')

@section('title','Mis Datos')
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
            <li class="">
                <a aria-expanded="false" data-toggle="tab" href="#misDirecciones">
                    <i class="orange ace-icon fa fa-home bigger-120"></i> Mis Direcciones
                </a>
            </li>
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
                    <div class="col-xs-12 col-sm-3 center">
                        <span class="profile-picture">
                            <img class="editable img-responsive" alt="Avatar" id="avatar3" width="200px" src="images/desconocido.jpg">
                        </span>
                        <div class="space space-4"></div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-12 col-sm-9">
                        <h4 class="blue">
                            <span class="middle"> Nombre completo</span>
                        </h4>
                        <div class="profile-user-info">
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Rut </div>
                                <div class="profile-info-value">
                                    <span>11.111.111-1</span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Edad </div>
                                <div class="profile-info-value">
                                    <span>21</span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Sexo </div>
                                <div class="profile-info-value">
                                    <span>Masculino</span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Nacionalidad </div>
                                <div class="profile-info-value">
                                    <span>CHILENA</span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Correo UTEM </div>
                                <div class="profile-info-value">
                                    <span>utem@utem.cl</span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name">
                                    <i class="middle ace-icon fa fa-envelope bigger-150 blue"></i>
                                </div>
                                <div class="profile-info-value">
                                    <span style="display: inline;" class="editable editable-click email" id="email"><b>utem@gmail.com</b></span>
                                </div>
                            </div>
                            <div class="profile-info-row">
                                <div class="profile-info-name">
                                    <i class="middle ace-icon fa fa-phone-square bigger-150 light-blue"></i>
                                </div>
                                <div class="profile-info-value">
                                    <span style="display: inline;" class="editable editable-click celular" id="celular"><b>+56999999999</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="hr hr-8 dotted"></div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="space-20"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-small">
                                <h4 class="widget-title smaller">
                                    <i class="ace-icon fa fa-graduation-cap bigger-110"></i>
                                    Mis Programas Académicos en la UTEM
                                </h4>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="widget-main no-padding">
                                        <ul class="list-unstyled list-striped pricing-table-header">
                                                                                            <li>
                                                    21041  INGENIERIA CIVIL EN COMPUTACION MENC. INFORMATICA
                                                    <span class="label label-success"> Regular</span>
                                                </li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-small header-color-blue2">
                                <h4 class="widget-title smaller">
                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                    En la Utem
                                </h4>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main padding-16">
                                    <div class="clearfix">
                                        <div class="grid3 center">
                                            <div style="height: 72px; width: 72px; line-height: 71px; color: rgb(202, 89, 82);" class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                                <span class="percent">2014</span>
                                            </div>
                                            <div class="space-2"></div>
                                            Año de Ingreso a la UTEM
                                        </div>
                                        <div class="grid3 center">
                                            <div style="height: 72px; width: 72px; line-height: 71px; color: rgb(89, 168, 75);" class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                <span class="percent">1</span>
                                            </div>
                                            <div class="space-2"></div>
                                            Carreras
                                        </div>
                                        <div class="grid3 center">
                                            <div style="height: 72px; width: 72px; line-height: 71px; color: rgb(149, 133, 191);" class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                <span class="percent">2016</span>
                                            </div>
                                            <div class="space-2"></div>
                                            Última matricula
                                        </div>
                                    </div>
                                    <div class="hr hr-16"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mensaje">
                                    </div>
            </div>
            <!-- /#home -->
            <div id="misDirecciones" class="tab-pane">
                <div class="page-header">
                    <h1>
                        Mis Direcciones
                    </h1>
                </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-xs-8 label label-lg label-info arrowed-in arrowed-in-right">
                                    <b>Dirección Academica</b>
                                </div>
                            </div>
                            <ul class="list-unstyled spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Dirección: </b></span>PAYSANDU 0004356 0000 0000 REINA ISABEL SEGUNDA
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Comuna: </b></span>MACUL
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Teléfono: </b></span>2948141
                                </li>
                            </ul><br><br>
                             <button type="button" class="btn btn-info action-buttons center" data-toggle="modal" data-target="#form_direccion">
                                    <i class="fa fa-pencil-square-o fa-2"></i> Actualizar dirección
                                </button>

                            </div>
                          </div>

                    <div class="col-sm-6">

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-xs-8 label label-lg label-info arrowed-in arrowed-in-right">
                                    <b>Dirección Familiar</b>
                                </div>
                            </div>
                            <ul class="list-unstyled spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Dirección: </b></span>PAYSANDU 4356 - G
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Comuna: </b></span>MACUL
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right bigger-110 green"></i>
                                    <span class="text-centered"><b>Teléfono: </b></span>22216937
                                </li>
                            </ul>
                            <br/>
                            <br/>
                                                    </div>
                    </div>
                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix"><br class="clearfix">
                    <br class="clearfix">
                            </div>
            <!-- /.row -->

            <div id="cambio_pass" class="tab-pane">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-header">
                            <h1>
                                Cambio Contraseña
                            </h1>
                        </div>
                        <form class="form-horizontal cambio_clave" method="post" action="/perfil/cambio_contrasena">
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
                                            <select name="selectComuna" id="selectComuna" class="selectComuna col-md-12"><option value="null">SELECCIONE COMUNA</option><option value="80">ALGARROBO                </option><option value="337">ALHUE                    </option><option value="401">ALTO BIO-BIO             </option><option value="27">ALTO DEL CARMEN          </option><option value="388">ALTO HOSPICIO            </option><option value="258">ANCUD                    </option><option value="31">ANDACOLLO                </option><option value="197">ANGOL                    </option><option value="291">ANTARTICA                </option><option value="15">ANTOFAGASTA              </option><option value="170">ANTUCO                   </option><option value="353">ARAUCO                   </option><option value="371">ARICA                    </option><option value="374">AYSEN                    </option><option value="273">AYSEN                    </option><option value="360">BUCHUPUREO               </option><option value="330">BUIN                     </option><option value="156">BULNES                   </option><option value="47">CABILDO                  </option><option value="383">CABO DE HORNOS           </option><option value="168">CABRERO                  </option><option value="12">CALAMA                   </option><option value="251">CALBUCO                  </option><option value="22">CALDERA                  </option><option value="62">CALERA                   </option><option value="333">CALERA DE TANGO          </option><option value="52">CALLE LARGA              </option><option value="1">CAMARONES                </option><option value="6">CAMI&Ntilde;A                   </option><option value="44">CANELA                   </option><option value="194">CA&Ntilde;ETE                   </option><option value="223">CARAHUE                  </option><option value="77">CARTAGENA                </option><option value="73">CASABLANCA               </option><option value="257">CASTRO                   </option><option value="59">CATEMU                   </option><option value="359">CATO                     </option><option value="143">CAUQUENES                </option><option value="315">CERRILLOS                </option><option value="320">CERRO NAVIA              </option><option value="358">CERRO NEGRO              </option><option value="267">CHAITEN                  </option><option value="19">CHA&Ntilde;ARAL                 </option><option value="144">CHANCO                   </option><option value="104">CHEPICA                  </option><option value="189">CHIGUAYANTE              </option><option value="276">CHILE CHICO              </option><option value="146">CHILLAN                  </option><option value="166">CHILLAN VIEJO            </option><option value="101">CHIMBARONGO              </option><option value="400">CHOLCHOL                 </option><option value="264">CHONCHI                  </option><option value="373">CHUQUICAMATA             </option><option value="274">CISNES                   </option><option value="162">COBQUECURA               </option><option value="250">COCHAMO                  </option><option value="278">COCHRANE                 </option><option value="86">CODEGUA                  </option><option value="160">COELEMU                  </option><option value="150">COIHUECO                 </option><option value="97">COINCO                   </option><option value="137">COLBUN                   </option><option value="7">COLCHANE                 </option><option value="323">COLINA                   </option><option value="199">COLLIPULLI               </option><option value="96">COLTAUCO                 </option><option value="38">COMBARBALA               </option><option value="75">CON-CON                  </option><option value="345">CONCEPCION               </option><option value="294">CONCHALI                 </option><option value="132">CONSTITUCION             </option><option value="195">CONTULMO                 </option><option value="21">COPIAPO                  </option><option value="30">COQUIMBO                 </option><option value="187">CORONEL                  </option><option value="232">CORRAL                   </option><option value="271">COYHAIQUE                </option><option value="212">CUNCO                    </option><option value="201">CURACAUTIN               </option><option value="336">CURACAVI                 </option><option value="261">CURACO DE VELEZ          </option><option value="192">CURANILAHUE              </option><option value="213">CURARREHUE               </option><option value="133">CUREPTO                  </option><option value="116">CURICO                   </option><option value="260">DALCAHUE                 </option><option value="375">DESCONOCIDA              </option><option value="20">DIEGO DE ALMAGRO         </option><option value="98">DO&Ntilde;IHUE                  </option><option value="311">EL BOSQUE                </option><option value="153">EL CARMEN                </option><option value="343">EL MONTE                 </option><option value="79">EL QUISCO                </option><option value="357">EL ROSAL                 </option><option value="78">EL TABO                  </option><option value="130">EMPEDRADO                </option><option value="202">ERCILLA                  </option><option value="314">ESTACION CENTRAL         </option><option value="381">EXTRANJERA               </option><option value="183">FLORIDA                  </option><option value="216">FREIRE                   </option><option value="25">FREIRINA                 </option><option value="254">FRESIA                   </option><option value="256">FRUTILLAR                </option><option value="269">FUTALEUFU                </option><option value="231">FUTRONO                  </option><option value="225">GALVARINO                </option><option value="3">GENERAL LAGOS            </option><option value="218">GORBEA                   </option><option value="84">GRANEROS                 </option><option value="275">GUAITECAS                </option><option value="356">GUARILIHUE               </option><option value="64">HIJUELAS                 </option><option value="268">HUALAIHUE                </option><option value="121">HUALA&Ntilde;E                  </option><option value="385">HUALPEN                  </option><option value="184">HUALQUI                  </option><option value="355">HUAPE                    </option><option value="5">HUARA                    </option><option value="26">HUASCO                   </option><option value="295">HUECHURABA               </option><option value="378">HUEPIL                   </option><option value="40">ILLAPEL                  </option><option value="293">INDEPENDENCIA            </option><option value="4">IQUIQUE                  </option><option value="341">ISLA DE MAIPO            </option><option value="82">ISLA DE PASCUA           </option><option value="387">ISLA TEJA                </option><option value="74">JUAN FERNANDEZ           </option><option value="310">LA CISTERNA              </option><option value="61">LA CRUZ                  </option><option value="113">LA ESTRELLA              </option><option value="304">LA FLORIDA               </option><option value="306">LA GRANJA                </option><option value="29">LA HIGUERA               </option><option value="45">LA LIGUA                 </option><option value="307">LA PINTANA               </option><option value="302">LA REINA                 </option><option value="28">LA SERENA                </option><option value="235">LA UNION                 </option><option value="239">LAGO RANCO               </option><option value="272">LAGO VERDE               </option><option value="285">LAGUNA BLANCA            </option><option value="177">LAJA                     </option><option value="324">LAMPA                    </option><option value="229">LANCO                    </option><option value="99">LAS CABRAS               </option><option value="300">LAS CONDES               </option><option value="209">LAUTARO                  </option><option value="190">LEBU                     </option><option value="122">LICANTEN                 </option><option value="65">LIMACHE                  </option><option value="135">LINARES                  </option><option value="368">LIRQU&Eacute;N                  </option><option value="112">LITUECHE                 </option><option value="255">LLANQUIHUE               </option><option value="58">LLAY LLAY                </option><option value="299">LO BARNECHEA             </option><option value="313">LO ESPEJO                </option><option value="318">LO PRADO                 </option><option value="106">LOLOL                    </option><option value="219">LONCOCHE                 </option><option value="138">LONGAVI                  </option><option value="200">LONQUIMAY                </option><option value="193">LOS ALAMOS               </option><option value="50">LOS ANDES                </option><option value="167">LOS ANGELES              </option><option value="230">LOS LAGOS                </option><option value="253">LOS MUERMOS              </option><option value="207">LOS SAUCES               </option><option value="43">LOS VILOS                </option><option value="186">LOTA                     </option><option value="205">LUMACO                   </option><option value="87">MACHALI                  </option><option value="372">MACUL                    </option><option value="233">MAFIL                    </option><option value="316">MAIPU                    </option><option value="91">MALLOA                   </option><option value="386">MALLOCO                  </option><option value="114">MARCHIHUE                </option><option value="11">MARIA ELENA              </option><option value="335">MARIA PINTO              </option><option value="129">MAULE                    </option><option value="252">MAULLIN                  </option><option value="16">MEJILLONES               </option><option value="344">MELIPEUCO                </option><option value="334">MELIPILLA                </option><option value="119">MOLINA                   </option><option value="354">MONTE AGUILA             </option><option value="37">MONTE PATRIA             </option><option value="85">MOSTAZAL                 </option><option value="174">MULCHEN                  </option><option value="176">NACIMIENTO               </option><option value="103">NANCAGUA                 </option><option value="281">NATALES                  </option><option value="290">NAVARINO                 </option><option value="111">NAVIDAD                  </option><option value="175">NEGRETE                  </option><option value="164">NINHUE                   </option><option value="377">&Ntilde;IPAS                    </option><option value="376">&Ntilde;IQUEN                   </option><option value="63">NOGALES                  </option><option value="224">NUEVA IMPERIAL           </option><option value="301">&Ntilde;U&Ntilde;OA                    </option><option value="279">O&quot;HIGGINS                </option><option value="88">OLIVAR                   </option><option value="13">OLLAGUE                  </option><option value="66">OLMUE                    </option><option value="240">OSORNO                   </option><option value="34">OVALLE                   </option><option value="342">PADRE HURTADO            </option><option value="226">PADRE LAS CASAS          </option><option value="33">PAIHUANO                 </option><option value="237">PAILLACO                 </option><option value="331">PAINE                    </option><option value="270">PALENA                   </option><option value="108">PALMILLA                 </option><option value="234">PANGUIPULLI              </option><option value="57">PANQUEHUE                </option><option value="49">PAPUDO                   </option><option value="115">PAREDONES                </option><option value="139">PARRAL                   </option><option value="379">PARRAL                   </option><option value="312">PEDRO AGUIRRE CERDA      </option><option value="126">PELARCO                  </option><option value="145">PELLUHUE                 </option><option value="155">PEMUCO                   </option><option value="340">PE&Ntilde;AFLOR                 </option><option value="303">PE&Ntilde;ALOLEN                </option><option value="131">PENCAHUE                 </option><option value="181">PENCO                    </option><option value="109">PERALILLO                </option><option value="210">PERQUENCO                </option><option value="46">PETORCA                  </option><option value="95">PEUMO                    </option><option value="8">PICA                     </option><option value="94">PICHIDEGUA               </option><option value="110">PICHILEMU                </option><option value="151">PINTO                    </option><option value="328">PIRQUE                   </option><option value="217">PITRUFQUEN               </option><option value="102">PLACILLA                 </option><option value="159">PORTEZUELO               </option><option value="287">PORVENIR                 </option><option value="9">POZO ALMONTE             </option><option value="288">PRIMAVERA                </option><option value="297">PROVIDENCIA              </option><option value="70">PUCHUNCAVI               </option><option value="214">PUCON                    </option><option value="319">PUDAHUEL                 </option><option value="366">PUEBLO SECO              </option><option value="326">PUENTE ALTO              </option><option value="399">PUERTO IBA&Ntilde;EZ            </option><option value="248">PUERTO MONTT             </option><option value="384">PUERTO NATALES           </option><option value="243">PUERTO OCTAY             </option><option value="222">PUERTO SAAVEDRA          </option><option value="249">PUERTO VARAS             </option><option value="107">PUMANQUE                 </option><option value="39">PUNITAQUI                </option><option value="283">PUNTA ARENAS             </option><option value="263">PUQUELDON                </option><option value="206">PUREN                    </option><option value="244">PURRANQUE                </option><option value="55">PUTAENDO                 </option><option value="2">PUTRE                    </option><option value="242">PUYEHUE                  </option><option value="265">QUEILEN                  </option><option value="266">QUELLON                  </option><option value="259">QUEMCHI                  </option><option value="173">QUILACO                  </option><option value="322">QUILICURA                </option><option value="171">QUILLECO                 </option><option value="157">QUILLON                  </option><option value="60">QUILLOTA                 </option><option value="71">QUILPUE                  </option><option value="365">QUINCHAMALI              </option><option value="262">QUINCHAO                 </option><option value="317">QUINTA NORMAL            </option><option value="69">QUINTERO                 </option><option value="163">QUIRIHUE                 </option><option value="364">QUIRIQUINA               </option><option value="83">RANCAGUA                 </option><option value="158">RANQUIL                  </option><option value="124">RAUCO                    </option><option value="363">RECINTO                  </option><option value="296">RECOLETA                 </option><option value="198">RENAICO                  </option><option value="321">RENCA                    </option><option value="90">RENGO                    </option><option value="89">REQUINOA                 </option><option value="140">RETIRO                   </option><option value="53">RINCONADA                </option><option value="238">RIO BUENO                </option><option value="127">RIO CLARO                </option><option value="36">RIO HURTADO              </option><option value="277">RIO IBA&Ntilde;EZ               </option><option value="245">RIO NEGRO                </option><option value="284">RIO VERDE                </option><option value="118">ROMERAL                  </option><option value="362">RUCAPEQUEN               </option><option value="120">SAGRADA FAMILIA          </option><option value="41">SALAMANCA                </option><option value="76">SAN ANTONIO              </option><option value="329">SAN BERNARDO             </option><option value="147">SAN CARLOS               </option><option value="128">SAN CLEMENTE             </option><option value="51">SAN ESTEBAN              </option><option value="149">SAN FABIAN               </option><option value="54">SAN FELIPE               </option><option value="100">SAN FERNANDO             </option><option value="286">SAN GREGORIO             </option><option value="152">SAN IGNACIO              </option><option value="142">SAN JAVIER               </option><option value="305">SAN JOAQUIN              </option><option value="327">SAN JOSE DE MAIPO        </option><option value="228">SAN JOSE DE MARIQUINA    </option><option value="247">SAN JUAN DE LA COSTA     </option><option value="309">SAN MIGUEL               </option><option value="165">SAN NICOLAS              </option><option value="241">SAN PABLO                </option><option value="338">SAN PEDRO                </option><option value="14">SAN PEDRO DE ATACAMA     </option><option value="188">SAN PEDRO DE LA PAZ      </option><option value="134">SAN RAFAEL               </option><option value="308">SAN RAMON                </option><option value="178">SAN ROSENDO              </option><option value="93">SAN VICENTE              </option><option value="172">SANTA BARBARA            </option><option value="361">SANTA CLARA              </option><option value="105">SANTA CRUZ               </option><option value="185">SANTA JUANA              </option><option value="56">SANTA MARIA              </option><option value="292">SANTIAGO                 </option><option value="81">SANTO DOMINGO            </option><option value="17">SIERRA GORDA             </option><option value="339">TALAGANTE                </option><option value="125">TALCA                    </option><option value="180">TALCAHUANO               </option><option value="18">TALTAL                   </option><option value="208">TEMUCO                   </option><option value="117">TENO                     </option><option value="221">TEODORO SCHMIDT          </option><option value="23">TIERRA AMARILLA          </option><option value="325">TIL-TIL                  </option><option value="92">TILCOCO                  </option><option value="289">TIMAUKEL                 </option><option value="196">TIRUA                    </option><option value="10">TOCOPILLA                </option><option value="220">TOLTEN                   </option><option value="182">TOME                     </option><option value="282">TORRES DEL PAINE         </option><option value="280">TORTEL                   </option><option value="204">TRAIGUEN                 </option><option value="161">TREHUACO                 </option><option value="169">TUCAPEL                  </option><option value="227">VALDIVIA                 </option><option value="24">VALLENAR                 </option><option value="67">VALPARAISO               </option><option value="123">VICHUQUEN                </option><option value="203">VICTORIA                 </option><option value="32">VICU&Ntilde;A                   </option><option value="211">VILCUN                   </option><option value="141">VILLA ALEGRE             </option><option value="72">VILLA ALEMANA            </option><option value="215">VILLARRICA               </option><option value="68">VI&Ntilde;A DEL MAR             </option><option value="298">VITACURA                 </option><option value="136">YERBAS BUENAS            </option><option value="179">YUMBEL                   </option><option value="154">YUNGAY                   </option><option value="48">ZAPALLAR                 </option></select>
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
                            <div class="modal-footer">
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
