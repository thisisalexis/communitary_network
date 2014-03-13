			<div class="row">
			  <div class="col-md-8" style="text-align: left;">
			    <ul class="list-inline">
			      <li><?php echo $this->Html->link(__('Inicio'), '/'); ?></li>
			      <li><?php echo $this->Html->link(__('Sobre el Sistema'), array('controller' => 'pages', 'action' => 'about' ) ); ?></li>
			      <li><?php echo $this->Html->link(__('C&oacute;mo Ayudar'), array('controller' => 'pages', 'action' => 'how_to_help' ), array('escape' => false) ); ?></li>
			      <!--
			      <li><a href="#">Comunidades</a></li>
			      <li><a href="#">Universidades</a></li>
			      <li><a href="#">Sobre el Sistema</a></li>
			      <li><a href="#">C&oacute;mo Ayudar</a></li>
			      <li><a href="#">Cont&aacute;ctenos</a></li>
			      -->
			    </ul>
			  </div>
			  <div class="col-md-4">
			    <p>&copy; <strong>ProjectName</strong> <?php echo Date('Y') ?>. Reservados todos los derechos</p>
			  </div>
			</div> 