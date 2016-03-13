<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">

   var get_form_fields = function($id) { 
       
       var baseUrl = '<?php echo $this->Html->url("/uploads/get_fields/") ?>';
       var targetUrl = baseUrl + $id;
       console.log(targetUrl);
       $('#custom').load(targetUrl);
   };
   
   $(function(){ 
       get_form_fields($('#UploadCategoryId').val());
   });  
   
 </script>
 <div id='call'></div>
 
 
<div class="uploads form">
<?php echo $this->Form->create('Upload'); ?>
	<fieldset>
		<legend><?php echo __('Add Upload'); ?></legend>
	<?php           
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('category_id',array('onchange'=>'get_form_fields(this.value);'));      
	?>
    <div id='custom'>
        </div>
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
