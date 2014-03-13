<div class="paging">
	<p class="text-muted">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('P&aacute;gina {:page} de {:pages}, mostrando {:current} registros de un total de {:count}, desde el registro {:start}, hasta el {:end}')
	));
	?>
	</p>
	
	<ul class="pagination">
		<li><?php echo $this->Paginator->prev(__('Anterior'), array(), null, array('class' => 'prev disabled')); ?></li>
		<?php echo $this->Paginator->numbers(array('separator' => '', 'before' => '<li>', 'after' => '</li>' )); ?>
		<li><?php echo $this->Paginator->next(__('Siguiente'), array(), null, array('class' => 'next disabled')); ?></li>
	</ul>
</div>