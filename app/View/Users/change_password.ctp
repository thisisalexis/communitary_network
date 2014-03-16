<h2><?php echo __('Modificar mis Datos'); ?></h2>

<?php 
	echo $this->Form->create('User', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('id');
	
	echo $this->Form->input('password', array('label' => array('text' => 'Nueva Contrase&ntilde;a', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Contrase&ntilde;a', 'escape' => false, 'maxlength' => '20',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));


		echo $this->Form->end(array('label' => 'Guardar Cambios', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'profile')) . '</div>'  ) ); 

?>