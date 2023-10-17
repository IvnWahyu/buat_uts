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
							<li><a href="about.php">About</a></li>
							<li><a class="show-3 active projectbutton" href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
						<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a class="show-3 active projectbutton" href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	
	<div id="menu-container">
		<div id="menu-3" class="content project-section container">
			<div class="projects-header">
				<h2 class="animated fadeInRight">Sertifikat</h2>
				
			</div>
			<div class="projects-holder">
				<div class="row">
					<div class="col-md-4 col-sm-6 p-1 animated umScaleIn">
<?php
include "koneksi.php";

$sql = "SELECT * FROM certificate WHERE id=1";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
						<div class="project-item">
							<img src="img/1.jpg" alt="">
							<div class="overlay">
								<h3><?= $row["judul"]; ?></h3>
								<p><?= $row["subjudul"]; ?></p>
							</div>
						</div>
<?php
    }
}
?>
					</div>
					<div class="col-md-4 col-sm-6 p-2 animated umScaleIn">
<?php
include "koneksi.php";

$sql = "SELECT * FROM certificate WHERE id=2";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
	
						<div class="project-item">
							<img src="img/2.jpg" alt="">
							<div class="overlay">
								<h3><?= $row["judul"]; ?></h3>
								<p><?= $row["subjudul"]; ?></p>
							</div>
						</div>
<?php
    }
}
?>
					</div>
					<div class="col-md-4 col-sm-6 p-3 animated umScaleIn">
<?php
include "koneksi.php";

$sql = "SELECT * FROM certificate WHERE id=3";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
						<div class="project-item">
							<img src="img/3.jpg" alt="">
							<div class="overlay">
								<h3><?= $row["judul"]; ?></h3>
								<p><?= $row["subjudul"]; ?></p>
							</div>
						</div>
<?php
    }
}
?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 p-2 animated umScaleIn">
<?php
include "koneksi.php";

$sql = "SELECT * FROM certificate WHERE id=4";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
						<div class="project-item animated umScaleIn">
							<img src="img/4.jpg" alt="">
							<div class="overlay">
								<h3><?= $row["judul"]; ?></h3>
								<p><?= $row["subjudul"]; ?></p>
							</div>
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