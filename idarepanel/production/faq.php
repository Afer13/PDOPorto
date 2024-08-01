<?php 
error_reporting(0);
include 'header.php';


$faqSorgu=$db->prepare("select * from faqlar order by faq_id asc");
$faqSorgu->execute();
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Faq</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Faq Tənzimləmə</h2>                 
                    <a href="faqelaveet.php"><button style="margin-right: 10px;width: 20%;" type="submit" class="btn btn-success">Faq Əlavə Et</button></a>
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
                    AzCoder websayıtındakı faqları buradan tənzimləyə bilərsiniz...
                  <?php } ?>
                  

                  <div style="margin-top: 20px;" class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Sual </th>
                            <th class="column-title">Cavab </th>
                            <th style="width: 80px;" class="column-title"></th>
                            <th style="width: 80px;" class="column-title"></th>
                          </tr>
                        </thead>

                        
                        <tbody>
                          <?php $say=0;
                          while ($faqCek=$faqSorgu->fetch(PDO::FETCH_ASSOC)) { $say++;?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $say; ?></td>
                            <td class=" "><?php echo $faqCek['faq_sual']; ?></td>
                            <td class=" "><?php echo $faqCek['faq_cavab']; ?> </td>

                            <td class=" "><a href="faqyenile.php?faq_id=<?php echo $faqCek['faq_id']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-primary "><i class="fa fa-pencil"> Yenilə</i></button></a></td>

                            <td class=" "><a href="emeliyyat.php?faq_id=<?php echo $faqCek['faq_id']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-danger "><i class="fa fa-trash"> Sil</i></button></a></td>

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