<h2><?php echo h($university['University']['name']); ?></h2>

<?php echo $this->element('navtab-university'); ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de universidades', array('action' => 'index'),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		
		<?php echo AuthComponent::user('id') == null  ? '' : $this->Html->link('Modificar', array('action' => 'edit', $university['University']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
		
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th class="col-sm-2"><?php echo __('Nombre'); ?></th>
					<td><?php echo h($university['University']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($university['University']['description']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Direci&oacute;n', false); ?></th>
					<td><?php echo h($university['University']['location']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Estado'); ?></th>
					<td><?php echo $university['Municipality']['City']['State']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Ciudad'); ?></th>
					<td><?php echo $university['Municipality']['City']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Municipio'); ?></th>
					<td><?php echo $university['Municipality']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Tel&eacute;fono', false); ?></th>
					<td><?php echo h($university['University']['phone']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Fax'); ?></th>
					<td><?php echo h($university['University']['fax']); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Correo Electr&oacute;nico'); ?></th>
					<td><?php echo h($university['University']['email']); ?>&nbsp;</td>
				</tr>
				<?php if($university['University']['parent_id'] != null ) { ?>
				<tr>
					<th><?php echo __('Sede'); ?></th>
					<td><?php echo $this->Html->link($university['ParentUniversity']['name'], array('controller' => 'universities', 'action' => 'view', $university['ParentUniversity']['id'])); ?>&nbsp;</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<?php if (!empty($university['ChildUniversity'])): ?>
	
<div class="panel panel-default">

	<div class="panel-heading">
		<strong>N&uacute;cleos</strong>
	</div>

	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width: 4%;"><?php echo __('ID'); ?></th>
					<th><?php echo __('Nombre'); ?></th>
					<th style="width: 4%;"><?php echo __('Activo'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
		<?php foreach ($university['ChildUniversity'] as $childUniversity): ?>
				<tr>
					<td><?php echo $childUniversity['id']; ?>&nbsp;</td>
					<td><?php echo $this->Html->link($childUniversity['name'], array('controller' => 'universities', 'action' => 'view', $childUniversity['id'])); ?>&nbsp;</td>
					<td><?php echo $childUniversity['is_active']; ?>&nbsp;</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $childUniversity['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
				</tr>
		<?php endforeach; ?>
			<tbody>
		</table>
	</div>
</div>


<?php endif; ?>