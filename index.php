<?php 
include 'header.php';  
$haqqSorgu=$db->prepare("select * from haqqimizda where haqq_id= ?");
$haqqSorgu->execute(array(1));
$haqqCek=$haqqSorgu->fetch(PDO::FETCH_ASSOC); 
?>
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

<div role="main" class="main">

	<?php include 'slayd.php'; ?>

	<section class="section section-default section-no-border mt-none">
		<div class="container">
			<div class="row mb-xl">
				<div class="col-md-7">
					<h2 class="mt-xl mb-none">Biz Kimik?</h2>
					<div class="divider divider-primary divider-small mb-xl">
						<hr>
					</div>
					<p class="mt-lg"></p>
					<?php echo substr($haqqCek['haqq_mezmun'],0,500); ?> ...<br>
					<a class="mt-md" href="haqqimizda.php">Daha Ətraflı <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<h2 class="mt-xl mb-none">Bizim Məqsədimiz</h2>
					<div class="divider divider-primary divider-small mb-xl">
						<hr>
					</div>
					<p class="mt-lg"></p>
					<?php echo substr($haqqCek['haqq_mision'],0,400); ?> ...<br>
					<a class="mt-md" href="haqqimizda.php">Daha Ətraflı <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-6 p-none" >
				<section class="section section-primary match-height mt-xl" style="background-image: url(img/patterns/fancy.jpg);">
					<div class="row" >
						<div class="col-half-section col-half-section-right" >
							
							<div class="divider divider-light divider-small mb-xl">
								<hr>
							</div>

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10, "loop": false, "nav": false, "dots": true}'>
								<div>
									<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
										<blockquote>
											<p class="text-light">Elmsiz praktikaya aludə olan adam gəmini sükansız və kompassız idarə etmək istəyən kapitana bənzər; o, hara üzdüyünü özü də bilməz.</p>
										</blockquote>
										<div class="testimonial-author">
											<div class="testimonial-author-thumbnail">
												<img src="images/alim/leonardo.jpg" class="img-responsive img-circle" alt="">
											</div>
											<p><strong>Leonardo da Vinçi</strong></p>
										</div>
									</div>
								</div>
								<div>
									<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
										<blockquote>
											<p class="text-light">Bilik təcrübədən gəlir, bilik bilik deyil. Bilməyin yeganə yolu təcrübədir.</p>
										</blockquote>
										<div class="testimonial-author">
											<div class="testimonial-author-thumbnail">
												<img src="images/alim/albert.jpg" class="img-responsive img-circle" alt="">
											</div>
											<p><strong>Albert Enişteyin</strong></p>
										</div>
									</div>
								</div>
								<div>
									<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
										<blockquote>
											<p class="text-light">Elm neçə əsrlər ərzində hamılıqla tikilən möhtəşəm bir məbəddir ki, onun hər bir daşını qoymaq bir çox alimlərə bütün ömrü müqabilində müyəssər olmuşdur.</p>
										</blockquote>
										<div class="testimonial-author">
											<div class="testimonial-author-thumbnail">
												<img src="images/alim/paunkare.jpg" class="img-responsive img-circle" alt="">
											</div>
											<p><strong>Puankare</strong></p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
			</div>


			<div class="col-md-6 p-none visible-md visible-lg" >
				<section class="parallax section section-parallax match-height mt-xl"  data-plugin-parallax data-plugin-options='{"speed": 1.5, "horizontalPosition": "100%"}' data-image-src="images/alim/333.jpg" style="min-height: 450px;">
				</section>
			</div>


		</div>



		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<h2 class="mt-xl mb-none">Hello World</h2>
					<div class="divider divider-primary divider-small divider-small-center mb-xl">
						<hr>
					</div>
				</div>
			</div>
			<div class="row mt-lg">
				<div class="owl-carousel owl-theme owl-team-custom show-nav-title" data-plugin-options='{"items": 4, "margin": 10, "loop": false, "nav": true, "dots": false}'>
					<?php 
					$gallSorgu=$db->prepare("SELECT * FROM galereya ORDER BY gall_sira ASC");
					$gallSorgu->execute();
					while($gallCek=$gallSorgu->fetch(PDO::FETCH_ASSOC)){
						?>
						<div class="center mb-lg">
							
								<img src="<?php echo $gallCek['gall_yol']; ?>" class="img-responsive" alt="">

							<h4 class="mt-md mb-none"><?php echo $gallCek['gall_ad']; ?></h4>
						</p>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>


</div>
<!-- -------=====================---------------- Statistika Sahesi --------------------=======-->


<div class="container">
	<div class="row">
		<div class="col-md-12 center">
			<h2 class="mt-xl mb-none">Ən son Bloq</h2>
			<div class="divider divider-primary divider-small divider-small-center mb-xl">
				<hr>
			</div>
		</div>
	</div>
	<div class="row mt-xl"><?php 
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler ORDER BY xeber_tarix DESC LIMIT 2");
	$xeberSorgu->execute();
	while($xeberCek=$xeberSorgu->fetch(PDO::FETCH_ASSOC)){if($xeberCek['xeber_status']=="1"){
		?>
		<div class="col-md-6">

			<span style="border-radius: 35px;" class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
				<span class="thumb-info-side-image-wrapper p-none hidden-xs">
					<a title="" class="text-dark" href="xeber-etrafli.php?xeber_id=<?php echo $xeberCek['xeber_id']; ?>">
						<img src="<?php echo substr($xeberCek['xeber_yol'],6); ?>" class="img-responsive" alt="" style="width: 195px;">
					</a>
				</span>
				<span class="thumb-info-caption">
					<span class="thumb-info-caption-text">
						<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="xeber-etrafli.php?xeber_id=<?php echo $xeberCek['xeber_id']; ?>"><?php echo $xeberCek['xeber_ad']; ?></a></h2>
						<span class="post-meta">
							<span><?php echo $xeberCek['xeber_tarix']; ?>
						</span>
						<?php echo substr($xeberCek['xeber_mezmun'],0,200); ?> ...</p>
						<a class="mt-md" href="xeber-etrafli.php?xeber_id=<?php echo $xeberCek['xeber_id']; ?>">Daha ətraflı <i class="fa fa-long-arrow-right"></i></a>
					</span>
				</span>
			</span>

		</div>
	<?php }} ?>
</div>
</div>

<style type="text/css">
	.transparent-style{ background-color: #ffffff; opacity:.9 ; }
</style>

<section class="section section-background section-footer" style="background-image: url(img/iletisim/indexelaqe.jpg); background-position: 50% 100%;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6 transparent-style">
				<h2 class="mt-xl mb-none">Bizimlə əlaqə saxlayın</h2>
				<p>Qarşınıza hər hansı bir problem çıxarsa bizimlə əlaqə saxlaya bilərsiniz...</p>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<form action="emeliyyat.php" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-sm-6">
								<input type="text" placeholder="Ad və Soyadınız" data-msg-required="Ad və soy adınızı daxil edin." maxlength="100" class="form-control" name="mesaj_ad1" id="name" required>
							</div>
							<div class="col-sm-6">
								<input type="email" value="" placeholder="E-mail" data-msg-required="Email adresinizi daxil edin." data-msg-email="Düzgün email daxil edin." maxlength="100" class="form-control" name="mesaj_mail1" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" value="" placeholder="Mövzu" data-msg-required="Mövzunu daxil edin." maxlength="150" class="form-control" name="mesaj_movzu1" id="subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Mesajınızı daxil edin." rows="3" class="form-control" name="mesaj_mesaj1" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" name="gondarIndex" value="Göndər" class="btn btn-primary mb-xl" data-loading-text="Göndərilir...">
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
</div>


<?php include 'footer.php'; ?>