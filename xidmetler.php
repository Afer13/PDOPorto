<?php 
include 'header.php';
$xidmetSorgu=$db->prepare("SELECT * FROM xidmetler ");
$xidmetSorgu->execute();
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

				<div class="row">
					<?php while($xidmetCek=$xidmetSorgu->fetch(PDO::FETCH_ASSOC)){ ?>
					<span style="margin-left: 10px;margin-bottom: 15px;border-radius: 10px;" class="thumb-info col-md-3 ">
						<span class="thumb-info-side-image-wrapper p-none hidden-xs">
							<a href="xidmet-etrafli.php?xidmet_id1=<?php echo $xidmetCek['xidmet_id']; ?>">
								<img style="margin-top: 10px;margin-right: 30px;border-radius: 10px" src="<?php echo substr($xidmetCek['xidmet_yol'],6); ?>" class="img-responsive" alt="" style="width: 195px;"></a>
							
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h2 class="mb-md mt-xs"><a href="xidmet-etrafli.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>"><?php echo $xidmetCek['xidmet_ad']; ?></a></h2>
								<span class="post-meta">
									<span>Xidmət akdivdir | Tarix : --:--</span>
								</span>
								 <?php echo substr($xidmetCek['xidmet_mezmun'],0,200) ?> ...
							</span>
						</span>
					</span>
				<?php } ?>
				</div>

			</div>

		</div>

	</div>
</div>

<?php include 'footer.php'; ?>