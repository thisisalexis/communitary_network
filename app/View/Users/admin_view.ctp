<h2><?php echo $user['User']['username']; ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de usuarios', array('action' => 'index'),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar Usuario'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $user['User']['id'])); ?> 
	</div>

	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style="width: 30%; "><?php echo __('ID'); ?></th>
					<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre de Usuario'); ?></th>
					<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Administrador de Universidad'); ?></th>
					<td><?php echo $user['User']['is_admin'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?></td>
				</tr>
				<tr>
					<th><?php echo __('Cuenta Activa'); ?></th>
					<td><?php echo $user['User']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Fecha de Creaci&oacute;n'); ?></th>
					<td><?php echo $this->Time->format($user['User']['created'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('&Uacute;ltima de modificaci&oacute;n'); ?></th>
					<td><?php echo $this->Time->format($user['User']['modified'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>