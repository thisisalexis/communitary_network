<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User', array('class' => 'form-signin', 'role' => 'form') ); ?>
  
  <h2 class="form-signin-heading"><?php echo __('Iniciar Sesi&oacute;n', false) ?></h2>

  <?php 
    echo $this->Form->input('username', array('type' => 'email', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Correo electr&oacute;nico', 'escape' => false, 'required', 'autofocus', 'maxlength' => 100) ); 
    echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contrase&ntilde;a', 'escape' => false, 'required', 'maxlength' => 20) );
  ?>
     
  <?php echo $this->Html->link(__('Olvid&eacute; mi contrase&ntilde;a'), '#', array('escape' => false ) ); ?>
  | 
   <?php echo $this->Html->link(__('Registrarme'), array('controller' => 'users', 'action' => 'signup'), array('escape' => false ) ); ?>
  <br> <br> 

<?php echo $this->Form->end(array('label' => __('Entrar'), 'class' => 'btn btn-lg btn-primary btn-block', 'after' => '&nbsp;<br>'. $this->Html->link(__('Volver al Inicio'), '/') . '</div>'  ) ); ?>