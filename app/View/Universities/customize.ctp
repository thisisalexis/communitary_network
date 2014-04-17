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
	?>

	<div class="col-sm-4">
	<?php
		echo $this->Form->input('is_active', array('label' => '&nbsp;Activo', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('documents_module', array('label' => '&nbsp;M&oacute;dulo de Documentos', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('calendar_module', array('label' => '&nbsp;M&oacute;dulo de Cronograma', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	?>
	</div>
	<div class="col-sm-4">
	<?php

		echo $this->Form->input('indicators_module', array('label' => '&nbsp;M&oacute;dulo de Indicadores', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('projects_module', array('label' => '&nbsp;M&oacute;dulo de Proyectos', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('experiences_module', array('label' => '&nbsp;M&oacute;dulo de Experiencias', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	?>
	</div>
	<div class="col-sm-4">
	<?php

		echo $this->Form->input('suggest_module', array('label' => '&nbsp;M&oacute;dulo de Sugerencias', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('forum_module', array('label' => '&nbsp;M&oacute;dulo de Mensajes (Foro)', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

		echo $this->Form->input('team_modulo', array('label' => '&nbsp;M&oacute;dulo de Equipo', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));
	?>
	</div>
	<hr />
	<?php		
		echo $this->Form->end(array('label' => 'Guardar Cambios', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-12">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'view', $university['University']['id'])) . '</div>'  ) ); 
	?>

	