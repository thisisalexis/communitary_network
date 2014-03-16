<h2><?php echo __('Modificar registro'); ?></h2>

<div class="countries form">
<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de estados', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?>
	</div>
</div>


<?php 
	echo $this->Form->create('State', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('id');

	echo $this->Form->input('name', array('label' => array('text' => __('Nombre'), 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Nombre', 'escape' => false, 'maxlength' => '100',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	
	echo $this->Form->input('description', array('label' => array('text' => __('Descripci&oacute;n'), 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Descripci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('country_id', array('label' => array('text' => __('Pa&iacute;s'), 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Pa&iacute;s', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
		
	echo $this->Form->end(array('label' => __('Guardar Cambios'), 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'index', 'admin' => true )) . '</div>'  ) ); 
		
?>