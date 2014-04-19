<h2><?php echo h($beneficiary['Beneficiary']['name']); ?></h2>

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Volver a listado de beneficiarios', array('action' => 'index', 'admin' => true),  array('class' => 'btn btn-success btn-xs', 'escape' => false )); ?> 
		<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $beneficiary['Beneficiary']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $beneficiary['Beneficiary']['id'], 'admin' => true), array('class' => 'btn btn-primary btn-xs'), __('¿Realmente deseas eliminar el registro # %s?', $beneficiary['Beneficiary']['id'])); ?> 
	</div>

	<div class="table-responsive">
		<table class="table">
			<tbody>
				<tr>
					<th class="col-md-2"><?php echo __('ID'); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['id']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Descripci&oacute;n', false); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['description']); ?> &nbsp;</td>
				</tr>			
				<tr>
					<th><?php echo __('Direcci&oacute;n'); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['location']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Estado'); ?></th>
					<td><?php echo $beneficiary['Municipality']['City']['State']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Ciudad'); ?></th>
					<td><?php echo $beneficiary['Municipality']['City']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Municipio'); ?></th>
					<td><?php echo $beneficiary['Municipality']['name']; ?>&nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Tel&eacute;fono', false); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['phone']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Correo Electr&oacute;nico', false); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['email']); ?> &nbsp;</td>
				</tr>				
				<tr>
					<th><?php echo __('Tipo', false); ?></th>
					<td><?php echo h($beneficiary['BeneficiaryType']['name']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Creado Por', false); ?></th>
					<td><?php echo h($beneficiary['User']['username']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Fecha de creaci&oacute;n', false); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['created']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('&Uacute;ltima modificaci&oacute;n', false); ?></th>
					<td><?php echo h($beneficiary['Beneficiary']['modified']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Responsable', false); ?></th>
					<td><?php echo h($beneficiary['Person']['name']) . ' ' . h($beneficiary['Person']['lastname']); ?> &nbsp;</td>
				</tr>
				<tr>
					<th><?php echo __('Activo'); ?></th>
					<td><?php echo $beneficiary['Beneficiary']['is_active'] ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-remove"></span>' ; ?>&nbsp;</td>
				</tr>									
			</tbody>
		</table>
	</div>
</div>