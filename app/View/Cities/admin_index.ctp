<h2><?php echo __('Ciudades'); ?></h2>

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
					<th style="width: 4%;"><?php echo $this->Paginator->sort('code', 'Código'); ?></th>
					<th><?php echo $this->Paginator->sort('state_id', 'Estado'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($cities as $city): ?>
				<tr>
					<td><?php echo h($city['City']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($city['City']['name']), array('action' => 'view', $city['City']['id'])); ?>&nbsp;</td>
					<td><?php echo h($city['City']['code']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($city['State']['name'], array('controller' => 'states', 'action' => 'view', $city['State']['id'], 'admin' => true )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'admin_edit', $city['City']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'admin_delete', $city['City']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $city['City']['id'])); ?>
					</td>
				</tr>
			</tbody>
		<?php endforeach; ?>
		</table>
	</div>
</div>

<?php echo $this->element('pagination'); ?>