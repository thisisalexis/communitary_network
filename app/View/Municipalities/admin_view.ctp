<h2><?php echo __('Municipios'); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de municipios', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $municipality['Municipality']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $municipality['Municipality']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $municipality['Municipality']['id'])); ?> 
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style="width: 20%"><?php echo __('ID'); ?></th>
					<td><?php echo h($municipality['Municipality']['id']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<td><?php echo h($municipality['Municipality']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($municipality['Municipality']['description']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Pa&iacute;s', false); ?></th>
					<td><?php echo $this->Html->link($municipality['City']['name'], array('controller' => 'cities', 'action' => 'view', $municipality['City']['id'], 'admin' => true )); ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>