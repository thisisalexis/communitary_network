<div class="beneficiaries index">
	<h2><?php echo __('Beneficiaries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('municipality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('beneficiary_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($beneficiaries as $beneficiary): ?>
	<tr>
		<td><?php echo h($beneficiary['Beneficiary']['id']); ?>&nbsp;</td>
		<td><?php echo h($beneficiary['Beneficiary']['name']); ?>&nbsp;</td>
		<td><?php echo h($beneficiary['Beneficiary']['description']); ?>&nbsp;</td>
		<td><?php echo h($beneficiary['Beneficiary']['location']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($beneficiary['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $beneficiary['Municipality']['id'])); ?>
		</td>
		<td><?php echo h($beneficiary['Beneficiary']['phone']); ?>&nbsp;</td>
		<td><?php echo h($beneficiary['Beneficiary']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($beneficiary['BeneficiaryType']['name'], array('controller' => 'beneficiary_types', 'action' => 'view', $beneficiary['BeneficiaryType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($beneficiary['User']['username'], array('controller' => 'users', 'action' => 'view', $beneficiary['User']['id'])); ?>
		</td>
		<td><?php echo h($beneficiary['Beneficiary']['created']); ?>&nbsp;</td>
		<td><?php echo h($beneficiary['Beneficiary']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($beneficiary['Person']['name'], array('controller' => 'people', 'action' => 'view', $beneficiary['Person']['id'])); ?>
		</td>
		<td><?php echo h($beneficiary['Beneficiary']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $beneficiary['Beneficiary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $beneficiary['Beneficiary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $beneficiary['Beneficiary']['id']), null, __('Are you sure you want to delete # %s?', $beneficiary['Beneficiary']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiary Types'), array('controller' => 'beneficiary_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary Type'), array('controller' => 'beneficiary_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
