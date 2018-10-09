<?php require('view/app/templates/header.php'); 
	  include_once('Model/adminModel.php');
	  $admin = new adminModal();
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
								<a href="#down"><button class="main-btn"><i class="fa fa-angle-down"></i></button></a>
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
				<?php
				$admin -> displaySearch($_GET['z']);
				?>
				<!-- /blog -->

				

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /PHP -->
        
        
       


<?php require('view/app/templates/footer.php') ?>