<?php 
include 'header.php';
?>

<form action="" method="POST">
	<div class="header-search visible-lg">
		<form id="searchForm" action="page-search-results.html" method="get">
			<div class="input-group">
				<input type="text" class="form-control" name="axtarilan" id="q" placeholder="Axtar..." required="">
				<span class="input-group-btn">
					<button class="btn btn-default" name="axtar" type="submit"><i class="icon-magnifier icons"></i></button>
				</span>
			</div>
		</form>
	</div>
</form>

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
			<li class="active">
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

			<div class="col-md-10">

				<h1 class="mt-xl mb-none">Bloq</h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>


					<?php 


				$seyfede=4;
				$sorgu=$db->prepare("SELECT * FROM xeberler");
				$sorgu->execute();
				$cemi_sorgu=$sorgu->rowCount();

				$cemi_seyfe=ceil($cemi_sorgu/$seyfede);

							//eger seyfe girilmeyibse 1 hesab edek
				$seyfe=isset($_GET['seyfe']) ? (int) $_GET['seyfe'] : 1;

							//eger 1 den kicik sayi daxil edilerse 1 edek
				if($seyfe<1) $seyfe=1 ;

							//cemi seyfe sayindan cox eded daxil edilerse en son seyfe olsun
				if($seyfe>$cemi_seyfe) $seyfe=$cemi_seyfe;

				$limit=($seyfe-1)*$seyfede;
				$xeberSorgu=$db->prepare("SELECT * FROM xeberler ORDER BY xeber_tarix DESC LIMIT $limit,$seyfede");
				$xeberSorgu->execute();

				if(isset($_POST['axtar']))
				{
					$axtarilan=$_POST['axtarilan'];
					$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_ad LIKE '%$axtarilan%' ORDER BY xeber_tarix DESC");
					$xeberSorgu->execute();

				}
				include 'kateqoriya.php';
				?>




				<div class="row mt-xl">
					<div class="col-md-12">


						<?php while($xeberCek=$xeberSorgu->fetch(PDO::FETCH_ASSOC)){
							if($xeberCek['xeber_status']=="1"){
								?>


								<span style="border-radius: 20px;" class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
									<span class="thumb-info-side-image-wrapper p-none">

										<img src="<?php echo substr($xeberCek['xeber_yol'],6); ?>" class="img-responsive" alt="<?php echo $xeberCek['xeber_yol']; ?>" style="width: 195px;height: 235px;">

									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">
											<a href="xeber-etrafli.php?xeber_id=<?php echo $xeberCek['xeber_id']; ?>"><h2 class="mb-md mt-xs"><?php echo $xeberCek['xeber_ad']; ?></h2></a>
											<span class="post-meta">
												<span><?php echo substr($xeberCek['xeber_tarix'],11)." ".substr($xeberCek['xeber_tarix'],0,10); ?> |<!-- Müıllif --> </span>
											</span>
											<h6 style="font-size: 16px" ><?php echo substr($xeberCek['xeber_mezmun'],0,300); ?> ...
												<a class="mt-md" href="xeber-etrafli.php?xeber_id=<?php echo $xeberCek['xeber_id']; ?>">Daha Ətraflı <i class="fa fa-long-arrow-right"></i></a></h6>
											</span>
										</span>
									</span>

								<?php }} ?>

								<ul class="pagination">
									<?php 
									$s=0;
									while($s<$cemi_seyfe){ $s++;
										if($s==$seyfe){ ?>
											<li>
												<a class="active" href="xeberler.php?seyfe=<?php echo $s; ?>"> <?php echo $s; ?></a>
											</li>
										<?php } else { ?>
											<li class="active">
												<a href="xeberler.php?seyfe=<?php echo $s; ?>"> <?php echo $s; ?></a>
											</li>
										<?php }} ?>
									</ul>

								</div>
							</div>
							


						</div>
						<form action="" method="POST">
							<div class="col-md-2">
								<aside class="sidebar">
									<div id="combinationFilters" class="filters">

										<h4 class="mt-xl mb-md">Kateqoriya:</h4>
										<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group1">
											<li data-option-value=""><button style="width: 200px;margin-top:10px;" class="btn btn-primary" type="submit" name="proqram">Proqramlaşdırma</button></li>
											<li data-option-value=".criminal-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="texno">Texnoloji</button></li>
											<li data-option-value=".business-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="tehsil">Təhsil</button></li>
											<li data-option-value=".health-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="idman">İdman</button></li>
											<li data-option-value=".capital-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="siyaset">Siyasət</button></li>
											<li data-option-value=".capital-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="herbi">Hərbi</button></li>
											<li data-option-value=".capital-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="senet">Sənət</button></li>
											<li data-option-value=".divorce-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="gunluk">Günlük</button></li>
											<li data-option-value=".capital-law"><button style="width: 200px;margin-top:10px" class="btn btn-primary" type="submit" name="diger">Digər</button></li>
										</ul>

									</div>
								</aside>
							</div>
						</form>

					</div>

				</div>
			</div>

			
			<?php include 'footer.php'; ?>