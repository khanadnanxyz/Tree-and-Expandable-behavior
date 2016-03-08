<div class="uploadfields form">
<?php echo $this->Form->create('Uploadfield'); ?>
	<fieldset>
		<legend><?php echo __('Add Uploadfield'); ?></legend>
	<?php
		echo $this->Form->input('upload_id');
		echo $this->Form->input('datakey');
		echo $this->Form->input('dataval');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Uploadfields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
