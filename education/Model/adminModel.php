<?php
class dbConfig
{
    public $serverName="localhost";
    public $database="education";
    public $userName="root";
    public $password="";
    
    public function openConnection() 
    {
      return mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
        
    }
    
}
class adminModal extends dbConfig{

    public function Login($email,$password) 
      {
      $query= mysqli_query($this->openConnection(),"SELECT * FROM admin WHERE adminEmail='$email' and adminPassword='$password'") ;
      $row=mysqli_fetch_array($query);
      if($row==NULL)
      {
           echo "<div class='alert alert-danger'>Login Failed</div>";
      }
       else{
           $_SESSION['admin']=$email;
           echo "<div class='alert alert-success'>Successfully Login</div>";
           echo "<meta http-equiv='refresh' content='1; url=dashboard.php'/>";
            
       }
      
    }

    // Exam Editing
    public function addExam($examName,$examCode,$examFrom,$examTo){
        $query= mysqli_query($this->openConnection(),"INSERT INTO exam (examName, examCode, examFrom, examTo) VALUES ('$examName','$examCode','$examFrom','$examTo')");
    }
    public function removeExam($examName){
        $query= mysqli_query($this->openConnection(),"DELETE FROM exam WHERE examName = '$examName'") ;
    }
    public function displayExam(){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM exam");
        while($value=mysqli_fetch_array($query)){
            echo      "<div class='col-md-4'>";
		    echo			"<div class='about'><i class='fa fa-sticky-note'></i>";
		    echo				"<h3>".$value['examName']."</h3>";
		    echo				"<p>Exam ID: ".$value['examCode']. "</p>";
		    echo				"<p>From: ".$value['examFrom']."</p>";
            echo				"<p>To: ".$value['examTo']."</p>";
            echo                "<a href='#'>Read more</a>";
		    echo			"</div>";
		    echo		"</div>";
        }
    }

    // Category Editing
    public function addCategory($categoryName){
        $query= mysqli_query($this->openConnection(),"INSERT INTO category (categoryName) VALUES ('$categoryName')");
    }
    public function removeCategory($categoryName){
        $query= mysqli_query($this->openConnection(),"DELETE FROM category WHERE categoryName = '$categoryName'") ;
    }
    public function displayCategory(){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM category");
        while($value=mysqli_fetch_array($query)){
            echo     "<li><a href='courses.php?x=".$value['categoryID']."#down'>".$value['categoryName']."</a></li>";
        }
    }
    public function displayCategoryTitle($categoryID){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM category WHERE categoryID = $categoryID");
        while($value=mysqli_fetch_array($query)){
            echo     $value['categoryName'];
        }
    }
    public function displayCategoryAtCourseDashboard(){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM category");
        while($value=mysqli_fetch_array($query)){
            echo     "<option value='".$value['categoryID']."'>".$value['categoryName']."</option>";
        }
    }

     // Course Editing
     public function addCourse($courseName,$courseDescription,$courseOutline,$courseProfessor,$courseProfessorInfo,$courseCategory){
        $coursePhoto=$_FILES["coursePhoto"]["name"];
        move_uploaded_file($_FILES["coursePhoto"]["tmp_name"],"../app/templates/resourses/uploads/".$_FILES["coursePhoto"]["name"]);
        $query= mysqli_query($this->openConnection(),"INSERT INTO course (courseName, coursePhoto, courseDescription, courseOutline, courseProfessor,courseProfessorInfo,categoryID) VALUES ('$courseName','$coursePhoto','$courseDescription','$courseOutline','$courseProfessor','$courseProfessorInfo','$courseCategory')");
    }
    public function removeCourse($courseName){
        $query= mysqli_query($this->openConnection(),"DELETE FROM course WHERE courseName = '$courseName'") ;
    }
    public function displayCourse($categoryID){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM course WHERE categoryID ='$categoryID'");
        while($value=mysqli_fetch_array($query)){
            echo "<div class='col-md-4'>";
            echo	"<div class='blog'>";
            echo		"<div class='blog-img'>";
            echo				"<img class='img-responsive' src='view/app/templates/resourses/uploads/".$value['coursePhoto']."'width='360' height='200' alt=''/>";
            echo		"</div>";
            echo	    "<div class='blog-content'>";
            echo				"<h3>".$value['courseName']. "</h3>";
            echo				"<p>".$value['courseDescription']."</p>";
            echo                "<p><a href='register.php?y=".$value['courseID']."'>Read More & Register</a></p>";
            echo	    "</div>";
            echo	"</div>";
		    echo "</div>";
        }
     }
    public function displayCourseOutline($courseID){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM course WHERE courseID ='$courseID'");
        while($value=mysqli_fetch_array($query)){
            echo				"<pre style='background-color: transparent; padding:0;font-size: 16px;font-family: sans-serif; border: none '>".$value['courseOutline']. "</pre>";  
        }
     }
     public function displayCourseProfessor($courseID){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM course WHERE courseID ='$courseID'");
        while($value=mysqli_fetch_array($query)){
            echo	"<h3>Professor ".$value['courseProfessor']. "</h3>";
            echo	"<p>".$value['courseProfessorInfo']."</p>";
        }
     }


     // User Editing
     public function addUser($userFirstName,$userLastName,$userEmail,$userPhone,$courseID)
     {
        $query= mysqli_query($this->openConnection(),"INSERT INTO user (userFirstName, userLastName, userEmail, userPhone,courseID) VALUES ('$userFirstName','$userLastName','$userEmail','$userPhone','$courseID')");
     }
     public function displayUser()
     {
        $query= mysqli_query($this->openConnection(),"SELECT * FROM user INNER JOIN course ON user.courseID=course.courseID");
        while($value=mysqli_fetch_array($query)){
            echo	"<tr>";
            echo	"<td>".$value['userFirstName']."</td>";
            echo	"<td>".$value['userLastName']."</td>";
            echo	"<td>".$value['userEmail']."</td>";
            echo	"<td>".$value['userPhone']."</td>";
            echo	"<td>".$value['courseName']."</td>";
            echo	"</tr>";
        }
     }

     //Search Edit
     public function displaySearch($courseName){
        $query= mysqli_query($this->openConnection(),"SELECT * FROM course WHERE courseName LIKE '%$courseName%'");
        while($value=mysqli_fetch_array($query)){
            echo "<div class='col-md-4'>";
            echo	"<div class='blog'>";
            echo		"<div class='blog-img'>";
            echo				"<img class='img-responsive' src='view/app/templates/resourses/uploads/".$value['coursePhoto']."'width='360' height='200' alt=''/>";
            echo		"</div>";
            echo	    "<div class='blog-content'>";
            echo				"<h3>".$value['courseName']. "</h3>";
            echo				"<p>".$value['courseDescription']."</p>";
            echo                "<p><a href='register.php?y=".$value['courseID']."'>Read More & Register</a></p>";
            echo	    "</div>";
            echo	"</div>";
		    echo "</div>";
        }
     }
}

?>