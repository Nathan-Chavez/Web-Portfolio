<!doctype html>
<html lang="en">
	
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/jquery-3.5.1.js"></script>

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
	
	<!-- Navbar Start -->
	<header id="header">
		<div class="d-flex flex-column">
			<div class="profile">
				<img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
				<h1 class="text-light"><a href="index.php">Nathan Chavez</a></h1>
				<div class="social-links mt-3 text-center">
					<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>
			
			<nav id="navbar" class="nav-menu navbar">
				<ul>
					<li><a href="newIndex.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
					<li><a href="about.php" class="nav-link scrollto"><i class="bx bx-bus-school"></i> <span>About</span></a></li>
					<li><a href="school.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>School</span></a></li>
					<li><a href="hobbies.php" class="nav-link scrollto"><i class="bx bx-hard-hat"></i> <span>Work</span></a></li>
					<li><a href="contact.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
					<li><a href="results.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Results</span></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Navbar End -->
	
	<?php
	echo '<main id="main">';
		
    echo '<section id="results" class="results">';
    echo '<div class="container">';

	echo '<div class="section-title">';
	echo '<h2>Results</h2>';
	echo '</div>';   

		  	echo '<table>';
		  	echo '<tr style="background-color: #f2f2f2;">';
		  	echo '<td></td><td>Auto Index</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone</td><td>Comments</td>';
			echo '</tr>';
			echo '<tbody id="results-tbody">';
		  	echo '</tbody>';
		  	echo '</table>';
		
  	echo '</div>';
    echo '</section>';
	
	echo '</main>';
	?>
	
	
	<footer id="footer">
		<div class="container">
			<div class="copyright">
			&copy; Copyright <strong><span>iPortfolio</span></strong>
			</div>
			<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End  Footer -->
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
<script>
	function refresh_div(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-18-188-117-178.us-east-2.compute.amazonaws.com/hw15/query.php',
			success: function(data){
				$('#results-tbody').html(data);
			}
		});
	};
	setInterval(function(){refresh_div();}, 500)
</script>