<?php 
error_reporting(0);
include 'header.php';
$serhSorgu=$db->prepare("SELECT * FROM serhler ORDER BY serh_vaxt DESC");
$serhSorgu->execute();
?>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
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
			<li >
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
			<li class="active">
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



							<h1>Şərhlər</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<div class="post-block post-comments clearfix">
								<ul class="comments">	

									<?php while($serhCek=$serhSorgu->fetch(PDO::FETCH_ASSOC)){ ?>
										<li>
											<div class="comment">
												<div class="img-thumbnail">
													<img class="avatar" alt="" src="img/salam/coments.jpg">
												</div>
												<div class="comment-block">
													<div class="comment-arrow"></div>
													<span class="comment-by">
														<strong><?php echo $serhCek['serh_ad']; ?></strong>
													</span>
													<p><?php echo $serhCek['serh_serh']; ?></p>
													<span class="date pull-right"><?php echo substr($serhCek['serh_vaxt'],11)." ".substr($serhCek['serh_vaxt'],0,10); ?></span>
												</div>
											</div>
										</li>
									<?php } ?>
								</ul>
							</div>


							<div class="post-block post-leave-comment pb-none">
								<h4 class="mt-xl mb-none">Öz Şərhinizi Yazın <br><b><?php if($_GET['durum']=="ok"){ ?> <i style="font-size: 14px;color: green;">Şərh göndərildi</i></b><?php }elseif($_GET['durum']=="no"){ ?><b><i style="font-size: 14px;color: red;">Şərh göndərildi</i></b><?php } else{} ?></h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

								<form action="emeliyyat.php" method="POST">
									<div class="row">
										<div class="form-group">

											<div class="col-md-6">
												<label>Adınız *</label>
												<input type="text" value="" maxlength="100" class="form-control" name="serh_ad" id="name">
											</div>

											<div class="col-md-6">
												<label>E-Mail Adresiniz *</label>
												<input type="email" value="" required="" maxlength="200" class="form-control" name="serh_mail" id="email">
											</div>

										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Şərhiniz *</label>
												<textarea maxlength="1000" rows="10" class="form-control" name="serh_serh" id="comment"></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div align="right" class="col-md-12">
											<input type="submit" name="serhgonder" value="Şərh Göndər" class="btn btn-primary btn-lg" data-loading-text="Göndərilir...">
										</div>
									</div>

								</form>
							</div>

						</div>
					</article>

				</div>

			</div>
			<div class="col-md-2 col-md-offset-1">
				
				<img class="mySlides" src="images/yan/33.jpg" >
				<img class="mySlides" src="images/yan/44.jpg" >
				<img class="mySlides" src="images/yan/66.jpg" >
				<img class="mySlides" src="images/yan/55.jpg" >

				<script>
					var myIndex = 0;
					carousel();

					function carousel() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";  
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}    
							x[myIndex-1].style.display = "block";  
						setTimeout(carousel,500); //2 saniye
}
</script>
</div>

</div>

</div>
</div>

<?php include 'footer.php'; ?>