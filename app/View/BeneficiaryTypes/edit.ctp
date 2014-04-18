<div class="beneficiaryTypes form">
<?php echo $this->Form->create('BeneficiaryType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Beneficiary Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BeneficiaryType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BeneficiaryType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Beneficiary Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
