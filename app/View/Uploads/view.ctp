<div class="uploads view">
<h2><?php echo __('Upload'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bytes'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['bytes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload'), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload'), array('action' => 'delete', $upload['Upload']['id']), array(), __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadfields'), array('controller' => 'uploadfields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadfield'), array('controller' => 'uploadfields', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Uploadfields'); ?></h3>
	<?php if (!empty($upload['Uploadfield'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Upload Id'); ?></th>
		<th><?php echo __('Datakey'); ?></th>
		<th><?php echo __('Dataval'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($upload['Uploadfield'] as $uploadfield): ?>
		<tr>
			<td><?php echo $uploadfield['id']; ?></td>
			<td><?php echo $uploadfield['upload_id']; ?></td>
			<td><?php echo $uploadfield['datakey']; ?></td>
			<td><?php echo $uploadfield['dataval']; ?></td>
			<td><?php echo $uploadfield['created']; ?></td>
			<td><?php echo $uploadfield['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uploadfields', 'action' => 'view', $uploadfield['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uploadfields', 'action' => 'edit', $uploadfield['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uploadfields', 'action' => 'delete', $uploadfield['id']), array(), __('Are you sure you want to delete # %s?', $uploadfield['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Uploadfield'), array('controller' => 'uploadfields', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
