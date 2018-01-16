<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>User</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<h1>User Management</h1>
			</div>
			<div class="page-content">				
				<div id="infoMessage"><?php echo $message;?></div>
				<?php echo form_open(uri_string());?>
					<table class="table table-borderless">
						<tr>
							<td><?php echo lang('edit_user_fname_label', 'first_name');?></td>
							<td><?php echo form_input($first_name);?></td>
						</td>
						<tr>
							<td><?php echo lang('edit_user_lname_label', 'last_name');?> </td>
							<td><?php echo form_input($last_name);?></td>
						</td>
						<tr>
							<td><?php echo lang('edit_user_company_label', 'company');?></td>
							<td><?php echo form_input($company);?></td>
						</td>
						<tr>
							<td><?php echo lang('edit_user_phone_label', 'phone');?></td>
							<td><?php echo form_input($phone);?></td>
						</td>
						<tr>
							<td><?php echo lang('edit_user_password_label', 'password');?> </td>
							<td><?php echo form_input($password);?></td>
						</td>
						<tr>
							<td><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></td>
							<td><?php echo form_input($password_confirm);?></td>
						</tr>
						
						<?php if ($this->ion_auth->is_admin()): ?>
						<tr>	
							<?php echo "<td><label>".lang('edit_user_groups_heading')."</label></td>";?>	
							<td>
								<?php foreach ($groups as $group):?>									  
									<?php										  
										$gID			=$group['id'];										  
										$checked 	= null;										  
										$item 		= null;										  
										foreach($currentGroups as $grp) {											  
											if ($gID == $grp->id) {												  
												$checked= ' checked="checked"';											  
												break;											  
											}										  
										}									  
									?>									  
									<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>									  
									<?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>	
								<?php endforeach?>	
							</td>
							<?php endif ?>
						</tr>
						<tr>
							<td><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></td>
							<td>
								<?php echo form_hidden('id', $user->id);?>
								<?php echo form_hidden($csrf); ?>
							</td>
						</td>
					</table>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	
</div>