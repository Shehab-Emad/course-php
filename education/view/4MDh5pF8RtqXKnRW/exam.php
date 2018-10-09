<?php 
  session_start();
  if(@$_SESSION['admin']!=NULL){ 
?>
<?php include_once('header.php') ?>
<?php include_once('sidebar.php') ?>
<?php
include_once('../../Model/adminModel.php');
$admin = new adminModal();
if(isset($_POST['add'])){
  $examName = $_POST['examName'];
  $examCode = $_POST['examCode'];
  $examFrom = $_POST['examFrom'];
  $examTo = $_POST['examTo'];
  
  $admin->addExam($examName,$examCode,$examFrom,$examTo);
}
if(isset($_POST['remove'])){
  $examName = $_POST['examNameRemove'];
  $admin->removeExam($examName);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editing Exam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adding Exam</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Exam Name</label>
                    <input type="text" name="examName" class="form-control" id="exampleInputEmail1" placeholder="Exam Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Exam Code</label>
                    <input type="text" name="examCode" class="form-control" id="exampleInputPassword1" placeholder="Exam Code">
                  </div>
                  <!--<div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>-->
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>From</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="text" name="examFrom" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Date dd/mm/yyyy -->
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>To</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                      </div>
                      <input type="text" name="examTo" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Date dd/mm/yyyy -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-primary">Add</button>
                </div>
           
            </div>
             </div>
            <div class="col-md-6">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Removing Exam</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Exam Name</label>
                    <input type="text" name="examNameRemove" class="form-control" id="exampleInputEmail1" placeholder="Exam name">
                  </div>
                  </div>
                  <div class="card-footer">
                  <button type="submit" name="remove" class="btn btn-primary">Remove</button>
                </div>
              </form>
            </div>
             </div>



            </div>
        </div>
  </div>
    
  
</section>
            <!-- /.card -->
  </div>
            <?php include_once('footer.php') ?>
  <?php 
  }
  else{
    echo "<meta http-equiv='refresh' content='0; url=login.php'/>";
  } 
?>