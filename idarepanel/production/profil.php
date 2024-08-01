<?php include 'header.php'; ?>
<?php 
error_reporting(0);
$id=$_SESSION['istifadeci_id'];
$adminSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_id=?");
$adminSorgu->execute(array($id));
$adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);

?>
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>İstifadəçi Profili</h3>
			</div>
		</div>
		<style type="text/css">
			.fa-fa-ciricle{
				font-family: Comfortaa-Light;
			}
		</style>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>İstifadəçi Profili</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<?php if($_GET['Pdurum']=="ok"){?>
							<p style="color: green;">Profil şəkli yeniləndi...</p>
						<?php }if($_GET['Sdurum']=="ok"){ ?>
							<p style="color: green;">Profil şəkli silindi...</p>
						<?php }if($_GET['Tdurum']=="ok"){ ?>
							<p style="color: green;">Tam Ad yeniləndi...</p>
						<?php }if($_GET['Idurum']=="ok"){ ?>
							<p style="color: green;">Istifadəçi adı yeniləndi...</p>
						<?php }if($_GET['SIdurum']=="ok"){ ?>
							<p style="color: green;">Şifrə yeniləndi yeniləndi...</p>
						<?php } ?>


						<div class="col-md-3 col-sm-12 col-xs-12 profile_left">
							<img style="width: 220px;height: 220px;" src="<?php echo $adminCek['istifadeci_sekil']; ?>" >
						</div>
						<div class="col-md-9">
							<h2 class="fa fa-circle" style="font-size: 20px;"> Tam Ad :<i style="color: #990606;"> <?php echo $adminCek['istifadeci_adsoyad']; ?></i></h2><br>
							<h2 class="fa fa-circle" style="font-size: 20px;"> İstifadəçi Adı : <i style="color: #990606;"><?php echo $adminCek['istifadeci_ad']; ?></i></h2><br>
							<h2 class="fa fa-circle" style="font-size: 20px;"> Son yeniləmə tarixi : <i style="color: #990606;"><?php echo $adminCek['istifadeci_tarix']; ?></i></h2>

							<div align="right" class="col-md-12">
								<a href="profilyenile.php?istifadeci_id=<?php echo $_SESSION['istifadeci_id']; ?>"><button style="margin-top: 60px;width: 23%;height: 30px;font-size: 16px;" type="submit" class="fa fa-edit btn btn-success"> Yenilə</button></a>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>