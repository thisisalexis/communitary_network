
<h2><?php echo __('Necesidad'); ?></h2>


<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de necesidades', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $need['Need']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $need['Need']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $need['Need']['id'])); ?> 
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th style="width: 20%"><?php echo __('ID'); ?></th>
					<td><?php echo h($need['Need']['id']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<td><?php echo h($need['Need']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($need['Need']['description']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Creado'); ?></th>
					<td><?php echo $this->Time->format($need['Need']['created'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Modificado'); ?></th>
					<td><?php echo $this->Time->format($need['Need']['modified'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>