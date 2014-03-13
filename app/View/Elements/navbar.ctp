<div class="container-fluid">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <!--<a class="navbar-brand" href="#">Project name</a>-->
	      </div>
	      <div class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
	          <li><?php echo $this->Html->link(__('Inicio'), '/'); ?></li>
	          <li><?php echo $this->Html->link(__('Sobre el Sistema'), array('controller' => 'pages', 'action' => 'about' ) ); ?></li>
	          <li><?php echo $this->Html->link(__('C&oacute;mo Ayudar'), array('controller' => 'pages', 'action' => 'how_to_help' ), array('escape' => false) ); ?></li>
	          <li class="dropdown">
	            <?php echo $this->Html->link(__('Administraci&oacute;n') . '<b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false) ); ?>
	            <ul class="dropdown-menu">
	              <li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index', 'admin' => true )); ?></li>
	            </ul>
	          </li>
	          <!--
	          <li><a href="#">Comunidades</a></li>
	          <li><a href="#">Universidades</a></li>
	          <li><a href="#">Cont&aacute;ctenos</a></li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administraci&oacute;n <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Usuarios</a></li>
	              <li><a href="#">Banco de Necesidades</a></li>
	              <li><a href="#">Mensajes</a></li>
	              <li class="divider"></li>
	              <li class="dropdown-header">Sistema</li>
	              <li><a href="#">Separated link</a></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	          -->
	        </ul>
	        <ul class="nav navbar-nav navbar-right">
	          <li><?php echo $this->Html->link(__('Ayuda'), array('controller' => 'pages', 'action' => 'help' )); ?></li>
	          <!--
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li class="dropdown-header">Giovanna Russo</li>
	              <li><a href="modificardatos.html">Modificar Datos</a></li>
	              <li><a href="configurarcuenta.html">Configurar Cuenta</a></li>
	              <li><a href="modificarcontrasena.html">Modificar Contrase&ntilde;a</a></li>
	              <li class="divider"></li>
	              <li><a href="index.html">Salir</a></li>
	            </ul>
	          </li>
	          -->
	        </ul>
	      </div><!--/.nav-collapse -->
	    </div><!--/.container-fluid -->