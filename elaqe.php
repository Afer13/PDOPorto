<?php include 'header.php'; ?>

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
			<li class="active">
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
				<h1 class="mt-xl mb-none">Bizimlə Əlaqə Saxlayın</h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				<p class="lead mb-xl mt-lg">Sizi maraqlandıran hər hansı bir mövzu və ya sizi narahat edən hər hansı bir problem varsa bizimlə əlaqə saxlayın.</p>


				<form action="emeliyyat.php" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" placeholder="Ad və Soyadınız" data-msg-required="Ad və soy adınızı daxil edin." maxlength="100" class="form-control input-lg" name="mesaj_ad" id="name" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input type="email" placeholder="E-mail" value="" data-msg-required="Email adresinizi daxil edin." data-msg-email="Düzgün email daxil edin." maxlength="100" class="form-control input-lg" name="mesaj_mail" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" placeholder="Mövzu"  data-msg-required="Mövzunu daxil edin." maxlength="150" class="form-control input-lg" name="mesaj_movzu" id="subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<textarea maxlength="1000" placeholder="Mesaj" data-msg-required="Mesajınızı daxil edin." rows="5" class="form-control input-lg" name="mesaj_mesaj" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Göndər" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Göndərilir..." name="gondar">
						</div>
					</div>

				</div>
				<div class="col-md-4 col-md-offset-1">

					<h4 class="mt-xl mb-none">Ünvan</h4>
					<div class="divider divider-primary divider-small mb-xl">
						<hr>
					</div>

					<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
						<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo $ayarCek['ayar_adres']; ?></li>
						<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo $ayarCek['ayar_tel']; ?></li>
						<li><i class="fa fa-envelope"></i> <strong>E-mail:</strong> <a href="mailto:<?php echo $ayarCek['ayar_mail']; ?>"><?php echo $ayarCek['ayar_mail']; ?></a></li>
					</ul>

					<h4 class="pt-xl mb-none">İş Saatları</h4>
					<div class="divider divider-primary divider-small mb-xl">
						<hr>
					</div>

					<ul class="list list-icons list-dark mt-xlg">
						<p><?php echo $ayarCek['ayar_isvaxti']; ?></p>
					</ul>

				</div>
			</div>
		</div>

		<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
		<iframe
  width="100%"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=API_KEY
    &q=Space+Needle,Seattle+WA">
</iframe>
	</div>
	<?php include 'footer.php'; ?>