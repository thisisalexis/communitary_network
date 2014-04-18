<div class="beneficiaryTypes index">
	<h2><?php echo __('Beneficiary Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($beneficiaryTypes as $beneficiaryType): ?>
	<tr>
		<td><?php echo h($beneficiaryType['BeneficiaryType']['id']); ?>&nbsp;</td>
		<td><?php echo h($beneficiaryType['BeneficiaryType']['name']); ?>&nbsp;</td>
		<td><?php echo h($beneficiaryType['BeneficiaryType']['description']); ?>&nbsp;</td>
		<td><?php echo h($beneficiaryType['BeneficiaryType']['created']); ?>&nbsp;</td>
		<td><?php echo h($beneficiaryType['BeneficiaryType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $beneficiaryType['BeneficiaryType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $beneficiaryType['BeneficiaryType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $beneficiaryType['BeneficiaryType']['id']), null, __('Are you sure you want to delete # %s?', $beneficiaryType['BeneficiaryType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Beneficiary Type'), array('action' => 'add')); ?></li>
	</ul>
</div>
