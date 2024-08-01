<?php 
error_reporting(0);
include 'header.php';
if($_GET['xidmet_id'])
{
	$id=$_GET['xidmet_id'];
	$xidmetSorgu=$db->prepare("SELECT * FROM xidmetler where xidmet_id=?");
	$xidmetSorgu->execute(array($id));
	$xidmetCek=$xidmetSorgu->fetch(PDO::FETCH_ASSOC);
}
if($_GET['xidmet_id1'])
{	
	$id=$_GET['xidmet_id1'];
	$xidmetSorgu=$db->prepare("SELECT * FROM xidmetler where xidmet_id=?");
	$xidmetSorgu->execute(array($id));
	$xidmetCek=$xidmetSorgu->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- ============================HEADER ARDI =====================-->
<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
	<nav>
		<ul class="nav nav-pills" id="mainNav">
			<li >
				<a href="index.php">
					Ana Menu
				</a>
			</li>
			<li >
				<a href="haqqimizda.php">
					Haqqımızda
				</a>
			</li>
			<li class="active">
				<a href="xidmetler.php">
					Xidmətlər
				</a>
			</li>
			<li >
				<a href="xeberler.php">
					Bloq
				</a>
			</li>
			<li >
				<a href="faq.php">
					FAQ
				</a>
			</li>
			<li>
				<a href="elaqe.php">
					Əlaqə
				</a>
			</li>
			<li >
				<a href="serhler.php">
					Şərhlər
				</a>
			</li>										
		</ul>
	</nav>
</div>
</div>
</div>
</div>
</header>
<!-- ============================HEADER SON =====================-->

<div role="main" class="main">
	<div class="container">
		<div class="row pt-xl">
			<div class="col-md-12">

				<div class="row mt-xl mb-xl">
					<div class="col-sm-4 center">
						<img src="<?php echo substr($xidmetCek['xidmet_yol'],6); ?>" class="img-responsive mb-xl" alt="">
					</div>
					<div class="col-sm-8">
						<h1 class="mt-none mb-none"><?php echo $xidmetCek['xidmet_ad']; ?></h1>
						<div class="divider divider-primary divider-small mb-xl">
							<hr>
						</div>
						<ul class="list list-icons">
							<li><i class="fa fa-phone"></i> <strong>Əlaqə:</strong> +99455-764-71-65</li>
							<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:aferrehimov@gmail.com">aferrehimov@gmail.com</a></li>
							<li><i class="fa fa-dollar"></i> <strong>Qiymət:</strong><?php echo $xidmetCek['xidmet_qiymet']; ?> AZN </li>
						</ul>
					</div>
				</div>
				<div class="row mt-xl">
					<div class="col-sm-12">
						<?php echo $xidmetCek['xidmet_mezmun']; ?>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>

<?php include 'footer.php'; ?>