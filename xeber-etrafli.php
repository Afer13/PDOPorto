<?php 
include 'header.php';
error_reporting(0);

$id=$_GET['xeber_id'];
$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_id=?");
$xeberSorgu->execute(array($id));
$xeberCek=$xeberSorgu->fetch(PDO::FETCH_ASSOC);

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

			<div class="col-md-9">

				<div class="blog-posts single-post mt-xl">

					<article class="post post-large blog-single-post">


						<div class="post-content">

							<h1><?php echo $xeberCek['xeber_ad']; ?></h1>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="post-meta">
								<span><i class="fa fa-clock-o"></i><?php echo substr($xeberCek['xeber_tarix'],11)." ".substr($xeberCek['xeber_tarix'],0,10); ?></span>
							</div>

							<img src="<?php echo substr($xeberCek['xeber_yol'],6); ?>" class="col-md-6" alt="<?php echo $xeberCek['xeber_ad']; ?>">

							<h6><?php echo $xeberCek['xeber_mezmun']; ?></h6>


							<div class="pt-sm pb-xs">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style">
									<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
									<a class="addthis_button_tweet"></a>
									<a class="addthis_button_pinterest_pinit"></a>
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
								<!-- AddThis Button END -->
							</div>




						</div>
					</article>

				</div>

			</div>

		</div>

	</div>
</div>

<?php include 'footer.php'; ?>