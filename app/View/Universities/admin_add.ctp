<h2><?php echo __('Agregar universidad') ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de universidades', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?>
	</div>
</div>

<?php 
	echo $this->Form->create('University', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('name', array('label' => array('text' => 'Nombre', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Nombre', 'escape' => false, 'maxlength' => '100',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	
	echo $this->Form->input('description', array('label' => array('text' => 'Descripci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Descripci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('location', array('label' => array('text' => 'Direcci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Direcci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('municipality_id', array('label' => array('text' => 'Municipio', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Municipio', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('phone', array('label' => array('text' => 'Tel&eacute;fono', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Tel&eacute;fono', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('fax', array('label' => array('text' => 'Fax', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Fax', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('email', array('label' => array('text' => 'Correo Electr&oacute;nico', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Correo Electr&oacute;nico', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('parent_id', array('label' => array('text' => 'Sede Principal', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Sede Principal', 'options' => $parentUniversities, 'empty' => __('Seleccione una instituci&oacute;n', false), 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('documents_module', array('label' => '&nbsp;M&oacute;dulo de Documentos', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true,'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('calendar_module', array('label' => '&nbsp;M&oacute;dulo de Cronograma', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('indicators_module', array('label' => '&nbsp;M&oacute;dulo de Indicadores', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('projects_module', array('label' => '&nbsp;M&oacute;dulo de Proyectos', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('experiences_module', array('label' => '&nbsp;M&oacute;dulo de Experiencias', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('suggest_module', array('label' => '&nbsp;M&oacute;dulo de Sugerencias', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('forum_module', array('label' => '&nbsp;M&oacute;dulo de Mensajes (Foro)', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('team_modulo', array('label' => '&nbsp;M&oacute;dulo de Equipo', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'checked' => true, 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		
	echo $this->Form->end(array('label' => 'Agregar registro', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'index', 'admin' => true )) . '</div>'  ) ); 
?>