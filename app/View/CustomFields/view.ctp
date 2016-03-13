<div class="customFields view">
<h2><?php echo __('Custom Field'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customField['Category']['name'], array('controller' => 'categories', 'action' => 'view', $customField['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tooltip'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['tooltip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customField['CustomField']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Custom Field'), array('action' => 'edit', $customField['CustomField']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Custom Field'), array('action' => 'delete', $customField['CustomField']['id']), array(), __('Are you sure you want to delete # %s?', $customField['CustomField']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Custom Fields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Custom Field'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
