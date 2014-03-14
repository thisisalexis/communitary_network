<h2><?php echo __('Agregar Usuario') ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de usuarios', array('action' => 'index'),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?>
	</div>
</div>


<?php 
	echo $this->Form->create('User', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('id');
	
	echo $this->Form->input('username', array('label' => array('text' => 'Nombre de Usuario', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'escape' => false, 'maxlength' => '100',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('password', array('label' => array('text' => 'Contrase&ntilde;a', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Contrase&ntilde;a', 'escape' => false, 'maxlength' => '20',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	
	echo $this->Form->input('is_admin', array('label' => '&nbsp;Administrador', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('is_active', array('label' => '&nbsp;Activo', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
		
	echo $this->Form->end(array('label' => 'Guardar Cambios', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'index')) . '</div>'  ) ); 
?>