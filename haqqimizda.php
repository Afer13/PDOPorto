<?php 
include 'header.php';
$haqqSorgu=$db->prepare("select * from haqqimizda where haqq_id= ?");
$haqqSorgu->execute(array(1));
$haqqCek=$haqqSorgu->fetch(PDO::FETCH_ASSOC);
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
			<li class="active">
				<a href="haqqimizda.php">
					Haqqımızda
				</a>
			</li>
			<li>
				<a href="xidmetler.php">
					Xidmətlər
				</a>
			</li>
			<li>
				<a href="xeberler.php">
					Bloq
				</a>
			</li>
			<li>
				<a href="faq.php">
					FAQ
				</a>
			</li>
			<li>
				<a href="elaqe.php">
					Əlaqə
				</a>
			</li>
			<li>
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
			<div class="col-md-7">
				<h1 class="mt-xl mb-none"><?php echo $haqqCek['haqq_baslig']; ?></h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<p><?php echo $haqqCek['haqq_mezmun']; ?></p>

			</div>
			<div class="col-md-4 col-md-offset-1">

				<h4 class="mt-xl mb-none">Vidio Məzmun</h4>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>

				<div class="embed-responsive embed-responsive-16by9 mb-xl">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $haqqCek['haqq_vidio']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<h4 class="mt-xlg">Məqsəd</h4>

				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<?php echo $haqqCek['haqq_mision']; ?>

				<h4 class="mt-xlg">Gələcək Planlar</h4>

				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<?php echo $haqqCek['haqq_vizion']; ?>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>	