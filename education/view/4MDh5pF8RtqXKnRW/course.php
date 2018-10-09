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
  $courseName = $_POST['courseName'];
  $courseDescription = $_POST['courseDescription'];
  $courseOutline = $_POST['courseOutline'];
  $courseProfessor = $_POST['courseProfessor'];
  $courseProfessorInfo = $_POST['courseProfessorInfo'];
  $courseCategory = $_POST['courseCategory'];
  
  $admin->addCourse($courseName,$courseDescription,$courseOutline,$courseProfessor,$courseProfessorInfo,$courseCategory);
}
if(isset($_POST['remove'])){
  $courseName = $_POST['courseNameRemove'];
  $admin->removeCourse($courseName);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editing Course</h1>
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
                <h3 class="card-title">Adding Course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="coursepleInputEmail1">Course Name</label>
                    <input type="text" name="courseName" class="form-control" id="coursepleInputEmail1" placeholder="Course Name">
                  </div>

                  <!-- photo upload -->
                  <div class="form-group">
                    <label for="coursepleInputFile">Course photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="coursePhoto" id="coursepleInputFile">
                      </div>
                      
                    </div>
                  </div>
                  <!-- photo upload -->

                  <div class="form-group">
                    <label for="coursepleInputPassword1">Course Description</label>
                    <input type="text" name="courseDescription" class="form-control" id="coursepleInputPassword1" placeholder="Course Description">
                  </div>

                  <div class="form-group">
                    <label>Course Outline</label>
                    <textarea rows="5" name="courseOutline" class="form-control"  placeholder="Course Outline"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="coursepleInputPassword1">Professor Name</label>
                    <input type="text" name="courseProfessor" class="form-control" id="coursepleInputPassword1" placeholder="Professor Name">
                  </div>

                  <div class="form-group">
                    <label for="coursepleInputPassword1">Professor Info</label>
                    <input type="text" name="courseProfessorInfo" class="form-control" id="coursepleInputPassword1" placeholder="Professor Info">
                  </div>
                  
                  <div class="form-group">
                    <label>choose its category</label>
                    <select name="courseCategory" class="form-control">
                      <?php 
                      include_once('../../Model/adminModel.php');
                      $admin = new adminModal();
                      $admin -> displayCategoryAtCourseDashboard();
                      ?>
                    </select>
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
                <h3 class="card-title">Removing Course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="coursepleInputEmail1">Course Name</label>
                    <input type="text" name="courseNameRemove" class="form-control" id="coursepleInputEmail1" placeholder="Course name">
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