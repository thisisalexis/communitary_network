<h2><?php echo __('Estados'); ?></h2>


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
					<th><?php echo $this->Paginator->sort('country_id', 'País'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($states as $state): ?>
				<tr>
					<td><?php echo h($state['State']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($state['State']['name']), array('action' => 'view', $state['State']['id'])); ?> &nbsp;</td>
					<td>
						<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'], 'admin' => true )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'admin_edit', $state['State']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'admin_delete', $state['State']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $state['State']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<?php echo $this->element('pagination'); ?>

