<div class="universities view">
<h2><?php echo __('University'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($university['University']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($university['University']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($university['University']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($university['University']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($university['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $university['Municipality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($university['University']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($university['University']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($university['University']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent University'); ?></dt>
		<dd>
			<?php echo $this->Html->link($university['ParentUniversity']['name'], array('controller' => 'universities', 'action' => 'view', $university['ParentUniversity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($university['University']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documents Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['documents_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calendar Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['calendar_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicators Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['indicators_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['projects_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experiences Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['experiences_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suggest Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['suggest_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forum Module'); ?></dt>
		<dd>
			<?php echo h($university['University']['forum_module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Modulo'); ?></dt>
		<dd>
			<?php echo h($university['University']['team_modulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($university['University']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($university['University']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit University'), array('action' => 'edit', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete University'), array('action' => 'delete', $university['University']['id']), null, __('Are you sure you want to delete # %s?', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Universities'); ?></h3>
	<?php if (!empty($university['ChildUniversity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Municipality Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Documents Module'); ?></th>
		<th><?php echo __('Calendar Module'); ?></th>
		<th><?php echo __('Indicators Module'); ?></th>
		<th><?php echo __('Projects Module'); ?></th>
		<th><?php echo __('Experiences Module'); ?></th>
		<th><?php echo __('Suggest Module'); ?></th>
		<th><?php echo __('Forum Module'); ?></th>
		<th><?php echo __('Team Modulo'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($university['ChildUniversity'] as $childUniversity): ?>
		<tr>
			<td><?php echo $childUniversity['id']; ?></td>
			<td><?php echo $childUniversity['name']; ?></td>
			<td><?php echo $childUniversity['description']; ?></td>
			<td><?php echo $childUniversity['location']; ?></td>
			<td><?php echo $childUniversity['municipality_id']; ?></td>
			<td><?php echo $childUniversity['phone']; ?></td>
			<td><?php echo $childUniversity['fax']; ?></td>
			<td><?php echo $childUniversity['email']; ?></td>
			<td><?php echo $childUniversity['parent_id']; ?></td>
			<td><?php echo $childUniversity['is_active']; ?></td>
			<td><?php echo $childUniversity['documents_module']; ?></td>
			<td><?php echo $childUniversity['calendar_module']; ?></td>
			<td><?php echo $childUniversity['indicators_module']; ?></td>
			<td><?php echo $childUniversity['projects_module']; ?></td>
			<td><?php echo $childUniversity['experiences_module']; ?></td>
			<td><?php echo $childUniversity['suggest_module']; ?></td>
			<td><?php echo $childUniversity['forum_module']; ?></td>
			<td><?php echo $childUniversity['team_modulo']; ?></td>
			<td><?php echo $childUniversity['modified']; ?></td>
			<td><?php echo $childUniversity['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'universities', 'action' => 'view', $childUniversity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'universities', 'action' => 'edit', $childUniversity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'universities', 'action' => 'delete', $childUniversity['id']), null, __('Are you sure you want to delete # %s?', $childUniversity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
