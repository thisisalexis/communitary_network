<h2><?php echo __('Estados'); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de estados', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $state['State']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $state['State']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $state['State']['id'])); ?> 
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style="width: 20%"><?php echo __('ID'); ?></th>
					<td><?php echo h($state['State']['id']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<td><?php echo h($state['State']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($state['State']['description']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('C&oacute;digo', false); ?></th>
					<td><?php echo h($state['State']['code']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Pa&iacute;s', false); ?></th>
					<td><?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'], 'admin' => true )); ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>