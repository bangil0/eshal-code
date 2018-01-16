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
				<h1><?php echo lang('deactivate_heading');?></h1>
			</div>
			<div class="page-content">							
				<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

				<?php echo form_open("admin/auth/deactivate/".$user->id);?>
					<p>
						<input type="radio" name="confirm" value="yes" checked="checked" />					
						<?php echo lang('deactivate_confirm_y_label', 'confirm');?>			
						&nbsp;
						<input type="radio" name="confirm" value="no" />					
						<?php echo lang('deactivate_confirm_n_label', 'confirm');?>				  
					</p>				  
					<?php echo form_hidden($csrf); ?>				  
					<?php echo form_hidden(array('id'=>$user->id)); ?>				  
					<p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>				
				<?php echo form_close();?>			
			</div>
		</div>
	</div>
	
</div>