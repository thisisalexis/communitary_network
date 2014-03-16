<div class="universities form">
<?php echo $this->Form->create('University'); ?>
	<fieldset>
		<legend><?php echo __('Add University'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('municipality_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('is_active');
		echo $this->Form->input('documents_module');
		echo $this->Form->input('calendar_module');
		echo $this->Form->input('indicators_module');
		echo $this->Form->input('projects_module');
		echo $this->Form->input('experiences_module');
		echo $this->Form->input('suggest_module');
		echo $this->Form->input('forum_module');
		echo $this->Form->input('team_modulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Universities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
	</ul>
</div>
