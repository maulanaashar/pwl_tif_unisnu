  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard text-green"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="<?php echo base_url('update') ?>"><i class="fa fa-database text-yellow"></i> <span>Up date</span></a></li>
        <li class="active"><a href="#modal-profile" data-toggle='modal'><i class="fa fa-user-secret text-blue"></i> <span>Profile</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- modal profile -->
<div class="modal modal-default fade" id="modal-profile">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-user"></i> Profile </h4>
      </div>
      <div class="modal-body">
        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/dist/img/user2-160x160.jpg');?>" alt="User profile picture">
        <h3 class="profile-username text-center"></h3>
        <form action="<?= base_url('register/editprofile') ;?>" method="post" autocomplete="off">

          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" id="name" value="Ashar" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
