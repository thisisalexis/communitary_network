<h2><?php echo __('Municipios'); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link(__('Agregar'), array('action' => 'admin_add', 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?>
	</div>

	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width: 4%;"><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('city_id', 'Ciudad'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			<thead>
			<tbody>
				<?php foreach ($municipalities as $municipality): ?>
				<tr>
					<td><?php echo h($municipality['Municipality']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($municipality['Municipality']['name']), array('action' => 'view', $municipality['Municipality']['id'])); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($municipality['City']['name'], array('controller' => 'cities', 'action' => 'view', $municipality['City']['id'])); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'admin_edit', $municipality['Municipality']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">	
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'admin_delete', $municipality['Municipality']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $municipality['Municipality']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			<tbody>
		</table>
	</div>
</div>

<?php echo $this->element('pagination'); ?>