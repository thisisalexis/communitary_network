<h2><?php echo __('Mis Datos'); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link(__('Modificar mis datos'), array('action' => 'edit_profile'), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Html->link(__('Cambiar Contrase&ntilde;a'), array('action' => 'change_password'), array('class' => 'btn btn-primary btn-xs', 'escape' => false )); ?> 
	</div>

	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style=" width: 20%;  "><?php echo __('Nombre de Usuario'); ?></th>
					<td><?php echo h(AuthComponent::user('username')); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Cuenta Activa'); ?></th>
					<td><?php echo AuthComponent::user('is_active') ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>