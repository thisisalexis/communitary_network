<div class="universities index">
	<h2><?php echo __('Universities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('municipality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('documents_module'); ?></th>
			<th><?php echo $this->Paginator->sort('calendar_module'); ?></th>
			<th><?php echo $this->Paginator->sort('indicators_module'); ?></th>
			<th><?php echo $this->Paginator->sort('projects_module'); ?></th>
			<th><?php echo $this->Paginator->sort('experiences_module'); ?></th>
			<th><?php echo $this->Paginator->sort('suggest_module'); ?></th>
			<th><?php echo $this->Paginator->sort('forum_module'); ?></th>
			<th><?php echo $this->Paginator->sort('team_modulo'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($universities as $university): ?>
	<tr>
		<td><?php echo h($university['University']['id']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['name']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['description']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['location']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($university['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $university['Municipality']['id'])); ?>
		</td>
		<td><?php echo h($university['University']['phone']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['fax']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($university['ParentUniversity']['name'], array('controller' => 'universities', 'action' => 'view', $university['ParentUniversity']['id'])); ?>
		</td>
		<td><?php echo h($university['University']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['documents_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['calendar_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['indicators_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['projects_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['experiences_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['suggest_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['forum_module']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['team_modulo']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['modified']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $university['University']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $university['University']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $university['University']['id']), null, __('Are you sure you want to delete # %s?', $university['University']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New University'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
	</ul>
</div>
