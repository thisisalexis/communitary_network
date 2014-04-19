<h2><?php echo h($this->request->data['Beneficiary']['name']); ?></h2>


<?php 
	echo $this->Form->create('Beneficiary', array('class' => 'form-horizontal', 'role'=> 'form' )); 

	echo $this->Form->input('id');

	echo $this->Form->input('name', array('label' => array('text' => 'Nombre', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Nombre', 'escape' => false, 'maxlength' => '100',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('description', array('label' => array('text' => 'Descripci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Descripci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('location', array('label' => array('text' => 'Direcci&oacute;n', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Direcci&oacute;n', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('municipality_id', array('label' => array('text' => 'Municipio', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Municipio', 'escape' => false,  'div' => 'form-group', 'empty' => 'Seleccione', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('phone', array('label' => array('text' => 'Tel&eacute;fono', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Tel&eacute;fono', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('email', array('label' => array('text' => 'Correo Electr&oacute;nico', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Correo Electr&oacute;nico', 'escape' => false,  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));

	echo $this->Form->input('beneficiary_type_id', array('label' => array('text' => 'Tipo', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Tipo', 'escape' => false, 'empty' => 'Seleccione',  'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));	

	echo $this->Form->input('person_id', array('label' => array('text' => 'Responsable', 'class' => 'col-sm-2 control-label'), 'class' => 'form-control', 'placeholder' => 'Responsable', 'escape' => false, 'empty' => 'Seleccione', 'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'error' => array( 'attributes' => array('wrap' => 'div', 'class' => 'col-sm-10 col-sm-offset-2 text-danger' ) ) ));	

	echo $this->Form->end(array('label' => 'Agregar registro', 'class' => 'btn btn-primary btn-sm', 'div' => 'form-group', 'before' => '<div class="col-sm-10 col-sm-offset-2">', 'after' => '&nbsp;'. $this->Html->link('Cancelar', array('action' => 'index', 'admin' => true )) . '</div>'  ) ); 
?>