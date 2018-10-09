<?php require('view/app/templates/header.php'); 
	  include_once('Model/adminModel.php');
	  $admin = new adminModal();
	  if(isset($_POST['register_btn'])){
		  $userFirstName = filter_var($_POST['userFirstName'],FILTER_SANITIZE_STRING);
		  $userLastName =  filter_var($_POST['userLastName'],FILTER_SANITIZE_STRING);
		  $userEmail = filter_var($_POST['userEmail'],FILTER_SANITIZE_EMAIL);
		  $userPhone = filter_var($_POST['userPhone'],FILTER_SANITIZE_NUMBER_INT);
		  $admin -> addUser($userFirstName,$userLastName,$userEmail,$userPhone,$_GET['y']);
	  }
?>
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('view/app/templates/resourses/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->


		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">READY TO LEARN</h1>
								<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
								<a href="#down"><button class="main-btn" style="text-transform: uppercase;">Register <i class="fa fa-angle-down"></i></button></a>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	
	<!-- PHP -->
	<div id="down" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- blog -->

				<div id="registernow" class="section sm-padding bg-grey">
					<div class="container">
						<!-- Row -->
						<div class="row">
							<div class="col-md-9">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#outline">Outline Course</a>
									</li>
									<li><a data-toggle="pill" href="#professor">Professor</a>
									</li>
									<li><a data-toggle="pill" href="#register">Register</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="outline" class="tab-pane fade in active">
										<h3>&nbsp;</h3>
										<?php $admin -> displayCourseOutline($_GET['y']); ?>
									</div>
									<div id="professor" class="tab-pane fade">
										<h3>&nbsp;</h3>
											<?php $admin -> displayCourseProfessor($_GET['y']); ?>
									</div>
									<div id="register" class="tab-pane fade">
										<form id="register_form" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="userFirstName" class="form-control" id="userFirstName" placeholder="Shehab">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="userLastName" class="form-control" id="userLastName" placeholder="Emad">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="example@xxx.com">
												</div>
												<div class="form-group">
													<label>Phone</label>
													<input type="text" name="userPhone" class="form-control" id="userPhone" placeholder="0123456789">
												</div>
												<div class="form-group">
													<button type="submit" name="register_btn" id="register_btn" class="btn btn-success">Register</button>
													<button type="reset" class="btn btn-danger">Clear</button>
												</div>
											</div>
										</form>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- /blog -->

				

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /PHP -->
        
        
       


<?php require('view/app/templates/footer.php') ?>