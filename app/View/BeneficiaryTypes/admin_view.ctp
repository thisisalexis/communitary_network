<div class="beneficiaryTypes view">
<h2><?php echo __('Beneficiary Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beneficiary Type'), array('action' => 'edit', $beneficiaryType['BeneficiaryType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beneficiary Type'), array('action' => 'delete', $beneficiaryType['BeneficiaryType']['id']), null, __('Are you sure you want to delete # %s?', $beneficiaryType['BeneficiaryType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiary Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
