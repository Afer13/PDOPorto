<?php 
error_reporting(0);
include 'header.php';
$id=$_GET['slayd_id'];
$slaydSorgu=$db->prepare("select * from slaydlar where slayd_id=?");
$slaydSorgu->execute(array($id));
$slaydCek=$slaydSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Slayd Yenilə</h3>
              </div>

            <?php include 'css/css.php'; ?>

            </div>
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Slayd Güncəllə</h2>
                    <a href="slaydlar.php"><button style="margin-right: 10px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durum']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durum']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                  <?php }else{ ?>
                    AzCoder websayıtındakı Slaydları buradan yeniliyə bilərsiniz...
                  <?php } ?>
                    <form style="margin-top: 20px;" action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="fileUpload">Slayd Seç 
                        </label>
                      <div style="margin-top: 5px;" class="col-md-9 col-sm-9 col-xs-12">
                      <input name="slayd_sec" type="file" id="fileUpload">
                    </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Slayd Adı 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="slayd_ad" value="<?php echo $slaydCek['slayd_ad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                          <input name="slayd_id" value="<?php echo $slaydCek['slayd_id'];?>" type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Slayd Linki
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="slayd_url" value="<?php echo $slaydCek['slayd_url'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Sıra
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" id="number" name="slayd_sira" value="<?php echo $slaydCek['slayd_sira'];?>" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php if($slaydCek['slayd_status']=="1"){ ?>
                          <select name="slayd_status" class="form-control">
                            <option value="1">Aktiv</option>
                            <option value="0">Passiv</option>
                          </select>
                        <?php }elseif($slaydCek['slayd_status']=="0"){ ?>
                          <select name="slayd_status" class="form-control">
                            <option value="0">Passiv</option>
                            <option value="1">Aktiv</option>
                          </select>
                        <?php } ?>
                        </div>
                      </div>
                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button name="slaydyenile" type="submit" class="btn btn-success">Yenilə</button>
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