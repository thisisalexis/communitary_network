<ul id="nav-tab-university" class="nav nav-tabs">
  <li <?php echo $this->params['action'] == 'view' || $this->params['action'] == 'edit' ? 'class="active"' : null ; ?>><?php echo $this->Html->link(__('Informaci&oacute;n'), array('action' => 'view', $university['University']['id'] ), array('escape' => false) ); ?></li>
  <!--
  <li><a href="universidad-documentos.html">Documentos</a></li>
  <li><a href="universidad-cronograma.html">Cronograma</a></li>
  <li><a href="universidad-estadisticas.html">Indicadores</a></li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="universidad-proyectos.html">Proyectos Disponibles</a></li>
      <li><a href="universidad-experiencias.html">Proyectos Ejecutados</a></li>
      <li class="divider"></li>
      <li><a href="universidad-proyectos-sugerir.html">Sugerir Proyecto</a></li>
    </ul>
  </li>
  <li><a href="universidad-foro.html">Foro</a></li>
  -->
  <?php if(AuthComponent::user('id')) { ?>
  <li class="dropdown <?php echo $this->params['action'] == 'customize' ? 'active' : null ; ?>">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraci&oacute;n <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><?php //echo __('Equipo', false) ;?></li>
      <li><?php //echo __('Carreras Ofrecidas', false) ;?></li>
      <li><?php echo $this->Html->link(__('Perzonalizar'), array('action' => 'customize', $university['University']['id'] ), array('escape' => false) ); ?></li>
    </ul>
  </li>
  <?php } ?>
  <!--
  <li><a href="universidad-tutores.html">Tutores</a></li>
  -->
</ul>

