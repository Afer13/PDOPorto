<?php include 'header.php'; 
$id=$_GET['xidmet_id'];
$xidmetSorgu=$db->prepare("SELECT * from xidmetler where xidmet_id=?");
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
                <h3>"<?php echo $xidmetCek['xidmet_ad']; ?>" adlı xidmətin məzmunu</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <a href="xidmetler.php"><button style="margin-top: 15px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
                    <hr>
                    <div class="clearfix"></div>

                  <div class="x_content">
                      <textarea  id="editor1" name="xidmet_mezmun"><?php echo $xidmetCek['xidmet_mezmun']; ?></textarea>
                      <script>
                        CKEDITOR.replace( 'editor1' );
                      </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <?php include 'footer.php'; ?>