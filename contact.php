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
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a class="show-5 active contactbutton" href="#">Contact</a></li>
						</ul>
					</nav>
					<nav class="main-navigation menu-responsive hidden-md hidden-lg">
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="certificate.php">certificate</a></li>
							<li><a href="portfolio.php">portfolio</a></li>
							<li><a class="show-5 active contactbutton" href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	
	<div id="menu-container">
		<div id="menu-5" class="content contact-section container">
			<div class="contact-header text-center">
				<h2 class="animated fadeInLeft">Contact</h2>
				
			</div>
			<div class="contact-holder">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<form id="contact" action="" method="post">
							<div class="contact-form animated fadeInUp">
								<h4>kirim e-mail</h4>
								<div class="row">
									<fieldset class="col-md-6">
										<input type="text" name="name" placeholder="Nama">
									</fieldset>
									<fieldset class="col-md-6">
										<input type="email" name="email" placeholder="E-mail">
									</fieldset>
									<fieldset class="col-md-12">
										<input type="text" name="subject" placeholder="Subjek">
									</fieldset>
									<fieldset class="col-md-12">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Isi Pesan"></textarea>
									</fieldset>
									<div class="col-md-12">
										<button type="submit" id="form-submit" class="btn">Send Now</button>
									</div>
								</div>
							</div>
						</form>
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
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Sekarang Anda dapat melakukan apa yang Anda inginkan dengan data yang dikirimkan, misalnya, menyimpannya ke database atau mengirimnya melalui email.
    // Contoh: Simpan data ke database MySQL
    $koneksi = new mysqli('localhost', 'root', '', 'raleway');
    $query = "INSERT INTO kontak (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ssss', $name, $email, $subject, $message);
    
    if ($stmt->execute()) {
        echo "Data telah berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan saat menyimpan data.";
    }
    
    $stmt->close();
    $koneksi->close();
}
?>
</body>
</html>