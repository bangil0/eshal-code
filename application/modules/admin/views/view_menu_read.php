<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>Menu</li>
				<li>Detail Menu</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<h1>Detail Menu</h1>
			</div>
			<div class="page-content">
				<table class="table">
					<tr><td>Name</td><td><?php echo $name; ?></td></tr>
					<tr><td>Link</td><td><?php echo $link; ?></td></tr>
					<tr><td>Icon</td><td><?php echo $icon; ?></td></tr>
					<tr><td>Is Active</td><td><?php echo $is_active; ?></td></tr>
					<tr><td>Is Parent</td><td><?php echo $is_parent; ?></td></tr>
					<tr><td><a href="<?php echo site_url('admin/menu') ?>" class="btn btn-default">Cancel</a></td><td></td></tr>
				</table>		
			</div>
		</div>
	</div>
	
</div>