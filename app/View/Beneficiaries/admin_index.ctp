<h2><?php echo __('Beneficiarios'); ?></h2>

<div class="panel panel-default">

	<div class="panel-heading">
		<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="sname">Nombre</label>
				<input type="text" class="form-control" id="sname" placeholder="Buscar por Nombre">
			</div>
			<div class="form-group">
				<label class="sr-only" for="state">Estado</label>
				<select class="form-control" id="state">
				<option>Estado</option>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="scity">Ciudad</label>
				<select class="form-control" id="scity">
					<option>Ciudad</option>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="smunicipality">Municipio</label>
				<select class="form-control" id="smunicipality">
					<option>Municipio</option>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="stype">Tipo</label>
				<select class="form-control" id="smunicipality">
					<option>Tipo</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">B&uacute;scar</button>
		</form>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link(__('Agregar'), array('action' => 'admin_add', 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?>
	</div>

	<div class="table-responsive">
		<table class="table table-striped">
			<thead>	
				<tr>
					<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
					<th><?php echo $this->Paginator->sort('name', __('Nombre')); ?></th>
					<th><?php echo __('Estado'); ?></th>
					<th><?php echo __('Ciudad'); ?></th>
					<th><?php echo $this->Paginator->sort('municipality_id', __('Municipio')); ?></th>
					<th><?php echo $this->Paginator->sort('beneficiary_type_id', __('Tipo')); ?></th>
					<th><?php echo $this->Paginator->sort('is_active', __('Estatus')); ?></th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($beneficiaries as $beneficiary): ?>
				<tr>
					<td><?php echo h($beneficiary['Beneficiary']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($beneficiary['Beneficiary']['name']), array('action' => 'view', $beneficiary['Beneficiary']['id'])); ?>&nbsp;</td>
					<td>
						<?php echo $beneficiary['Municipality']['City']['State']['name']; ?>
					</td>
					<td>
						<?php echo $beneficiary['Municipality']['City']['name']; ?>
					</td>
					<td>
						<?php echo $beneficiary['Municipality']['name']; ?>
					</td>
					<td>
						<?php echo $beneficiary['BeneficiaryType']['name']; ?>
					</td>
					<td class="text-center">
						<?php echo $beneficiary['Beneficiary']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $beneficiary['Beneficiary']['id'], 'admin' => true), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
					<td class="text-center">
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $beneficiary['Beneficiary']['id'], 'admin' => true), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'alt' => __('Eliminar'), 'tittle' => __('Eliminar')), __('¿Realmente desea eliminar el registro # %s?', $beneficiary['Beneficiary']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			<tbody>
		</table>
	</div>
</div>


<?php echo $this->element('pagination'); ?>