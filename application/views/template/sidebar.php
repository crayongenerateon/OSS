<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/media/dist/img/cg.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rumag Cipta Generasi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if($this->session->userdata('role_itservice')==1 || $this->session->userdata('role_iventoryit')==1 ){ ?>
        <li class="treeview 
          <?php echo ($this->uri->segment(1) == 'itservice' || 
                      $this->uri->segment(1) == 'iventory' )  ? 'active' : NULL; ?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>IT </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <?php if($this->session->userdata('role_itservice')==1 ){ ?>
            <li class="<?php echo ($this->uri->segment(1) == 'itservice') &&  ($this->uri->segment(2) == 'add') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('itservice/add'); ?>"><i class="fa fa-circle-o"></i> Buat Tiket</a>
            </li>
            <li class="<?php echo ($this->uri->segment(1) == 'itservice') &&  ($this->uri->segment(2) == '') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('itservice'); ?>"><i class="fa fa-circle-o"></i> Issue List</a>
            </li>
            <?php } ?>

            <?php if($this->session->userdata('role_iventoryit')==1 ){ ?>
            <li class="<?php echo ($this->uri->segment(2) == 'iventoryit') &&  ($this->uri->segment(3) == '') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('iventory/iventoryit'); ?>"><i class="fa fa-circle-o"></i> Inventory IT</a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'iventoryit') &&  ($this->uri->segment(3) == 'add') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('iventory/iventoryit/add'); ?>"><i class="fa fa-circle-o"></i> Add Inventory IT</a>
            </li>
             <?php } ?>

          </ul>
        </li>
        
        <?php } ?>
        
        <?php if($this->session->userdata('role_employe')==1 ){ ?>
        <li class="treeview 
          <?php echo ($this->uri->segment(1) == 'employe' )  ? 'active' : NULL; ?>" >
          <a href="#">
            <i class="fa fa-edit"></i> <span>Employee </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(1) == 'employe') &&  ($this->uri->segment(2) == '') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('employe'); ?>"><i class="fa fa-circle-o"></i> Employee List</a>
            </li>
            <li class="<?php echo ($this->uri->segment(1) == 'employe') &&  ($this->uri->segment(2) == 'add') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('employe/add'); ?>"><i class="fa fa-circle-o"></i> Add Employee</a>
            </li>
          </ul>
        </li>
        <?php } ?>

        <?php if($this->session->userdata('role_master')==1){ ?>
        <li class="treeview 
          <?php echo ($this->uri->segment(2) == 'departement' || 
                      $this->uri->segment(2) == 'pendidikan' ||
                      $this->uri->segment(2) == 'kelamin' || 
                      $this->uri->segment(2) == 'kawin' ||
                      $this->uri->segment(2) == 'jabatan' ||
                      $this->uri->segment(2) == 'division' ||
                      $this->uri->segment(2) == 'status' ||
                      $this->uri->segment(2) == 'religion' )  ? 'active' : NULL; ?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(2) == 'division') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/division'); ?>">
                <i class="fa fa-circle-o"></i> Division
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'departement') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/departement'); ?>">
                <i class="fa fa-circle-o"></i> Departement
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'religion') ? 'active' : NULL; ?>" >
              <a href="<?php echo site_url('master/religion'); ?>">
                <i class="fa fa-circle-o"></i> Agama
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'pendidikan') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/pendidikan'); ?>">
                <i class="fa fa-circle-o"></i> Pendidikan
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'kelamin') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/kelamin'); ?>">
                <i class="fa fa-circle-o"></i> Jenis Kelamin
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'kawin') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/kawin'); ?>">
                <i class="fa fa-circle-o"></i> Status Perniakahan
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'jabatan') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/jabatan'); ?>">
                <i class="fa fa-circle-o"></i> Jabatan
              </a>
            </li>
            <li class="<?php echo ($this->uri->segment(2) == 'status') ? 'active' : NULL; ?>">
              <a href="<?php echo site_url('master/status'); ?>">
                <i class="fa fa-circle-o"></i> Status
              </a>
            </li>
          </ul>
        </li>
        <?php } ?>

        
        <?php if($this->session->userdata('role_useradmin')==1 ){ ?>
        <li>
          <a href="<?php echo site_url('user/user_admin'); ?>">
            <i class="fa fa-users"></i> <span>User Management</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <?php } ?>
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
        
        <li class="header">LABELS</li>
        <?php if($this->session->userdata('role_itservice')==1){ ?>
          <li><a href="<?php echo site_url('activity_log/activity_log_admin'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Log Aktifitas</span></a></li>
        <?php } ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
