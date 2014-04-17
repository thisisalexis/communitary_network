<h2><?php echo __('Universidades'); ?></h2>

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
			<button type="submit" class="btn btn-primary">B&uacute;scar</button>
		</form>
	</div>

</div>


<div class="panel panel-default">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
					<th><?php echo 'Estado'; ?></th>
					<th><?php echo 'Ciudad'; ?></th>
					<th><?php echo $this->Paginator->sort('municipality_id', 'Municipio'); ?></th>
					<th style="width: 4%;">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($universities as $university): ?>
				<tr>
					<td><?php echo $this->Html->link(h($university['University']['name']), array('action' => 'view', $university['University']['id'])); ?>&nbsp;</td>
					<td>
						<?php echo h($university['Municipality']['City']['State']['name']); ?>
					</td>
					<td>
						<?php echo h($university['Municipality']['City']['name']); ?>
					</td>
					<td>
						<?php echo h($university['Municipality']['name']); ?>
					</td>
					<td class="text-center">
						<?php echo AuthComponent::user('id') == null  ? '' : $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $university['University']['id']), array('escape' => false, 'class' => 'btn btn-success btn-xs', 'alt' => __('Editar'), 'tittle' => __('Editar') )); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php echo $this->element('pagination'); ?>