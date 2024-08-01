<?php
ob_start();
session_start();
include 'baglan.php';
include 'css/css.php';
if(!isset($_SESSION['istifadeci_id']))
{
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-legal"></i> <span>Idarəetmə Paneli</span></a>
          </div>

          <div class="clearfix"></div>
          <?php 
          $id=$_SESSION['istifadeci_id'];
          $adminSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_id=?");
          $adminSorgu->execute(array($id));
          $adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);
          ?>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo $adminCek['istifadeci_sekil']; ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Hər vaxtınız xeyir</span>
              <h2><?php echo $adminCek['istifadeci_adsoyad']; ?></h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <?php include 'sidebar.php'; ?>

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?php echo $adminCek['istifadeci_adsoyad']; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="profil.php"> Profil</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Çıxış Et</a></li>
                </ul>
              </li>



              <?php 
              $mesajSay=0;
              $mesajSorgu=$db->prepare("SELECT * FROM mesajlar");
              $mesajSorgu->execute();
              while($mesajCek=$mesajSorgu->fetch(PDO::FETCH_ASSOC)){
                $mesajSay++;}
                ?>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?php echo $mesajSay; ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php 
                    $mesajSorgu=$db->prepare("SELECT * FROM mesajlar ORDER BY mesaj_vaxt ASC LIMIT 4");
                    $mesajSorgu->execute();
                    while($mesajCek=$mesajSorgu->fetch(PDO::FETCH_ASSOC)){ ?>

                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span><?php echo $mesajCek['mesaj_ad']; ?></span>
                            <span class="time"><?php echo $mesajCek['mesaj_vaxt']; ?></span>
                          </span>
                          <span class="message">
                            <?php echo substr($mesajCek['mesaj_mesaj'],0,100);?>...
                          </span>
                        </a>
                      </li>

                    <?php } ?>
                    <div class="text-center">
                      <a href="mesajlar.php">
                        <strong>Bütün mesajlara bax</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->