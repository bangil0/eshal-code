<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>Menu</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<div class="row">
					<div class="col-md-9">
						<h1>MENU LIST </h1>
					</div>
					<div class="col-md-3 text-right">
						<?php echo anchor('admin/menu/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
					</div>		
				</div>
			</div>
			<div class="page-content">
				<table class="table table-bordered table-striped" id="mytable">
					<thead>
						<tr>
							<th width="10px">No</th>
							<th>Nama Menu</th>
							<th>Link</th>
							<th width="30">Icon</th>
							<th>Aktif</th>
							<th>Parent</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$start = 0;
							foreach ($menu_data as $menu)
							{
								$active = $menu->is_active==1?'AKTIF':'TIDAK AKTIF';
								$parent = $menu->is_parent>1?'MAINMENU':'SUBMENU'
						?>
						<tr>
							<td><?php echo ++$start ?></td>
							<td><?php echo $menu->name ?></td>
							<td><?php echo $menu->link ?></td>
							<td align="center"><i class='<?php echo $menu->icon ?>'></i></td>
							<td><?php echo $active ?></td>
							<td><?php echo $parent ?></td>
							<td style="text-align:center" width="140px">
								<?php 
									echo anchor(site_url('admin/menu/read/'.$menu->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
									echo '  '; 
									echo anchor(site_url('admin/menu/update/'.$menu->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
									echo '  '; 
									echo anchor(site_url('admin/menu/delete/'.$menu->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
								?>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				<script src="<?php echo base_url('assets/admin/js/jquery-1.11.2.min.js') ?>"></script>
				<script src="<?php echo base_url('assets/admin/datatables/jquery.dataTables.js') ?>"></script>
				<script src="<?php echo base_url('assets/admin/datatables/dataTables.bootstrap.js') ?>"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$("#mytable").dataTable();
					});
				</script>	
			</div>
		</div>
	</div>	
</div>