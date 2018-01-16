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
				<table class="table table-bordered table-striped" id="mytable">
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr>
							<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("admin/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("admin/auth/deactivate/".$user->id, lang('index_active_link')) : anchor("admin/auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("admin/auth/edit_user/".$user->id, 'Edit') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>

				<p><?php echo anchor('admin/auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('admin/auth/create_group', lang('index_create_group_link'))?></p>			
			</div>
		</div>
	</div>
	
</div>