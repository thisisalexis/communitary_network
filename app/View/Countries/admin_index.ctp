<h2><?php echo __('Pa&iacute;ses', false); ?></h2>

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
					<th style="width: 4%;">&nbsp;</th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($countries as $country): ?>
				<tr>
					<td class="text-center"><?php echo h($country['Country']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link( h($country['Country']['name']) , array('action' => 'view', $country['Country']['id'])); ?> &nbsp;</td>
					<td class="text-center"><?php echo h($country['Country']['code']); ?>&nbsp;</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'admin_edit', $country['Country']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'admin_delete', $country['Country']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $country['Country']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			<tbody>
		</table>
	</div>
</div>



<?php echo $this->element('pagination'); ?>
