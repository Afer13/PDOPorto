<?php 
error_reporting(0);
include 'header.php';
$xidmetSorgu=$db->prepare("SELECT * from xidmetler");
$xidmetSorgu->execute();
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
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Xidmətlər Tənzimləmə</h2>
                    <a href="xidmetler.php"><button style="margin-right: 10px; height: 34px;" type="submit" class="btn btn-warning fa fa-bars"></button></a>                   
                    <a href="xidmetelaveet.php"><button style="margin-right: 10px;width: 20%;" type="submit" class="btn btn-success">Xidmət Əlavə Et</button></a>
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
                    AzCoder websayıtındakı xidmetleri buradan tənzimləyə bilərsiniz...
                  <?php } ?>
                  <hr>
                  <i class="fa fa-info-circle">Xidmət şəklinin ölçülərini 240x235 ölçülərində daxil etsəz daha yaxşı olar,çünki AzCoder veb saytındakı "Xidmətlər" bölməsi stili bu ölçülərə uyğundu.</i>
                  <div style="margin-top: 20px;" class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Xəbər Adı </th>
                            <th class="column-title">Məzmun </th>
                            <th class="column-title">Qiymət </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Şəkil </th>
                            <th style="width: 80px;" class="column-title"></th>
                            <th style="width: 80px;" class="column-title"></th>
                          </tr>
                        </thead>

                        
                        <tbody>
                          <?php
                          $say=0;
                          while ($xidmetCek=$xidmetSorgu->fetch(PDO::FETCH_ASSOC)) { $say++;?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $say; ?></td>
                            <td class=" "><?php echo $xidmetCek['xidmet_ad']; ?></td>

                            <td class=" "><a href="xidmetmezmunetrafli.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>"><button style="margin-top: 15px;" type="submit" class="btn btn-info"><i class="fa fa-outdent"> Məzmuna Bax</i></button></a></td>
                            <td class=" "><?php echo $xidmetCek['xidmet_qiymet']; ?></td>
                            <?php if($xidmetCek['xidmet_status']=="1"){?>
                              <td class=" ">Aktiv</td>
                            <?php } elseif($xidmetCek['xidmet_status']=="0"){?>
                              <td class=" ">Passiv</td>
                            <?php } ?>
                            <td class=" "><img style="width: 100px" src="<?php echo $xidmetCek['xidmet_yol']; ?>"></td>

                            <td class=" "><a href="xidmetyenile.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-primary "><i class="fa fa-pencil"> Yenilə</i></button></a></td>

                            <td class=" "><a href="emeliyyat.php?xidmet_id=<?php echo $xidmetCek['xidmet_id']; ?>&xidmet_yol=<?php echo $xidmetCek['xidmet_yol']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-danger "><i class="fa fa-trash"> Sil</i></button></a></td>
                            
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