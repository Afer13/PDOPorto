<?php 
error_reporting(0);
include 'header.php';
$ayarSorgu=$db->prepare("select * from ayarlar where ayar_id=?");
$ayarSorgu->execute(array(1));
$ayarCek=$ayarSorgu->fetch(PDO::FETCH_ASSOC);
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Parametrlər</h3>
              </div>

            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sosial Media Parametrləri</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durum']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durum']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                  <?php }else{ ?>
                    Porto websayıtındakı sosial media parametirləri buradan yeniliyə bilərsiniz...
                  <?php } ?>

                  <style type="text/css">
                    @font-face{
                      font-family: Centurion;
                      src:url(font/Centurion.otf);
                    }
                    .form-control{
                      font-family: Comfortaa-Light;
                    }
                  </style>
                  	<form action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook Adresi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="ayar_facebook" value="<?php echo $ayarCek['ayar_facebook'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstegram Adresi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="ayar_instagram" value="<?php echo $ayarCek['ayar_instagram'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter Adresi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="ayar_twitter" value="<?php echo $ayarCek['ayar_twitter'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube Adresi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="ayar_youtube" value="<?php echo $ayarCek['ayar_youtube'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="soayaryenile" type="submit" class="btn btn-success">Yenilə</button>
                        </div>
                      </form>                      
                  </div> 
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <?php include 'footer.php'; ?>