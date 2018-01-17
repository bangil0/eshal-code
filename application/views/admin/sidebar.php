		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				
				<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo base_url();?>admin">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>
					<?php
                        $menu = $this->db->get_where('menu', array('is_parent' => 0,'is_active'=>1));
                        foreach ($menu->result() as $m) {
                            // chek ada sub menu
                            $submenu = $this->db->get_where('menu',array('is_parent'=>$m->id,'is_active'=>1));
                            if($submenu->num_rows()>0){
                                // tampilkan submenu
                                echo "
								<li>
									<a href='#' class='dropdown-toggle'>
										<i class='menu-icon $m->icon'></i>
											<span class='menu-text'> ".ucfirst($m->name)."</span>
											<b class='arrow fa fa-angle-down'></b>
										</a>
										<b class='arrow'></b>
                                        <ul class='submenu'>";
                                foreach ($submenu->result() as $s){
                                     echo "<li class=''>" . anchor($s->link, "<i class='menu-icon fa fa-caret-right'></i>" . ucfirst($s->name)) . "<b class='arrow'></b></li>";
                                }
                                   echo"</ul>
                                    </li>";
                            }else{
                                echo "<li>" . anchor($m->link, "<i class='menu-icon $m->icon'></i> " . ucfirst($m->name)) . "</a></li>";
                            }                            
                        }                   
					?>
					<li class=""><a></a>
					</li>
				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>