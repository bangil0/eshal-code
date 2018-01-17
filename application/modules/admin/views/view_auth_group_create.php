<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>User</li>
				<li>Create</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<h1><?php echo lang('create_group_heading');?></h1>
			</div>
			<div class="page-content">							
				<p><?php echo lang('create_group_subheading');?></p>
				
				<div id="infoMessage"><?php echo $message;?></div>
				
				<?php echo form_open("admin/auth/create_group");?>
					<p>							
						<?php echo lang('create_group_name_label', 'group_name');?> <br />							
						<?php echo form_input($group_name);?>					  
					</p>
					<p>							
						<?php echo lang('create_group_desc_label', 'description');?> <br />							
						<?php echo form_input($description);?>					 
					</p>				  
					<p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>
				<?php echo form_close();?>			
			</div>
		</div>
	</div>
	
</div>