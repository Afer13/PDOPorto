<?php include 'baglan.php';
include 'function.php';
$ayarSorgu=$db->prepare("select * from ayarlar where ayar_id= ?");
$ayarSorgu->execute(array(1));
$ayarCek=$ayarSorgu->fetch(PDO::FETCH_ASSOC);

if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
	exit("Bu səyfəyə giriş icazəsi yoxdu!");
}
?>


<!DOCTYPE html>
<html>
	<head>
		<base href="http://localhost/pdoporto/">
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?php echo $ayarCek['ayar_title']; ?></title>	

		<meta name="keywords" content="<?php echo $ayarCek['ayar_keywords']; ?>" />
		<meta name="description" content="<?php echo $ayarCek['ayar_description']; ?>">
		<meta name="author" content="<?php echo $ayarCek['ayar_author']; ?>">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-law-firm.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-law-firm.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">

										<!--  LOGO  -->
										<img alt="AzCoder" width="210" height="75" data-sticky-width="50" data-sticky-height="40" data-sticky-top="33" src="<?php echo $ayarCek['ayar_logoheader']; ?>">
										
									</a>
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info">
									<li>
										<div class="feature-box feature-box-call feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-call-end icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><?php echo $ayarCek['ayar_tel']; ?></h4>
											</div>
										</div>
									</li>
									<li class="hidden-xs">
										<div class="feature-box feature-box-mail feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-envelope icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><a href="mailto:mail@example.com"><?php echo $ayarCek['ayar_mail']; ?></a></h4>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								Menu <i class="fa fa-bars"></i>
							</button>
							

	<!-- ===============================MENULAR====================== -->

	<!--
	<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a href="index.php">
												Ana Menu
											</a>
										</li>
										<li>
											<a href="haqqimizda.php">
												Haqqımızda
											</a>
										</li>
										<li>
											<a href="xeberler.php">
												Xəbərlər
											</a>
										</li>
										<li>
											<a href="elaqe.php">
												Əlaqə
											</a>
										</li>										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header> 
		-->
	<!-- ===============================MENULAR====================== -->