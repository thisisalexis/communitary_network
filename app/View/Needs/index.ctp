<h2><?php echo __('Necesidades'); ?></h2>


<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link(__('Agregar'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?>
	</div>

	<div class="table-responsive">
		<table class="table table-striped">
		<thead>
			<tr>
				<th style="width: 4%;"><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
				<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
				<th style="width: 4%;"></th>
				<th style="width: 4%;"></th>
			</tr>
		<thead>
		<tbody>
			<?php foreach ($needs as $need): ?>
			<tr>
				<td class="text-center"><?php echo h($need['Need']['id']); ?>&nbsp;</td>
				<td><?php echo $this->Html->link(h($need['Need']['name']), array('action' => 'view', $need['Need']['id'], 'admin' => true)); ?>&nbsp;</td>
				<td class="text-center">
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $need['Need']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
				</td>
				<td class="text-center">
					<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $need['Need']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $need['Need']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
	</div>

</div>

<?php echo $this->element('pagination'); ?>