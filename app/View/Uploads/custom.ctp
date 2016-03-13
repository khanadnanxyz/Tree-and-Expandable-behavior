<?php              
        echo $this->Form->input('Upload.extra'); ?>
        

 <?php foreach ($custome_field as $custome_fields): ?>
	<tr>
		<td><?php echo h($custome_field['custom_fields']['id']); ?>&nbsp;</td>
		<td><?php echo h($custome_field['custom_fields']['name']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
        
