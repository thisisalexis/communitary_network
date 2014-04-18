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
	          <li <?php echo $navbar_active_element == 'home' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home', 'admin' => false )); ?></li>
	          <li <?php echo $navbar_active_element == 'universities' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Universidades'), array('controller' => 'universities', 'action' => 'index', 'admin' => false )); ?></li>
	          <li <?php echo ($navbar_active_element == 'beneficiaries' && $this->params['admin'] == false)  ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Beneficiarios'), array('controller' => 'beneficiaries', 'action' => 'index', 'admin' => false )); ?></li>
	          <li <?php echo $navbar_active_element == 'pages_about' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Sobre el Sistema'), array('controller' => 'pages', 'action' => 'about', 'admin' => false ) ); ?></li>
	          <li <?php echo $navbar_active_element == 'pages_how_to_help' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('C&oacute;mo Ayudar'), array('controller' => 'pages', 'action' => 'how_to_help', 'admin' => false ), array('escape' => false) ); ?></li>
	          <?php if(AuthComponent::user('id')) { ?>
	          <li class="dropdown  <?php echo $this->params['admin'] == true ? 'active' : null; ?> ">
	            <?php echo $this->Html->link(__('Administraci&oacute;n') . '<b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false) ); ?>
	            <ul class="dropdown-menu">
	              <li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Universidades'), array('controller' => 'universities', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Beneficiarios'), array('controller' => 'beneficiaries', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Necesidades'), array('controller' => 'needs', 'action' => 'index', 'admin' => true )); ?></li>
	              <li class="divider"></li>
	              <li><?php echo $this->Html->link(__('Personas'), array('controller' => 'people', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Tipos de Beneficiario'), array('controller' => 'beneficiary_types', 'action' => 'index', 'admin' => true )); ?></li>
	              <li class="divider"></li>
	              <li><?php echo $this->Html->link(__('Pa&iacute;ses'), array('controller' => 'countries', 'action' => 'index', 'admin' => true ), array('escape' => false )); ?></li>
	              <li><?php echo $this->Html->link(__('Estados'), array('controller' => 'states', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Ciudades'), array('controller' => 'cities', 'action' => 'index', 'admin' => true )); ?></li>
	              <li><?php echo $this->Html->link(__('Municipios'), array('controller' => 'municipalities', 'action' => 'index', 'admin' => true )); ?></li>
	            </ul>
	          </li>
	           <?php } ?>
	        </ul>
	        <ul class="nav navbar-nav navbar-right">
	        	<?php if( !( AuthComponent::user('id') ) ) { ?>
	        	<li <?php echo $navbar_active_element == 'login' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Entrar'), array('controller' => 'users', 'action' => 'login', 'admin' => false )); ?></li>
	        	<li <?php echo $navbar_active_element == 'signup' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Registrarme'), array('controller' => 'users', 'action' => 'signup', 'admin' => false )); ?></li>
	        	<?php } ?>
	          	<li <?php echo $navbar_active_element == 'pages_help' ? ' class="active" ' : null; ?>><?php echo $this->Html->link(__('Ayuda'), array('controller' => 'pages', 'action' => 'help', 'admin' => false )); ?></li>
				<?php if(AuthComponent::user('id')) { ?>
				<li class="dropdown <?php echo $navbar_active_element == 'account' ? 'active' : null; ?> ">
					<?php echo $this->Html->link(__('Mi Cuenta') . '<b class="caret"></b>', '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false) ); ?>
					<ul class="dropdown-menu">				
						<li class="dropdown-header"><?php echo AuthComponent::user('username'); ?></li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link(__('Mis Datos'), array('controller' => 'users', 'action' => 'profile', 'admin' => false ) ); ?></li>
						<li><?php echo $this->Html->link(__('Cambiar Contrase&ntilde;a'), array('controller' => 'users', 'action' => 'change_password', 'admin' => false ), array('escape' => false ) ); ?></li>
						<li><?php echo $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout', 'admin' => false ) ); ?></li>
					</ul>
				</li>
				<?php } ?>
	        </ul>
	      </div><!--/.nav-collapse -->
	    </div><!--/.container-fluid -->