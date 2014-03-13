<div class="users index">
	<h2><?php echo __('Usuarios'); ?></h2>

	<div class="panel panel-default">
		<div class="panel-heading">
			<?php echo $this->Html->link(__('Agregar Usuario'), array('action' => 'add'), array('class' => 'btn btn-primary btn-xs')); ?>
		</div>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 4%;"><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('username', 'Nombre de usuario'); ?></th>
						<th style="width: 4%;"><?php echo $this->Paginator->sort('is_admin', 'Administrador'); ?></th>
						<th style="width: 4%;"><?php echo $this->Paginator->sort('is_active', 'Activo'); ?></th>
						<th class="col-md-1"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link(h($user['User']['username']), array('action' => 'view', $user['User']['id'])); ?>&nbsp;</td>
						<td class="text-center">
							<?php echo $user['User']['is_admin'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;
						</td>
						<td class="text-center">
							<?php echo $user['User']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;
						</td>
						<td class="actions text-center">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $user['User']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php echo $this->element('pagination'); ?>

</div>
