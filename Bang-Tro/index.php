<?php
session_start();
require 'assets/konek.php';
if (isset($_GET['kirim'])) {
	$kirimnya = $_GET['kirim'];
	if ($kirimnya == "yes") {
		?>
		<script type="text/javascript">alert("Sukses");</script>
		<?php
	} elseif ($kirimnya == "no") {
		?>
		<script type="text/javascript">alert("gagal");</script>
		<?php
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Bang-Tro</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="main-css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="main-css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="main-css/owl.theme.default.css" />

		<!-- Magnific Popup -->
		<link type="text/css" rel="stylesheet" href="main-css/magnific-popup.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="main-css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="main-css/style.css"/>
		
		<!-- CSS PopUp -->
		<style>
			
			/*CSS-Pesan*/
			.container {
				padding-left: 10px;
				padding-right: 10px;
				text-align: center;
			}
			.radio, .checkbox {
				position: relative;
				display: block;
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.wrapper-radio {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			user agent stylesheet
			div {
				display: block;
			}
			label, .lbl {
				font-size: 16px;
				color: #252828;
				line-height: normal;
				font-weight: 700;
				margin-bottom: 7px;
			}
			label {
				display: inline-block;
				max-width: 100%;
				margin-bottom: 5px;
				font-weight: 700;
			}
			* {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			user agent stylesheet
			label {
				cursor: default;
			}
			.form-group {
				margin-bottom: 15px;
			}
			.form-control {
				border: 1px solid #b5ced5;
				font-size: 16px;
				height: 46px;
				line-height: 44px;
				color: #45484a;
				padding: 0 10px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				width: 100%;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
			}
			.form-control {
				display: block;
				width: 100%;
				height: 34px;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.428571429;
				color: #555;
				background-color: #fff;
				background-image: none;
				border: 1px solid #ccc;
				border-radius: 4px;
				-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
				box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
				-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
				-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
				transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}
			i{
				color: #911344;
			}
			.glyphicon {
				position: relative;
				top: 1px;
				display: inline-block;
				font-family: glyphicons halflings;
				font-style: normal;
				font-weight: 400;
				line-height: 1;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			.bootstrap-select.btn-group .dropdown-menu li a span.text {
				display: inline-block;
			}

			* {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			.bootstrap-select.btn-group .dropdown-menu li a {
				cursor: pointer;
				user-select: none;
			}
			.dropdown-menu>li>a {
				display: block;
				padding: 3px 20px;
				clear: both;
				font-weight: 400;
				line-height: 1.428571429;
				color: #333;
				white-space: nowrap;
			}
			.inputfiletmp+label {
				font-size: 14px;
				font-weight: 600;
				text-transform: uppercase;
				height: 50px;
				line-height: 50px;
				background: #fff;
				text-align: center;
				display: block;
				cursor: pointer;
				color: #69b5c6;
				-webkit-border-radius: 5px;
				border-radius: 5px;
				margin: 10px 0;
				-webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
				-moz-box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
				box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
			}
			label, .lbl {
				font-size: 16px;
				color: #252828;
				line-height: normal;
				font-weight: 700;
				margin-bottom: 7px;
			}
			label {
				display: inline-block;
				max-width: 100%;
				margin-bottom: 5px;
				font-weight: 700;
			}
			* {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			user agent stylesheet
			label {
				cursor: default;
			}
			[class^=icon-]:before, [class*=" icon-"]:before {
				font-family: recomn;
				font-style: normal;
				font-weight: 400;
				speak: none;
				display: inline-block;
				text-decoration: inherit;
				width: 1em;
				margin-right: .2em;
				text-align: center;
				font-variant: normal;
				text-transform: none;
				line-height: 1em;
				margin-left: .2em;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- PopUp -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<!-- Header -->
		<header id="header">

			<!-- Top Header -->
			<div id="top-navbar" class="navbar">
				<div class="container">
					<ul class="nav navbar-nav navbar-right">
						<?php if(isset($_SESSION['uid']) != ''){ ?><li><p style="color: white; text-align: center;">Halo, <?php echo $_SESSION['username'];?></p></li> <?php } ?>
						<li><a href="#" class="text-link"><i class="fa fa-map-marker"></i><span>Jl. Tenggumung Baru Perintis 203-c</span></a></li>
						<li><a href="#" class="text-link"><i class="fa fa-phone"></i><span>+6285820875457</span></a></li>
						<li><a href="#" class="text-link"><i class="fa fa-envelope"></i><span>ahmadin@support.com</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /Top Header -->

			<!-- Main Header -->
			<div id="main-navbar" class="navbar">
				<div class="container">
					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a class="logo" href="index.html"><img src="img/logo.png" alt="logo"></a>
						</div>
						<!-- Logo -->

						<!-- Mobile toggle -->
						<button class="navbar-toggle-btn">
							<span></span>
						</button>
						<!-- Mobile toggle -->

					</div>

					<!-- Navigation -->
					<ul class="main-navbar nav navbar-nav navbar-right">
						<li><a class="text-link" href="#"><span>Home</span></a></li>
						<li><a class="text-link" href="#AboutUs"><span>About</span></a></li>
						<li><a class="text-link" href="#"><span>Projects</span></a>
							
						</li>
						<li><a class="text-link" href="#"><span>Services</span></a>
							
						</li>
						<li><a class="text-link" href="#"><span>Blog</span></a>
							
						</li>
						<li><a class="text-link" href="#"><span>Contact</span></a></li>
				<?php if(isset($_SESSION['uid']) != ''){	?>	<li><a class="text-link" href="assets/logout.php"><span>Logout</span></li> <?php } ?>
					</ul>
					<!-- Navigation -->

				</div>
			</div>
			<!-- /Main Header -->

		</header>
		<!-- /Header -->
		
		<!-- Home Section -->
		<div id="home" class="banner-area">

			<!-- Background Image -->
			<div class="bg-img overlay" style="background-image:url('./img/background1.jpg')"></div>
			<!-- /Background Image -->

			<!-- home wrapper -->
			<div class="home-wrapper">
				<div class="container">
					<div class="row">

						<!-- home content -->
						<div class="col-md-10 col-md-offset-1">
							<h1>Anda Nyaman Kami Senang</h1>
							<p class="lead">Cara Cepat & Aman Untuk Perawatan Dan Perbaikan Perabotan Elektronik Anda. Temukan Teknisi Terbaik Disini Dengan Garansi 30 Hari.</p>
							<button class="secondary-button">Lebih Banyak</button>
						</div>
						<!-- /home content -->

					</div>
				</div>
			</div>
			<!-- /home wrapper -->

		</div>
		<!-- /Home Section -->

		<!-- About Section -->
		<div id="about">

			<!-- About section 01 -->
			<div class="section md-section">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- about -->
						<div class="col-md-4">
							<div class="about">
								<img src="./img/about1.jpg" alt="">
								<h3>Pengalaman Kerja</h3>
								<p>Memberikan Pelayanan Service Terbaik & Terpercaya</p>
							</div>
						</div>
						<!-- /about -->

						<!-- about -->
						<div class="col-md-4">
							<div class="about">
								<img src="./img/about2.jpg" alt="">
								<h3>Semua Perabotan Elektronik</h3>
								<p>Tidak Hanya AC, Kita Juga Menyediakan Jasa Perawatan Perabotan Elektronik Di Rumah Anda</p>
							</div>
						</div>
						<!-- /about -->

						<!-- about -->
						<div class="col-md-4">
							<div class="about">
								<img src="./img/about3.jpg" alt="">
								<h3>Jual / Beli AC</h3>
								<p>Kami Juga Menerima Jual Beli AC Bekas Ataupun Baru</p>
							</div>
						</div>
						<!-- /about -->

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			<!-- /About section 01 -->

			<!-- About section 02 -->
			<div class="section md-section bg-grey">

				<!-- Half Background Image -->
				<div class="bg-img bg-half overlay" style="background-image:url('./img/about4.jpg')"></div>
				<!-- /Half Background Image -->

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- About content -->
						<div class="col-md-offset-7 col-md-6">
							<h4 class="sub-title">Lebih tahu</h4>
							<h2 class="title">Tentang Kita</h2>
							<p class="lead">Perusahaan ini berdiri karena adanya hubungan yang erat antara Konsumen dan Teknisi </p>
							<p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
						</div>
						<!-- /About content -->

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			<!-- /About section 02 -->

		</div>
		<!-- /About Section -->

		<!-- Numbers Section -->
		<div id="numbers" class="section sm-section bg-main">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					


		<!-- Portfolio Section -->
		<div id="portfolio" class="section md-section">

			<!-- container -->
			<div class="container-fluid">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">Subtitle</h4>
						<h2 class="title">Featured Works</h2>
					</div>
					<!-- section header -->

					<!-- portfolio slider -->
					<div id="portfolio-slider" class="owl-carousel owl-theme">

						<!-- portfolio -->
						<div class="portfolio">
							<div class="portfolio-img">
								<div class="overlay"></div>
								<div class="portfolio-links">
									<a href="#"><i class="fa fa-link"></i></a>
									<a class="lightbox" href="./img/project1.jpg"><i class="fa fa-search"></i></a>
								</div>
								<img src="./img/project1.jpg" alt="">
							</div>
							<div class="portfolio-content">
								<h3>Project Title</h3>
								<span>Category</span>
							</div>
						</div>
						<!-- /portfolio -->

						<!-- portfolio -->
						<div class="portfolio">
							<div class="portfolio-img">
								<div class="overlay"></div>
								<div class="portfolio-links">
									<a href="#"><i class="fa fa-link"></i></a>
									<a class="lightbox" href="./img/project2.jpg"><i class="fa fa-search"></i></a>
								</div>
								<img src="./img/project2.jpg" alt="">
							</div>
							<div class="portfolio-content">
								<h3>Project Title</h3>
								<span>Category</span>
							</div>
						</div>
						<!-- /portfolio -->


						<!-- portfolio -->
						<div class="portfolio">
							<div class="portfolio-img">
								<div class="overlay"></div>
								<div class="portfolio-links">
									<a href="#"><i class="fa fa-link"></i></a>
									<a class="lightbox" href="./img/project3.jpg"><i class="fa fa-search"></i></a>
								</div>
								<img src="./img/project3.jpg" alt="">
							</div>
							<div class="portfolio-content">
								<h3>Project Title</h3>
								<span>Category</span>
							</div>
						</div>
						<!-- /portfolio -->


						<!-- portfolio -->
						<div class="portfolio">
							<div class="portfolio-img">
								<div class="overlay"></div>
								<div class="portfolio-links">
									<a href="#"><i class="fa fa-link"></i></a>
									<a class="lightbox" href="./img/project4.jpg"><i class="fa fa-search"></i></a>
								</div>
								<img src="./img/project4.jpg" alt="">
							</div>
							<div class="portfolio-content">
								<h3>Project Title</h3>
								<span>Category</span>
							</div>
						</div>
						<!-- /portfolio -->


					</div>
					<!-- /portfolio slider -->

					<div class="view-all-portfolio">
						<a href="#" class="main-button">View All</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Portfolio Section -->

		<!-- Services Section -->
		<div id="service" class="section md-section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">Subtitle</h4>
						<h2 class="title">Pelayanan Kami</h2>
					</div>
					<!-- /section header -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-building"></i>
							<div class="service-content">
								<h3>Cuci AC</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-wrench"></i>
							<div class="service-content">
								<h3>AC Bocor</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-university"></i>
							<div class="service-content">
								<h3>AC Tidak Dingin</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-paint-brush"></i>
							<div class="service-content">
								<h3>Service Segala Macam Perabot Elektronik</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-magic"></i>
							<div class="service-content">
								<h3>Decorating</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-bullhorn"></i>
							<div class="service-content">
								<h3>Consulting</h3>
								<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a href="#" class="text-link"><span>Read more</span></a>
							</div>
						</div>
					</div>
					<!-- /service -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Services Section -->

		<!-- Why Choose us Section -->
		<div class="section md-section bg-grey">

			<!-- Half Background Image -->
			<div class="bg-img bg-half bg-right overlay" style="background-image:url('./img/about5.jpg')"></div>
			<!-- Half Background Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- Why Choose us content -->
					<div class="col-md-5">

						<!-- section header -->
						<div class="section-header">
							<h4 class="sub-title">Subtitle</h4>
							<h2 class="title">Kenapa Memilih Kita</h2>
							<p>Dapatkan Garansi 30 Hari. Bisa Datang Hari Ini (Sesuai Tanggal & Waktu Pemesanan). Proses Mudah & Cepat. Transaksi Aman Terjamin. Pesan Sekarang. Ahli & Berpengalaman. Harga Terjangkau. Memberikan Pelayanan Terbaik Untuk Anda.</p>
						</div>
						<!-- /section header -->

						<!-- Why Choose us accordion -->
						<div class="accordion" id="accordion">

							<!-- panel -->
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse-1">Certified Experience</a></h4>
								</div>
								<div id="collapse-1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
									</div>
								</div>
							</div>
							<!-- /panel -->

							<!-- panel -->
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-2">The Great Teamwork</a></h4>
								</div>
								<div id="collapse-2" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
									</div>
								</div>
							</div>
							<!-- /panel -->

							<!-- panel -->
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-3">Modern Thechnology</a></h4>
								</div>
								<div id="collapse-3" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
									</div>
								</div>
							</div>
							<!-- /panel -->

						</div>
						<!-- /Why Choose us accordion -->

					</div>
					<!-- /Why Choose us content -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Why Choose us Section -->


		<br/>
		<br/>
		
		<!-- Call to Action Section -->
		<div id="cta-2" class="section xs-section bg-main">


			<!-- Half Background Image -->
			<!--button class="btn" value="pesan">Pesan</button-->
			<!-- /Half Background Image -->


			<!-- container -->
			<div class="container">

				<!-- container -->
				<div class="container">
					<!--background-->
					
					
					<!-- CTA Content -->
					<div id="rootwizard">
						<?php if(isset($_SESSION['uid']) != ''){ ?>

<header>
<div class="caption-header">
Jasa Service AC
</div>
</div>
</header>
<content>
<div class="row wrapper-content">
<form class="simple_form request-form f-unfinish" id="tmp-request" novalidate="novalidate" enctype="multipart/form-data" action="submit_data.php" accept-charset="UTF-8" data-remote="true" method="post">
<div class="js-wizard-box js-first-question parent active" data-step="1">
<h4 class="text-center">
Keluhan / masalah AC Anda?
</h4>
<br>
<div class="wrapper-radio">
<span class="radio">
<label for="js-question-1-0">
<input aria-required="true" class="radio_buttons js-question-1 required q-field" id="js-question-1-0" name="keluhan" type="radio" value="AC tidak dingin">
AC tidak dingin
</label>
</span>
<span class="radio">
<label for="js-question-1-1">
<input aria-required="true" class="radio_buttons js-question-1 required q-field" id="js-question-1-1" name="keluhan" type="radio" value="AC berisik">
AC berisik
</label>
</span>
<span class="radio">
<label for="js-question-1-2">
<input aria-required="true" class="radio_buttons js-question-1 required q-field" id="js-question-1-2" name="keluhan" type="radio" value="AC bocor">
AC bocor
</label>
</span>
<span class="radio">
<label for="js-question-1-3">
<input aria-required="true" class="radio_buttons js-question-1 required q-field" id="js-question-1-3" name="keluhan" type="radio" value="Lainnya">
Lainnya
</label>
</span>
<span class="radio">
<label for="js-question-1-4">
<input aria-required="true" class="radio_buttons js-question-1 required q-field" id="js-question-1-4" name="keluhan" type="radio" value="Tidak ada">
Tidak ada
</label>
</span>
</div>
</div>
<div class="js-wizard-box js-second-question parent" data-step="2">
<h4 class="text-center">
Layanan yang Anda butuhkan?
</h4>
<br>
<div class="wrapper-radio">
<span class="radio">
<label for="js-wizard-ac-0">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-0" name="layanan" type="radio" onclick="executeMe()" value="Cuci AC">
Cuci AC
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-1">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-1" name="layanan" type="radio" onclick="executeMe()" value="Perbaikan AC">
Perbaikan AC
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-2">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-2" name="layanan" type="radio" onclick="executeMe()" value="Tambah/isi freon">
Tambah/isi freon
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-3">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-3" name="layanan" type="radio" onclick="executeMe()" value="Bongkar pasang AC">
Bongkar pasang AC
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-4">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-4" name="layanan" type="radio" onclick="executeMe()" value="Bongkar AC">
Bongkar AC
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-5">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-5" name="layanan" type="radio" onclick="executeMe()" value="Pasang AC">
Pasang AC
</label>
</span>
<span class="radio">
<label for="js-wizard-ac-6">
<input aria-required="true" class="radio_buttons js-question-2 required q-field" id="js-wizard-ac-6" name="layanan" type="radio" value="Lainnya">
Lainnya
</label>
</span>
</div>
</div>
<div class="js-wizard-box js-third-question parent" data-step="3">
<h4 class="text-center">
Berapa unit AC yang perlu dikerjakan?
</h4>
<br>
<div class="form-group">
<input type="tel" class="form-control numeric-only q-field" placeholder="Jumlah AC" name="berapaunit" id="js-unit-ac" onkeyup="executeMe()">
<p>
<i>Harap mengisi jumlah AC yang akan dikerjakan</i>
</p>
</div>
</div>
<div class="js-wizard-box js-fourth-question parent" data-step="4">
<h4 class="text-center">
Apakah penyedia jasa perlu membawa tangga?
</h4>
<br>
<div class="wrapper-radio-boolean">
<span class="radio">
<label for="1">
<input aria-required="true" class="radio_buttons required q-field" id="1" name="membawatangga" type="radio" value="ya">
Ya
</label>
</span>
<span class="radio">
<label for="0">
<input aria-required="true" class="radio_buttons required q-field" id="0" name="membawatangga" type="radio" value="tidak">
Tidak
</label>
</span>
</div>
</div>
<div class="js-wizard-box js-fifth-question parent" data-step="5">
<h4 class="text-center">
Kapan Anda membutuhkan layanan?
</h4>
<br>
<div class="form-group center-block">
<input type="date" name="kapananda" class="form-control">
<div class="text-center"><i>Silahkan pilih tanggal</i></div>
</div>
</div>
<div class="js-wizard-box js-sixth-question parent" data-step="6">
<h4 class="text-center">
Jam berapa Anda membutuhkan layanan?
</h4>
<br>
<div class="form-group">
<select name="jamberapa" class="form-control q-field range-time" data-input="select" data-time-question="true" tabindex="-98">
<option value=""></option>
<option value="08:30 - 11:30">08:30 - 11:30</option><option value="09:00 - 12:00">09:00 - 12:00</option><option value="12:00 - 15:00">12:00 - 15:00</option><option value="15:00 - 18:00">15:00 - 18:00</option><option value="18:00 - 21:00">18:00 - 21:00</option><option value="21:00 - 00:00">21:00 - 00:00</option></select></div>
</div>
</div>
<div class="js-wizard-box js-seventh-question parent" data-step="7">
	<br/>
<h4 class="text-center">
Informasi Tambahan
</h4>
<br>
<div class="form-group">
<textarea name="informasitambahan" class="form-control q-field" rows="5" data-optional="true"></textarea>
<p>
<i>Jika Anda menjawab 'lainnya' sebagai jawaban pada pertanyaan-pertanyaan sebelumnya, harap menjelaskan dengan lengkap di sini. Semakin lengkap informasi yang Anda berikan, semakin akurat penawaran harga yang Anda dapatkan.</i>
</p>
</div>
</div>
<div class="js-wizard-box js-eigth-question parent" data-step="8">
<h4 class="text-center">
Upload gambar untuk membantu kami memahami keinginan Anda
</h4>
<br>
<fieldset class="modal_fieldset">
<input class="file optional ajaxFileUpload inputfiletmp form-control" id="inspiration" type="file" name="gambar">
<ul class="list-inline attachedImages" style="margin-top:15px;">
</ul>
</fieldset>
<span class="attachmentWarning" style="display: none"></span>
</div>
<div class="js-wizard-box js-ninth-question" data-step="9">
<h4 class="text-center">
<br>
<p class="terms text-center">
Dengan klik tombol Pesan Sekarang Anda setuju dengan Syarat dan Ketentuan Bang-Tro</a>
</p>
</div>
<div class="js-action-service-ac-form">
<div class="pull-left none js-wrapper-back" style="display: none;">
<a class="btn-action-wizard btn btn-default" data-status="back" href="javascript:;">&lt; Back</a>
</div>
<div class="pull-right">
<input type="submit" name="submit" value="Pesan Sekarang" class="form-control btn btn-md btn-info btn-finish none" data-disable-with="Pesan Sekarang">
</div>
<div class="clear-both"></div>
</div>
</form></div>
 </content>

</div>
</div>
						<?php } ?>
<div class="hidden-xs">
<footer class="workings-side">
<hr>
<h3 class="text-center">
Bagaimana cara Kerjanya?
</h3>
<div class="row">
<div class="col-md-4">
<img class="img-circle img-responsive center-block" src="img/work-1-3b87f779189dc0076a0f3496790a8f826809f0541da63d7a552804f7f54bc00d.jpg" alt="Work 1">
<h5>
Jelaskan Kebutuhan Anda
</h5>
<p class="small">
Beritahu kami secara lengkap tentang layanan yang anda butuhkan
</p>
</div>
<div class="col-md-4">
<img class="img-circle img-responsive center-block" src="img/work-2-6e1b28a1ad34fbca2002e377e876334ab030e01f31eb21798e7a915454a771f1.jpg" alt="Work 2">
<h5>
Tunggu Beberapa Saat
</h5>
<p class="small">
Penyedia jasa akan langsung menghubungi Anda
</p>
</div>
<div class="col-md-4">
<img class="img-circle img-responsive center-block" src="img/work-3-d0f6b13beb0d929890e2e7d2045928dfb23e9de82fe348870dc011b74fffd644.jpg" alt="Work 3">
<h5>
Jaminan Kepuasan
</h5>
<p class="small">
Dapatkan garansi untuk layanan yang Anda pesan
</p>
</div>
</div>
</footer>
</div>
					<!--<legend>Kontak Anda</legend>
					<div class="form-group string required service_ac_request_quote_request_name">
						<label class="control-label string required" for="service_ac_request_quote_request_attributes_name">
							<abbr title="required">*</abbr> Name</label>
							<div>
								<input class="form-control string required js-input-name" required="required" aria-required="true" type="text" name="service_ac_request[quote_request_attributes][name]" id="service_ac_request_quote_request_attributes_name">
							</div>
					</div>
					<div class="form-group email required service_ac_request_quote_request_email">
						<label class="control-label email required" for="service_ac_request_quote_request_attributes_email">
							<abbr title="required">*</abbr> Email</label>
							<div>
								<input class="form-control string email required js-input-email" required="required" aria-required="true" type="email" name="service_ac_request[quote_request_attributes][email]" id="service_ac_request_quote_request_attributes_email">
							</div>
					</div>
					<div class="form-group text required service_ac_request_quote_request_kecamatan">
						<label class="control-label text required" for="service_ac_request_quote_request_attributes_kecamatan"><abbr title="required">*</abbr> Alamat Lengkap </label>
						<div>
							<textarea class="form-control text required" required="required" aria-required="true" name="service_ac_request[quote_request_attributes][kecamatan]" id="service_ac_request_quote_request_attributes_kecamatan"></textarea>
						</div>
					</div>-->
					<!-- /modal pesan -->
					<!-- /CTA Content -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call to Action Section -->


		<!-- Footer Section -->
		<footer id="footer" class="bg-dark">

			<!-- Top footer -->
			<div id="top-footer" class="section sm-section">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- footer about -->
						<div class="col-md-4 footer-widget">
							<div class="footer-logo">
								<a class="logo" href="index.html">
									<img src="img/logo-alt.png" alt="logo">
								</a>
								<p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
							</div>
							<ul class="footer-contact">
								<li><a href="#" class="text-link"><i class="fa fa-map"></i><span>Jl. Tenggumung Baru Perintis 203-c</span></a></li>
								<li><a href="#" class="text-link"><i class="fa fa-phone"></i><span>+6285820875457</span></a></li>
								<li><a href="" class="text-link"><i class="fa fa-envelope"></i><span>ahmadin@support.com</span></a></li>
							</ul>
						</div>
						<!-- /footer about -->

						<!-- footer links -->
						<div class="col-md-4 footer-widget">
							<div class="row">
								<div class="col-md-12">
									<h3 class="title white-text">Quick Links</h3>
								</div>
								<div class="col-xs-6">
									<ul class="footer-links">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Projects</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /footer links -->

						<!-- footer subscribe -->
						<div class="col-md-4 footer-widget">
							<h3 class="title white-text">Keep in touch</h3>
							<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<a class='btn btn-md btn-info btn-finish none' href='index1.php'>Login</a>
								<a class='btn btn-md btn-info btn-finish none' href='index1.php#toregister'>Register</a>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<!-- /footer subscribe -->

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			<!-- /Top footer -->

			<!-- Bottom footer -->
			<!-- /Bottom footer -->

		</footer>
		<!-- /Footer Section -->

		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- /Preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script>
			var modalPesan = document.getElementById('modalPesan');
			function bukaModal(){
				modalPesan.style.display = 'block';
			}
			window.addEventListener('click',function(event){
				if(event.target == modalPesan){
					modalPesan.style.display= 'none';
				}
			})
		</script>
	</body>
</html>
