<div class="beneficiaries view">
<h2><?php echo __('Beneficiary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $beneficiary['Municipality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiary Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['BeneficiaryType']['name'], array('controller' => 'beneficiary_types', 'action' => 'view', $beneficiary['BeneficiaryType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['User']['username'], array('controller' => 'users', 'action' => 'view', $beneficiary['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['Person']['name'], array('controller' => 'people', 'action' => 'view', $beneficiary['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beneficiary'), array('action' => 'edit', $beneficiary['Beneficiary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beneficiary'), array('action' => 'delete', $beneficiary['Beneficiary']['id']), null, __('Are you sure you want to delete # %s?', $beneficiary['Beneficiary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('action' => 'add')); ?> </li>
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
