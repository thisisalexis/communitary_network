<h2><?php echo h($this->request->data['University']['name']); ?></h2>

<?php echo $this->element('navtab-university'); ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de universidades', array('action' => 'index'),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?>
	</div>
</div>

<?php 
	echo $this->Form->create('University', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('id');

	echo $this->Form->input('name', array('label' => array('text' => 'Nombre', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Nombre', 'escape' => false, 'maxlength' => '100',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	
	echo $this->Form->input('description', array('label' => array('text' => 'Descripci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Descripci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('location', array('label' => array('text' => 'Direcci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Direcci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('municipality_id', array('label' => array('text' => 'Municipio', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Municipio', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('phone', array('label' => array('text' => 'Tel&eacute;fono', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Tel&eacute;fono', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('fax', array('label' => array('text' => 'Fax', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Fax', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('email', array('label' => array('text' => 'Correo Electr&oacute;nico', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Correo Electr&oacute;nico', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('parent_id', array('label' => array('text' => 'Sede Principal', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Sede Principal', 'escape' => false,  'div' => 'form-group', 'options' => $parentUniversities, 'empty' => __('Seleccione una instituci&oacute;n', false), 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		
	echo $this->Form->end(array('label' => 'Guardar Cambios', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'index')) . '</div>'  ) ); 
?>