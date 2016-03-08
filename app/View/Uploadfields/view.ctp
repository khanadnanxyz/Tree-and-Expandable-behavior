<div class="uploadfields view">
<h2><?php echo __('Uploadfield'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadfield['Uploadfield']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uploadfield['Upload']['name'], array('controller' => 'uploads', 'action' => 'view', $uploadfield['Upload']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datakey'); ?></dt>
		<dd>
			<?php echo h($uploadfield['Uploadfield']['datakey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataval'); ?></dt>
		<dd>
			<?php echo h($uploadfield['Uploadfield']['dataval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uploadfield['Uploadfield']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uploadfield['Uploadfield']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uploadfield'), array('action' => 'edit', $uploadfield['Uploadfield']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uploadfield'), array('action' => 'delete', $uploadfield['Uploadfield']['id']), array(), __('Are you sure you want to delete # %s?', $uploadfield['Uploadfield']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadfields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadfield'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
