<?php 
error_reporting(0);
include 'header.php';
$id=$_GET['xeber_id'];
$xeberSorgu=$db->prepare("select * from xeberler where xeber_id=?");
$xeberSorgu->execute(array($id));
$xeberCek=$xeberSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xəbərlər</h3>
              </div>

            </div>
            <style type="text/css">
                    @font-face{
                      font-family: Centurion;
                      src:url(font/Centurion.otf);
                    }
                    .form-control{
                      font-family: Comfortaa-Light;
                    }
                  </style>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Xəbərlər Tənzimləmə</h2>
                    <a href="xeberler.php"><button style="margin-right: 10px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durumX']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durumX']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                  <?php }else{ ?>
                    Porto websayıtındakı xəbərləri buradan yeniliyə bilərsiniz...
                  <?php } ?>
                    <form action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Xəbər Ad 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                          <input name="xeber_ad" value="<?php echo $xeberCek['xeber_ad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                          <input name="xeber_id" value="<?php echo $xeberCek['xeber_id'];?>" type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <?php include 'css/xeber-kateqoriya.php'; ?>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tarix 
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="xeber_tarix" value="<?php echo substr($xeberCek['xeber_tarix'],0,10);?>" type="date" id="first-name" required="required" class="form-control">
                        </div>
                        <label class="control-label col-md-1" for="first-name">Saat 
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="xeber_saat" value="<?php echo substr($xeberCek['xeber_tarix'],11);?>" type="time" id="first-name" required="required" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea  id="editor1" name="xeber_mezmun"><?php echo $xeberCek['xeber_mezmun']; ?></textarea>
                        </div>
                      </div>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                      </script>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şəkil 
                        </label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <input name="xeber_sec" type="file" id="fileUpload" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php if($xeberCek['xeber_status']=="1"){ ?>
                          <select name="xeber_status" class="form-control">
                            <option value="1">Aktiv</option>
                            <option value="0">Passiv</option>
                          </select>
                        <?php }elseif($xeberCek['xeber_status']=="0"){ ?>
                          <select name="xeber_status" class="form-control">
                            <option value="0">Passiv</option>
                            <option value="1">Aktiv</option>
                          </select>
                        <?php } ?>
                        </div>
                      </div>

                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button name="xeberyenile" type="submit" class="btn btn-success">Yenilə</button>
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