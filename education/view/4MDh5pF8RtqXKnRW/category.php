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
  $categoryName = $_POST['categoryName'];
  $admin->addCategory($categoryName);
}
if(isset($_POST['remove'])){
  $categoryName = $_POST['categoryNameRemove'];
  $admin->removeCategory($categoryName);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editing Track</h1>
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
                <h3 class="card-title">Adding Track</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Track Name</label>
                    <input type="text" name="categoryName" class="form-control" id="exampleInputEmail1" placeholder="Track Name">
                  </div>
                  
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
                <h3 class="card-title">Removing Track</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Track Name</label>
                    <input type="text" name="categoryNameRemove" class="form-control" id="exampleInputEmail1" placeholder="Track name">
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