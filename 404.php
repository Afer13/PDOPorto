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
			<li>
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
			<li class="active">
				<a href="404.php">
					404
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
			<div align="center" class="col-md-12">
				<h1 style="margin: 15%;font-size: 160px;color: #cc1d1d;"><b>404</b><br><i style="font-size: 30px;color: #cc1d1d;">Error _ Səhifə tapılmadı - <a href="">Ana Menu</a></i></h1>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>	