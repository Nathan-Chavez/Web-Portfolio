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
					<li><a href="default.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
					<li><a href="about.php" class="nav-link scrollto"><i class="bx bx-bus-school"></i> <span>About</span></a></li>
					<li><a href="school.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>School</span></a></li>
					<li><a href="hobbies.php" class="nav-link scrollto"><i class="bx bx-hard-hat"></i> <span>Hobbies</span></a></li>
					<li><a href="contact.php" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
					<li><a href="results.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Results</span></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Navbar End -->
	
	<main id="main">
	
	
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
				  <h4>Location:</h4>
				  <p>1 UTSA Circle, San Antonio, TX 78249</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>nathan.chavez@my.utsa.edu</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6939.364137507554!2d-98.62451!3d29.5838525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c667dd6657fdd%3A0x24e55c903c3a270c!2sThe%20University%20of%20Texas%20at%20San%20Antonio!5e0!3m2!1sen!2sus!4v1678850051274!5m2!1sen!2sus"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
	
          </div>
		<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			
			echo '<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">';
			if(!isset($_POST['submit']))
			{
				
				echo '<form action="#contact" method="post" role="form" class="php-email-form">';
				echo '<div class="row">';
				echo '<div class="form-group col-md-6">';
				echo '<label for="firstname">First Name</label>';
				echo '<input type="text" name="firstname" class="form-control" required>';
				echo '</div>';
				echo '<div class="form-group col-md-6">';
				echo '<label for="lastname">Last Name</label>';
				echo '<input type="text" class="form-control" name="lastname" required>';
				echo '</div>';
				echo '<div class="row">';
				echo '<div class="form-group col-md-6">';
				echo '<label for="email">Email</label>';
				echo '<input type="text" name="email" class="form-control"  required>';
				echo '</div>';
				echo '<div class="form-group col-md-6">';
				echo '<label for="phone">Phone Number</label>';
				echo '<input type="text" name="phone" class="form-control"  required>';
				echo '</div>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label for="comments">Comments</label>';
				echo '<textarea class="form-control" name="comments" rows="10" required></textarea>';
				echo '</div>';
				
				echo '<button type="submit" name="submit" value="submit">Submit</button>';
				echo '</div>';
				echo '</form>';
			}
			if(isset($_POST['submit']))
			{
				$firstname=addslashes($_POST['firstname']);
				$lastname=addslashes($_POST['lastname']);
				$email=addslashes($_POST['email']);
				$phone=addslashes($_POST['phone']);
				$comments=addslashes($_POST['comments']);
				//Database connection Parameters
				$un="webuser";
				$pw="]b.kWaCZQ3kG9!_9";
				$host="localhost";
				$db="contact_data";			
				//Create new mysql connection
				$dblink=new mysqli($host,$un,$pw,$db);
				echo '<form action="" method="post" role="form" class="php-email-form">';
				echo '<h3>Data Received</h3>';
				echo "<p>First Name: $firstname</p>";
				echo "<p>Last Name: $lastname</p>";
				echo "<p>Email: $email</p>";
				echo "<p>Phone: $phone</p>";
				echo "<p>Comments: $comments</p>";
				
				$sql="Insert into `entries` (`first_name`,`last_name`,`email`,`phone`,`comments`) values('$firstname','$lastname','$email','$phone','$comments')";
				$dblink->query($sql) or
					die("<p>Something went wrong with: $sql<br>".$dblink->error);
				echo '<h3>Data entered into database successfully!</h3>';
				//echo "<button type='button' onclick='location.href'=results.php>Go to Results Page</button>";
				echo '<button type="button" onclick="location.href=\'results.php\'">Go to Results Page</button>';
				echo '</form>';
				
			}
			echo '</div>';
		?>

        </div>

      </div>
    </section><!-- End Contact Section -->

	</main>
	
	
	
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
