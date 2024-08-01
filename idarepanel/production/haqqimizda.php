<?php 
error_reporting(0);
include 'header.php';
$haqqSorgu=$db->prepare("select * from haqqimizda where haqq_id=?");
$haqqSorgu->execute(array(1));
$haqqCek=$haqqSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Parametrlər</h3>
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
                  <div class="x_title">
                    <h2>"Haqqımızda" Menusu Tənzimləmə</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durum']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durum']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                  <?php }else{ ?>
                    Porto websayıtındakı "Haqqımızda" menusunu buradan yeniliyə bilərsiniz...
                  <?php } ?>
                    <form action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Başlığ 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="haqq_baslig" value="<?php echo $haqqCek['haqq_baslig'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Məzmun 
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea  id="editor1" name="haqq_mezmun"><?php echo $haqqCek['haqq_mezmun']; ?></textarea>
                        </div>
                      </div>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                      </script>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Vidio Kodu
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="haqq_vidio" value="<?php echo $haqqCek['haqq_vidio'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Vizion
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="haqq_vizion" value="<?php echo $haqqCek['haqq_vizion'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Mision
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="haqq_mision" value="<?php echo $haqqCek['haqq_mision'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button name="haqqyenile" type="submit" class="btn btn-success">Yenilə</button>
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