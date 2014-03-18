<h2><?php echo __('Universidades'); ?></h2>

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
					<th><?php echo $this->Paginator->sort('municipality_id', 'Municipio'); ?></th>
					<th style="width: 4%;"><?php echo $this->Paginator->sort('parent_id', 'Núcleo'); ?></th>
					<th style="width: 4%;"><?php echo $this->Paginator->sort('is_active', 'Activa'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($universities as $university): ?>
				<tr>
					<td><?php echo h($university['University']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($university['University']['name']), array('action' => 'view', $university['University']['id'], 'admin' => true)); ?>&nbsp;</td>
					<td>
						<?php echo h($university['Municipality']['name']); ?>
					</td>
					<td class="text-center">
						<?php echo $university['University']['parent_id'] != null ? '<span class="glyphicon glyphicon-ok-circle"></span>' : null ; ?>

					</td>
					<td class="text-center">
						<?php echo $university['University']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $university['University']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $university['University']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $university['University']['id'])); ?>

					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php echo $this->element('pagination'); ?>