<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-12">
          <!-- small box -->
          <div class="card">
            <div class="card-header">
              <h4 class="float-left">Tambah Kontak</h4>
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <td colspan="2">Form Tambah Kontak</td>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?php echo base_url('kontak/add_action') ?>" method="post">
                    <tr>
                      <td>Nama Kontak</td>
                      <td>
                        <input type="text" name="nama_kontak" class="form-control" value="">
                      </td>
                    </tr>
                    <tr>
                      <td>Nomor Kontak</td>
                      <td>
                        <input type="text" name="nomor_kontak" class="form-control" value="">
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="">
                        <button type="submit" class="btn btn-success" name="button">Tambah</button>
                        <a href="<?php echo base_url('kontak') ?>" class="btn btn-danger">Batal</a>
                      </td>
                    </tr>
                  </form>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.2
  </div>
</footer>

<script type="text/javascript">
  $(document).ready(function(){
    console.log("hello")
  })
</script>
