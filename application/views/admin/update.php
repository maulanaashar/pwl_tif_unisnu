<div class="content-wrapper">
    <?php if($this->session->flashdata('info')) {?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                    Tambah Data Berhasil
                    <?php echo $this->session->flashdata('info');?>
                </div>
                <?php } ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Up date
        <small>Covid-19</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> update </a></li>
        <li class="active">Update</li>
      </ol>
    </section>
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php foreach ($totalpositif as $pst){ ?>
              <h3><?php echo $pst->totalpositif ?></h3>
              <?php } ?>
              <p>Total Positif</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <a href="#" class="small-box-footer ">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-5">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php foreach ($totalsembuh as $smbh){ ?>
              <h3><?php echo $smbh->totalsembuh ?></h3>
              <?php } ?>

              <p>Total Sembuh</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus-circle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php foreach ($totalmeninggal as $mati){ ?>
              <h3><?php echo $mati->totalmeninggal ?></h3>
              <?php } ?>

              <p>Total Meninggal</p>
            </div>
            <div class="icon">
              <i class="fa fa-odnoklassniki"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"> Tambah Kasus</i></i></button>
          <br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success box-solid">
            <div class="box-header width-border">
              <h3 class="box-title">
                Data Perprovinsi
              </h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center" class="text-center" class="text-center" class="text-center" class="text-center">Nama Provinsi</th>
                    <th class="text-center" class="text-center" class="text-center" class="text-center">Positif</th>
                    <th class="text-center" class="text-center" class="text-center">Sembuh</th>
                    <th class="text-center" class="text-center">Meninggal</th>
                    <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($se_indo as $indo) {?>
                  <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $indo->Provinsi?></td>
                    <td class="text-center"> <span class="label label-warning"><?php echo $indo->Positif?></span></td>
                    <td class="text-center"><span class="label label-danger"><?php echo $indo->Sembuh?></span></td>
                    <td class="text-center"><span class="label label-danger"><?php echo $indo->Meninggal?></span></td>
                    <td align="center">
                      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit<?php echo $indo->id_prov ?>"><i class="fa fa-pencil"></i></button>
                      <a href="<?php echo base_url('update/hapus/');?><?php echo $indo->id_prov?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>

  <div class="modal fade" id="modaltambah">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah kasus</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('dashboard/tambah')?>" method="post"> 
                <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="text" class="form-control" name="Provinsi" placeholder="Nama Provinsi"  required>
                </div>
                <div class="form-group">
                    <label>Positif</label>
                    <input type="text" class="form-control" name="Positif" placeholder="Positif" required>
                </div>
                <div class="form-group">
                    <label>Sembuh</label>
                    <input type="text" class="form-control" name="Sembuh" placeholder="Sembuh" required>
                </div>
                <div class="form-group">
                    <label>Meninggal</label>
                    <input type="text" class="form-control" name="Meninggal" placeholder="Meninggal" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<?php foreach ($se_indo as $indo) {?>
  <div class="modal fade" id="modaledit<?php echo $indo->id_prov ?>">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('dashboard/edit')?>" method="post"> 
                <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="hidden" name="id_prov" value="<?php echo $indo->id_prov ?>">
                    <input type="text" class="form-control" name="Provinsi" placeholder="Nama Provinsi" value="<?php echo $indo->Provinsi ?>" required>
                </div>
                <div class="form-group">
                    <label>Positif</label>
                    <input type="text" class="form-control" name="Positif" placeholder="Positif" value="<?php echo $indo->Positif ?>" required>
                </div>
                <div class="form-group">
                    <label>Sembuh</label>
                    <input type="text" class="form-control" name="Sembuh" placeholder="Sembuh" value="<?php echo $indo->Sembuh ?>" required>
                </div>
                <div class="form-group">
                    <label>Meninggal</label>
                    <input type="text" class="form-control" name="Meninggal" placeholder="Meninggal" value="<?php echo $indo->Meninggal ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <?php } ?>