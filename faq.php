<?php 
include 'header.php';
$faqSorgu=$db->prepare("SELECT * FROM faqlar ORDER BY faq_id DESC");
$faqSorgu->execute();

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
			<li >
				<a href="xeberler.php">
					Bloq
				</a>
			</li>
			<li class="active">
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
			<div class="col-md-9">
				<h1 class="mt-xl mb-none">Ən Çox Soruşulan Suallar</h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<?php while($faqCek=$faqSorgu->fetch(PDO::FETCH_ASSOC)){?>
					<div  class="panel-group">
						<div style="border-radius: 10px;" class="panel panel-default">
							<div style="border-radius: 10px;" class="panel-heading">
								<h4  class="panel-title">
									<a data-toggle="collapse" href="#collapse1"><i class="fa fa-chevron-circle-right"></i><?php echo $faqCek['faq_sual']; ?> </a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<p style="padding: 20px;"><?php echo $faqCek['faq_cavab']; ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
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
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>


</div>

</div>
</div>

<?php include 'footer.php'; ?>