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
							<li><a href="index.php">Home</a></li>
							<li><a class="show-2 active aboutbutton" href="#">About</a></li>
							<li><a href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
						<li><a href="index.php">Home</a></li>
							<li><a class="show-2 active aboutbutton" href="#">About</a></li>
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
		<div id="menu-2" class="content about-section container">
			<div class="our-story">
				<div class="story-bg animated fadeIn"></div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<?php
include "koneksi.php";

$sql = "SELECT * FROM about";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
						<div class="inner-story animated fadeInRight text-center">
							<h2><?= $row["saya"]; ?></h2>
							<p><?= $row["deskripsiPanjang"]; ?></p>
						</div>
						<?php
    }
}
?>
					</div>
				</div>
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