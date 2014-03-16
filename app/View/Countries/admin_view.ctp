<h2><?php echo __('Pa&iacute;ses', false); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de pa&iacute;ses', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $country['Country']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $country['Country']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $country['Country']['id'])); ?> 
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style="width: 20%"><?php echo __('ID'); ?></th>
					<td><?php echo h($country['Country']['id']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<td><?php echo h($country['Country']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($country['Country']['description']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('C&oacute;digo', false); ?></th>
					<td><?php echo h($country['Country']['code']); ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>