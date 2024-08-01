<?php 
error_reporting(0);
include 'header.php';

if(isset($_POST['axtar']))
{
  $axtarilan=$_POST['axtarilan'];
  $slaydSorgu=$db->prepare("SELECT * from slaydlar where slayd_ad LIKE '%$axtarilan%' order by slayd_sira asc");
  $slaydSorgu->execute();
}
else
{
$slaydSorgu=$db->prepare("select * from slaydlar order by slayd_sira asc");
$slaydSorgu->execute();
}
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Slaydlar</h3>
              </div>

              <?php include 'css/axtarbutton.php'; ?>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Slaydlar Tənzimləmə</h2>
                    <a href="slaydlar.php"><button style="margin-right: 10px; height: 34px;" type="submit" class="btn btn-warning fa fa-bars"></button></a>                   
                    <a href="slayelaveet.php"><button style="margin-right: 10px;width: 20%;" type="submit" class="btn btn-success">Slayd Əlavə Et</button></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durumY']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durumY']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                    <?php } elseif($_GET['durumE']=="ok"){ ?>
                    <p style="color: green;">Məlumat əlavə edildi...</p>
                  <?php } else if($_GET['durumE']=="no"){ ?>
                    <p style="color: red;">Məlumat əlavə edilə bilmədi !</p>
                  <?php } elseif($_GET['durumS']=="ok"){ ?>
                    <p style="color: green;">Məlumat silindi ...</p>
                  <?php } else if($_GET['durumS']=="no"){ ?>
                    <p style="color: red;">Məlumat silinə bilmədi !</p>
                  <?php }else{ ?>
                    AzCoder websayıtındakı slaydları buradan tənzimləyə bilərsiniz...
                  <?php } ?>
                  

                  <div style="margin-top: 20px;" class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Slayd </th>
                            <th class="column-title">Slayd Adı </th>
                            <th class="column-title">Link </th>
                            <th class="column-title">Sıra </th>
                            <th class="column-title">Status </th>
                            <th style="width: 80px;" class="column-title"></th>
                            <th style="width: 80px;" class="column-title"></th>
                          </tr>
                        </thead>

                        
                        <tbody>
                          <?php while ($slaydCek=$slaydSorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr class="even pointer">
                            <td class=" "><img style="width: 100px" src="<?php echo $slaydCek['slayd_yol']; ?>"></td>
                            <td class=" "><?php echo $slaydCek['slayd_ad']; ?></td>
                            <td class=" "><?php echo $slaydCek['slayd_url']; ?> </td>
                            <td class=" "><?php echo $slaydCek['slayd_sira']; ?></td>
                            <?php if($slaydCek['slayd_status']=="1"){?>
                              <td class=" ">Aktiv</td>
                            <?php } elseif($slaydCek['slayd_status']=="0"){?>
                              <td class=" ">Passiv</td>
                            <?php } ?>
                            <td class=" "><a href="slaydyenile.php?slayd_id=<?php echo $slaydCek['slayd_id']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-primary "><i class="fa fa-pencil"> Yenilə</i></button></a></td>
                                <td class=" "><a href="emeliyyat.php?slayd_id=<?php echo $slaydCek['slayd_id']; ?>&slayd_yol=<?php echo $slaydCek['slayd_yol']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-danger "><i class="fa fa-trash"> Sil</i></button></a></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>


                  </div> 
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <?php include 'footer.php'; ?>