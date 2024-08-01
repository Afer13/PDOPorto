<?php 
error_reporting(0);
include 'header.php';
$id=$_SESSION['istifadeci_id'];
$adminSorgu=$db->prepare("select * from admin where istifadeci_id=?");
$adminSorgu->execute(array($id));
$adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profil Yenilə</h3>
      </div>

      <?php include 'css/css.php'; ?>

    </div>

    
    <div class="clearfix"></div>
    <div class="row">

      

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div align="right" class="x_title">
              <h2>Profil Şəkli Güncəllə</h2>
              <a href="profil.php"><button style="margin-right: 10px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              Profil şəklini buradan yeniliyə bilərsiniz...
<form style="margin-top: 20px;" action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="fileUpload">Profil Şəkli 
                </label>
                <div style="margin-top: 5px;" class="col-md-9 col-sm-9 col-xs-12">
                  <img style="width: 150px;height: 150px" src="<?php if(strlen($adminCek['istifadeci_sekil'])>0) echo $adminCek['istifadeci_sekil']; else echo "images/profilno.png"?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="fileUpload">Şəkil Seç 
                </label>
                <div style="margin-top: 5px;" class="col-md-9 col-sm-9 col-xs-12">
                  <input name="sekil_sec" type="file" id="fileUpload">
                </div>
              </div>

              <div align="right" class="col-md-9 col-sm-8 col-xs-12 col-md-offset-3">
                <button style="width: 100px;margin-top: 15px;" name="psekilyenile" type="submit" class="btn btn-success">Yenilə</button>
                <button style="width: 50px;margin-top: 15px;" name="psekilsil" type="submit" class="btn btn-danger">Sil</button>
              </div>                        
            </div> 
          </div>
        </div>
      </form>
      <form action="emeliyyat.php" method="POST">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div align="right" class="x_title">
              <h2>Tam Ad Güncəllə</h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              Tam Adı buradan yeniliyə bilərsiniz...


              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tam Ad 
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                  <input name="istifadeci_adsoyad" value="<?php echo $adminCek['istifadeci_adsoyad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                </div>
              </div>

              <div align="right" class="col-md-9 col-sm-8 col-xs-12 col-md-offset-3">
                <button style="width: 100px;margin-top: 15px;" name="ptamadyenile" type="submit" class="btn btn-success">Yenilə</button>
              </div>


            </div> 
          </div>
        </div>
      </form>
      <form action="emeliyyat.php" method="POST">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div align="right" class="x_title">
              <h2>İstifadeci Adı Güncəllə</h2>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              İstifadeci Adı buradan yeniliyə bilərsiniz...


              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İstifadeci Adı
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                  <input name="istifadeci_ad" value="<?php echo $adminCek['istifadeci_ad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                </div>
              </div>

              <div align="right" class="col-md-9 col-sm-8 col-xs-12 col-md-offset-3">
                <button style="width: 100px;margin-top: 15px;" name="pisadyenile" type="submit" class="btn btn-success">Yenilə</button>
              </div>


            </div> 
          </div>
        </div>
      </form>

      <form action="emeliyyat.php" method="POST">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div align="right" class="x_title">
            <h2>Şifrə Güncəllə</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php if($_GET['durum']=="no"){ ?>
             <p style="color: red;">Köhnə şifrə düzgün deyil...</p>
           <?php }else{ ?>
            Şifrəni buradan yeniliyə bilərsiniz...
          <?php } ?>
          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Köhnə Şifrə
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">

              <input name="istifadeci_kohnesifre" placeholder="Köhnə şifrəni daxil edin" type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yeni Şifrə
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">

              <input name="istifadeci_yenisifre" placeholder="Yeni şifrəni daxil edin" type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

            </div>
          </div>

          <div align="right" class="col-md-9 col-sm-8 col-xs-12 col-md-offset-3">
            <button style="width: 100px;margin-top: 15px;" name="psifreyenile" type="submit" class="btn btn-success">Yenilə</button>
          </div>


        </div> 
      </div>
    </div>
</form>



  </div>


</div>
</div>
</div>
<!-- /page content -->


<?php include 'footer.php'; ?>