<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Portofolio</title>
<!--
Raleway Template 
http://www.templatemo.com/preview/templatemo_421_raleway
-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body>
	<header class="site-header container animated fadeInDown">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-4">
					<div class="site-branding">
						<a href="#"><h1>ivan</h1></a>
					</div>
				</div>
				<a href="#" class="toggle-nav hidden-md hidden-lg">
					<i class="fa fa-bars"></i>
				</a>
				<div class="col-md-8">
					<nav id="nav" class="main-navigation hidden-xs hidden-sm">
						<ul class="main-menu">
							<li><a class="show-1 active homebutton" href="#">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						
						<ul class="main-menu">
							<li><a class="show-1 active homebutton" href="#">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="menu-container">
		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-center">
				<h2 class="welcome-title animated fadeInLeft">welcome</h2>
				<h2 class="welcome-title animated fadeInLeft">to my portfolio website</h2>
				<ul class="list-icons animated fadeInUp">
					<li><i class="icon-trophy"></i></li>
					<li><i class="icon-badge"></i></li>
					<li><i class="icon-magic-wand"></i></li>
					<li><i class="icon-screen-desktop"></i></li>
				</ul>
			</div>
			<div class="home-projects">
<?php
include "koneksi.php";

$sql = "SELECT * FROM home";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="project-title animated fadeInUp">
							<h2><?= $row["nama"]; ?></h2>
							<p><?= $row["deskripsi"]; ?></p>
							<!-- <a href="#" class="pink-button">Continue Journal</a> -->
						</div>
					</div>
					<div class="project-home-holder col-md-6 col-sm-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="project-item one animated fadeInRight">
									<img src="img/orang.jpg" alt="">

								</div>
							</div>
							
						</div>
					</div>
				</div>
<?php
    }
}
?>
			</div>
		</div>
	</div>


	<footer class="site-footer container text-center">
		<div class="row">
			<div class="col-md-12 copyright">
				<p>Copyright &copy; 2084 <a href="#">Company Name</a></p>
			</div>
		</div>
	</footer>
	<!-- templatemo 421 raleway -->
	<span class="border-top"></span>
	<span class="border-left"></span>
	<span class="border-right"></span>
	<span class="border-bottom"></span>
	<span class="shape-1"></span>
	<span class="shape-2"></span>

	<script src="js/jquery.min.js"></script>
	<script src="js/templatemo_custom.js"></script>
</body>
</html>