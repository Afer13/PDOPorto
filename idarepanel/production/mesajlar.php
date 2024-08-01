<?php include 'header.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mesajlar</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <ul style="padding-left: 50px;" class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>

                  <div class="x_content">
                      Mesajlara buradan nəzər yetirə bilərsiniz...
                      <hr>



                  <ul class="list-unstyled msg_list">
                    <?php 
                    $mesajSorgu=$db->prepare("SELECT * FROM mesajlar ORDER BY mesaj_vaxt ASC");
                    $mesajSorgu->execute();
                    while($mesajCek=$mesajSorgu->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <li>
                      <a>
                       
                          <p><b>Tam Ad : </b><?php echo $mesajCek['mesaj_ad']; ?> <i style="margin-right: 10px" class="time"><?php echo substr($mesajCek['mesaj_vaxt'],11,14); ?>  <?php echo substr($mesajCek['mesaj_vaxt'],0,11); ?></i></p>
                          <p><b>E-Mail : </b><?php echo $mesajCek['mesaj_mail']; ?></p>
                          <p><b>Mövzu : </b><?php echo $mesajCek['mesaj_movzu']; ?></p>
                        <p><b>Mesaj : </b><br>
                          <?php echo $mesajCek['mesaj_mesaj']; ?>
                        </p>
                      </a>
                    </li><hr>
                  <?php } ?>
                  </ul>
                  


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <?php include 'footer.php'; ?>