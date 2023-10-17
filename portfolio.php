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
							<li><a href="certificate.php">certificate</a></li>
							<li><a class="show-4 active blogbutton" href="#">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
						<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="certificate.php">certificate</a></li>
							<li><a class="show-4 active blogbutton" href="#">portfolio</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	
	<div id="menu-container">
		<div id="menu-4" class="content blog-section container">
			<div class="blog-header text-center">
				<h2 class="animated fadeInRight">portfolio</h2>
			</div>
			<div class="row blog-posts">
				<div class="col-md-4 col-sm-12">
				<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=1";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
					<div class="blog-item post-2 animated zoomIn">
						<div class="blog-bg blog-blue"></div>
						<div class="blog-content">
							<h3><a href="#"><?= $row["judul"]; ?></a></h3>
							<span class="solid-line"></span>
							<p><?= $row["deskripsiPendek"]; ?></p>
							<a href="https://github.com/IvnWahyu/PBO" target="_blank" class="post-button">github</a>
						</div>
					</div>
					<?php
    }
}
?>
				</div>
				<div class="col-md-4 col-sm-12">
				<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=2";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
					<div class="blog-item post-3 animated zoomIn">
						<div class="blog-bg blog-green"></div>
						<div class="blog-content">
							<h3><?= $row["judul"]; ?></a></h3>
							<span class="solid-line"></span>
							<p><?= $row["deskripsiPendek"]; ?></p>
							<a href="https://github.com/IvnWahyu/DAA" target="_blank" class="post-button">github</a>
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