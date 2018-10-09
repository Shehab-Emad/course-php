
<?php require('view/app/templates/header.php') ?>

	
	
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('view/app/templates/resourses/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
		
		<!-- home wrapper -->
		<div class="home-wrapper mobileTXT">
			<div class="container">
				<div class="row">
					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">YOU CAN LEARN ANYTHING</h1>
							<p class="white-text">Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</p>
							<!-- for scrolling down -->
							<a href="#exam" style="color:white;font-size:30px"><i class="fa fa-angle-down"></i></a>
						</div>
					</div>
					<!-- /home content -->
				</div>
			</div>
		</div>
		<!-- /home wrapper -->
	</header>
	<!-- /Header -->
	<!-- Exams -->
	<div id="exam" class="section md-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h1 class="white-text">&nbsp;</h1>
					<h2 class="title">Get Official Certificate Here</h2>
				</div>
				<!-- /Section header -->
				<!-- certification -->
				<?php
				include_once('Model/adminModel.php');
				$admin = new adminModal();
				$admin -> displayExam();
				?>
				<!-- /certification -->
				
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Exams -->
	<!-- Search Bar -->
	<div id="search" class="section sm-padding">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('view/app/templates/resourses/img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- number -->
				<div class="col-sm-12 col-xs-12">
					<div class="number">
						<div><i class="fa fa-search"></i>
						</div>
						<form method="post">
							<div>
								<input id="searchbar" type="text" name="searchtext" placeholder="Search for your courses....">
							</div>
							<div>&nbsp;</div>
							<div>
							<button name="searchbtn" class="btn btn-default blue-text">Search</button>
							</div>
						</form>
						<?php 
						if (isset($_POST['searchbtn'])){
							$searchtext=$_POST['searchtext'];
							echo "<meta http-equiv='refresh' content='0; url=search.php?z=".$searchtext."#down'/>";

						}
						 ?>
					</div>
				</div>
				<!-- /number -->
			</div>
		</div>
		<!-- /Container -->
	</div>
	<!-- /Search Bar -->
	<!-- About -->
	<div id="about" class="section md-padding bg-grey">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- why choose us content -->
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="title">Who Are We</h2>
					</div>
					<!-- Accordion -->
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-controls="collapseOne">
                                                          Our Story
                                                        </a>
                                                      </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" id="headingTwo">
								<h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  aria-controls="collapseTwo">
                                                          Our Vision
                                                        </a>
                                                      </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" id="headingThree">
								<h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  aria-controls="collapseThree">
                                                          Our Mission
                                                        </a>
                                                      </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
							</div>
						</div>
					</div>
					<!-- Accordion -->
				</div>
				<!-- /why choose us content -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /About -->
	<!-- Contact -->
	<div id="contact" class="section md-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->
				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">	<i class="fa fa-phone"></i>
						<h3>Mobile</h3>
						<p>0122-535-9582</p>
					</div>
				</div>
				<!-- /contact -->
				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">	<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>shehab.emad93@yahoo.com</p>
					</div>
				</div>
				<!-- /contact -->
				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">	<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Nasr City, Cairo, Egypt</p>
					</div>
				</div>
				<!-- /contact -->
				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->
				<!-- /contact google map -->
				<div class="col-sm-8 col-sm-offset-2">
					<div>&nbsp;</div>
					<div id="sample" style="height:400px;"></div>
				</div>
				<!-- /contact google map -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Contact -->

	<?php require('view/app/templates/footer.php') ?>