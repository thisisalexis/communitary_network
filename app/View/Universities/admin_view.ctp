<h2><?php echo h($university['University']['name']); ?></h2>


<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de universidades', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $university['University']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $university['University']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $university['University']['id'])); ?> 
	</div>
	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
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
				<tr>
					<th><?php echo __('Activa'); ?></th>
					<td><?php echo $university['University']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de documentos', false); ?></th>
					<td><?php echo $university['University']['documents_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Cronograma', false); ?></th>
					<td><?php echo $university['University']['calendar_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Censo', false); ?></th>
					<td><?php echo $university['University']['indicators_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Proyectos', false); ?></th>
					<td><?php echo $university['University']['projects_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Experiencias', false); ?></th>
					<td><?php echo $university['University']['experiences_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Sugerencias', false); ?></th>
					<td><?php echo $university['University']['suggest_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Mensajes (Foro)', false); ?></th>
					<td><?php echo $university['University']['forum_module'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('M&oacute;dulo de Equipo', false); ?></th>
					<td><?php echo $university['University']['team_modulo'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Creado'); ?></th>
					<td><?php echo $this->Time->format($university['University']['created'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Modificado'); ?></th>
					<td><?php echo $this->Time->format($university['University']['modified'], '%d/%m/%Y - %H:%M %p', 'invalid'); ?>&nbsp;</td>
				</tr>
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