<div class="uploads form">
<?php echo $this->Form->create('Upload'); ?>
	<fieldset>
		<legend><?php echo __('Add Upload'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('bytes');
        echo $this->Form->input('Upload.fps');
        echo $this->Form->input('Upload.bitrate');
        echo $this->Form->input('Upload.rating', array('options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploadfields'), array('controller' => 'uploadfields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadfield'), array('controller' => 'uploadfields', 'action' => 'add')); ?> </li>
	</ul>
</div>
