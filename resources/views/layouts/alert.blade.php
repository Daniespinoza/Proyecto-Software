
@if ($count != 0)
<li class="purple">
    <a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#">
      <i class="ace-icon fa fa-bell icon-animated-bell"></i>
        <span class="badge badge-success">1</span>
    </a>
  <ul style="" class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
    <li class="dropdown-header">
        <i class="ace-icon fa fa-exclamation-triangle"></i>
          {{$count}} Notificación/es
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

    </li>
  </ul>
</li>
@endif
