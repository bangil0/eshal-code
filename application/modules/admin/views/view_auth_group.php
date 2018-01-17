<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>Group</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<div class="row">
					<div class="col-md-9">
						<h1>Group Management</h1>
					</div>
					<div class="col-md-3 text-right">
						<?php echo anchor('admin/auth/create_group','Create',array('class'=>'btn btn-danger btn-sm'));?>
					</div>		
				</div>				
			</div>
			<div class="page-content">	
				<table class="table table-bordered table-striped" id="mytable">
					<tr>
						<th>Nama</th>
						<th>Deskripsi</th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($groups as $group):?>
						<tr>
							<td><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
							<td style="text-align:center" width="140px">
								<?php 
									echo anchor(site_url('admin/auth/edit_group/'.$group->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
									echo '  '; 
									echo anchor(site_url('admin/auth/delete_group/'.$group->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
								?>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
			</div>
		</div>
	</div>
	
</div>