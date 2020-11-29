<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FindYourBook</title>
		<!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
		<!-- Arbor.js ss -->
		<script src="../js/jquery-1.6.1.min.js"></script>
		<script src="../js/arbor.js"></script>
		<script src="../js/graphics.js"></script>
		<script src="../js/renderer.js"></script>
		<script src="../js/buttons.js"></script>
		<script src="../js/captcha.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--ReCaptcha-->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        
		<!--Randomiser-->
		<script src="../js/jquery-1.6.1.min.js"></script>
		<script src="../js/randomiser.js"></script>
		
		
	</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">FindYourBook</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
				</button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Choice</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Review</a></li>
					</ul>
				</div>
			</div>
		</nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="../assets/img/portfolio/fabi.png" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">FindYourBook</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
				</div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">For When You're all curled up with Nothing to Read!</p>
			</div>
		</header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
				<h2 class="page-section-heading text-center text-uppercase">Genres</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
				</div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
						
						<h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Non-Fiction</h3>
						
                        <div class="portfolio-item mx-auto"  data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_nonfic_id">
                                <div class="portfolio-item-caption-content text-center text-white" ><i class="fas fa-plus fa-3x"id="btn_nonfic_id"></i></div>
							</div>
                            <img class="img-fluid" src="../assets/img/portfolio/cabin.png" alt="" />
						</div>
					</div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
						<h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">I Feel Lucky!!!</h3>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
							</div>
                            <img class="img-fluid" src="../assets/img/portfolio/cake.png" alt="" />
						</div>
					</div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
						<h3 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="btn_fic_id"></br>Fiction </h3>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
							</div>
                            <img class="img-fluid" src="../assets/img/portfolio/circus.png" alt="" />
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- Reviews Section -->
	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">
			<!-- Review Section Heading-->
			<h2 class="page-section-heading text-center text-uppercase text-white">Reviews</h2>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			
			<!--  Section Content-->
			<p>
				
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					Click to Enter review
				</button>
			</p>
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<form action="../php/register.php" method="POST">
						<div class="container" id="reviewForm">
							<div class="form-group">
								<small id="emailHelp" class="form-text text-muted">Enter a real book name.</small>
								<label for="bookInput">Book name</label>
								<input type="text" class="form-control" id="bookInput" placeholder="Book name goes here" name="bName">
								
							</div>
							<div class="form-group">
								<label for="reviewInput">Review</label>
								<input type="text" class="form-control" id="reviewInput" placeholder="Review comes here" name="uComment">
							</div>
							<div id="norobot" class="g-recaptcha" data-sitekey="6LeEYOcZAAAAADJSQnG1g7aRho-2ACiGXK3fP3K4"data-callback="correctCaptcha"><?php include '../php/verify.php';?></div>
						</div>
						<button type="submit" name="submit-review "class="btn btn-primary">Enter your review!</button>
						
					</form>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			
			
			
			<p> Reviews Are Below</p>
			
			
			<div class="card card-body">
				<button id="displaydata" class="btn btn-success">View reviews</button>
			</div>
			
			<div>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<th>Book Name</th>
						<th>The review</th>
						
						
					</thead>
					<tbody id="response">
						
					</tbody>
					
				</table>
				
			</div>
			<script>
				$('#displaydata').click(function(){
					$.ajax({
						url: '../php/display.php',
						type:'post',
						
						success:function(responsedata){
							$('#response').html(responsedata);
							
						}
						
					});
				});
				
			</script>
			
		</div>
	</section>
	
	<!-- Reviews Section End Here -->
	
	
	
	<!-- Footer-->
	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<!-- Footer Location-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p class="lead mb-0">
						Within our respective homes
						<br />
						because of the 'rona
					</p>
				</div>
				<!-- Footer Social Icons-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Around the Web</h4>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
				</div>
				<!-- Footer About Text-->
				<div class="col-lg-4">
					<h4 class="text-uppercase mb-4">About Us</h4>
					<p class="lead mb-0">
						Team Kale's attempt Project, Coder can be found here:
						<a href="https://github.com/wizardofcmd/Find-A-Book">Our Github</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Copyright Section-->
	<div class="copyright py-4 text-center text-white">
		<div class="container"><small>Beast of a project</small></div>
	</div>
	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
	<div class="scroll-to-top d-lg-none position-fixed">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
	</div>
	<!-- Portfolio Modals-->
	<!-- Portfolio Modal 1 NON-FICTION BUTTON-->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fas fa-times"></i></span>
				</button>
				<div class="modal-body text-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<!-- Portfolio Modal - Title-->
								<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Non-Fiction</h2>
								<!-- Icon Divider-->
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
									<div class="divider-custom-line"></div>
								</div>
								
								<!-- Portfolio Modal - The things you want to display/hide go here-->
								 
									<canvas id="viewport"  class="row justify-content-center"width="400" height="400"></canvas>
									
									
									</div>
								
								<!-- Icon Divider-->
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									
									<div class="divider-custom-line"></div>
								</div>
								
								
								<div class="divider-custom">
								</div>			
								
								<!-- Portfolio Modal - Text-->
								<button class="btn btn-primary" data-dismiss="modal">
									<i class="fas fa-times fa-fw"></i>
									Close Window
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio Modal 2 FEELING LUCKY BUTTON -->
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fas fa-times"></i></span>
				</button>
				<div class="modal-body text-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<!-- Portfolio Modal - Title-->
								<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Feeling Lucky</h2>
								<!-- Icon Divider-->
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
									<div class="divider-custom-line"></div>
									
								</div>
								<!-- Feeling Lucky Content-->
								<button value="btn_ran_val"  class="btn btn-info " id="btn_ran_id" >Have You Read...</button>
								<div id="result"></div>
								</br>
								
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									<button class="btn btn-primary" data-dismiss="modal">
										<i class="fas fa-times fa-fw"></i>
										Close Window
									</button>
									<div class="divider-custom-line"></div>
								</div>
								
								
								<div class="divider-custom">
								</div>			
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio Modal 3 FICTION BUTTON-->
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fas fa-times"></i></span>
				</button>
				<div class="modal-body text-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<!-- Portfolio Modal - Title-->
								<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Fiction</h2>
								<!-- Icon Divider-->
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
									<div class="divider-custom-line"></div>
								</div>
								
								<!-- Portfolio Modal - The things you want to display/hide go here-->
								<div class="container ">
									
									
									<!-- Icon Divider-->
									<div class="divider-custom">
										<div class="divider-custom-line"></div>
										<button class="btn btn-primary" data-dismiss="modal">
											<i class="fas fa-times fa-fw"></i>
											Close Window
										</button>
										<div class="divider-custom-line"></div>
									</div>
									
									
								<div class="divider-custom">
								</div>	
								
								<!-- Portfolio Modal - Text-->
								
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								
								<!-- Bootstrap core JS-->
								<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
								<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
								<!-- Third party plugin JS-->
								<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
								<!-- Contact form JS-->
								<script src="../assets/mail/jqBootstrapValidation.js"></script>
								<script src="../assets/mail/contact_me.js"></script>
								<!-- Core theme JS-->
								<script src="../js/scripts.js"></script>
								</body>
								</html>
																