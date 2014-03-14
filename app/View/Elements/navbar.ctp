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
	          <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home', 'admin' => false )); ?></li>
	          <li><?php echo $this->Html->link(__('Sobre el Sistema'), array('controller' => 'pages', 'action' => 'about', 'admin' => false ) ); ?></li>
	          <li><?php echo $this->Html->link(__('C&oacute;mo Ayudar'), array('controller' => 'pages', 'action' => 'how_to_help', 'admin' => false ), array('escape' => false) ); ?></li>
	          <?php if(AuthComponent::user('id')) { ?>
	          <li class="dropdown">
	            <?php echo $this->Html->link(__('Administraci&oacute;n') . '<b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false) ); ?>
	            <ul class="dropdown-menu">
	              <li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Necesidades'), array('controller' => 'needs', 'action' => 'index', 'admin' => true )); ?></li>
	            </ul>
	          </li>
	           <?php } ?>
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
	        	<?php if( !( AuthComponent::user('id') ) ) { ?>
	        	<li><?php echo $this->Html->link(__('Entrar'), array('controller' => 'users', 'action' => 'login', 'admin' => false )); ?></li>
	        	<li><?php echo $this->Html->link(__('Registrarme'), array('controller' => 'users', 'action' => 'signup', 'admin' => false )); ?></li>
	        	<?php } ?>
	          	<li><?php echo $this->Html->link(__('Ayuda'), array('controller' => 'pages', 'action' => 'help', 'admin' => false )); ?></li>
				<?php if(AuthComponent::user('id')) { ?>
				<li class="dropdown">
					<?php echo $this->Html->link(__('Mi Cuenta') . '<b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false) ); ?>
					<ul class="dropdown-menu">				
						<li class="dropdown-header"><?php echo AuthComponent::user('username'); ?></li>
						<!--
						<li><a href="configurarcuenta.html">Configurar Cuenta</a></li>
						<li><a href="modificarcontrasena.html">Modificar Contrase&ntilde;a</a></li>
						-->
						<li class="divider"></li>
						<li><?php echo $this->Html->link(__('Mis Datos'), array('controller' => 'users', 'action' => 'profile', 'admin' => false ) ); ?></li>
						<li><?php echo $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout', 'admin' => false ) ); ?></li>
					</ul>
				</li>
				<?php } ?>
	        </ul>
	      </div><!--/.nav-collapse -->
	    </div><!--/.container-fluid -->