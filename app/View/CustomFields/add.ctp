<div class="customFields form">
<?php echo $this->Form->create('CustomField'); ?>
	<fieldset>
		<legend><?php echo __('Add Custom Field'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('required');
		echo $this->Form->input('tooltip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Custom Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
