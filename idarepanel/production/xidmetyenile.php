<?php 
error_reporting(0);
include 'header.php';
$id=$_GET['xidmet_id'];
$xidmetSorgu=$db->prepare("select * from xidmetler where xidmet_id=?");
$xidmetSorgu->execute(array($id));
$xidmetCek=$xidmetSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xidmətlər</h3>
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
                    <h2>Xidmətlər Tənzimləmə</h2>
                    <a href="xidmetler.php"><button style="margin-right: 10px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    Porto websayıtındakı xidmətləri buradan yeniliyə bilərsiniz...
                    <form action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Xidmət Ad 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                          <input name="xidmet_ad" value="<?php echo $xidmetCek['xidmet_ad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                          <input name="xidmet_id" value="<?php echo $xidmetCek['xidmet_id'];?>" type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>               
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea  id="editor1" name="xidmet_mezmun"><?php echo $xidmetCek['xidmet_mezmun']; ?></textarea>
                        </div>
                      </div>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                      </script>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Qiymət 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                          <input name="xidmet_qiymet" value="<?php echo $xidmetCek['xidmet_qiymet'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şəkil 
                        </label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <input name="xidmet_sec" type="file" id="fileUpload" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <?php if($xidmetCek['xidmet_status']=="1"){ ?>
                          <select name="xidmet_status" class="form-control">
                            <option value="1">Aktiv</option>
                            <option value="0">Passiv</option>
                          </select>
                        <?php }elseif($xidmetCek['xidmet_status']=="0"){ ?>
                          <select name="xidmet_status" class="form-control">
                            <option value="0">Passiv</option>
                            <option value="1">Aktiv</option>
                          </select>
                        <?php } ?>
                        </div>
                      </div>

                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button name="xidmetyenile" type="submit" class="btn btn-success">Yenilə</button>
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