<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
	<h1>Bienvenido</h1>
	<p>Sistema Web de Apoyo a las Comunicaciones para Promover la Ejecuci&oacute;n de Proyectos de Servicio Comunitario en las Universidades.</p>
	<hr>
	<span>
		<?php echo $this->Html->link(__('Conoce m&aacute;s del sistema'), array('controller' => 'pages', 'action' => 'about' ), array('class' => 'btn btn-success btn-lg', 'escape' => false) ); ?>
		<?php echo $this->Html->link(__('Aprende c&oacute;mo ayudar'), array('controller' => 'pages', 'action' => 'how_to_help' ), array('class' => 'btn btn-warning btn-lg', 'escape' => false) ); ?>
	</span>
</div>

<div class="row">
	<div class="col-md-4">
	  <h2>Comunidades</h2>
	  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	</div>
	<div class="col-md-4">
	  <h2>Universidades</h2>
	  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	</div>
	<div class="col-md-4">
	  <h2>Proyectos</h2>
	  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	</div>
</div>