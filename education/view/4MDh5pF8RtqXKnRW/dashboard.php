<?php 
  session_start();
  if(@$_SESSION['admin']!=NULL){ 
?>
<?php include_once('header.php');
 include_once('sidebar.php') ;
 include_once('../../Model/adminModel.php');
$admin = new adminModal(); 
?>
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
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Students registration</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                      
                            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 200.4px;">
                              First Name</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 200.4px;">
                              Last Name</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">
                              Email</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">
                              Mobile</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 171.6px;">
                              Course Name</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $admin -> displayUser(); ?>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th rowspan="1" colspan="1">First Name</th>
                        <th rowspan="1" colspan="1">Last Name</th>
                        <th rowspan="1" colspan="1">Email</th>
                        <th rowspan="1" colspan="1">Mobile</th>
                        <th rowspan="1" colspan="1">Course Name</th>
                      </tr>
                      </tfoot>
                    </table></div></div>
                  </div>
                  <!-- /.card-body -->
                </div>
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('footer.php') ?>
  <?php 
  }
  else{
    echo "<meta http-equiv='refresh' content='0; url=login.php'/>";
  } 
?>