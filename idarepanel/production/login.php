<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>İdarəetmə Paneli | LogIn</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body style="background-image: url(images/login.jpg);" class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div  style="background-color: white;opacity: .8;width: 400px;border-radius: 15px;" class="animate form login_form ">
        <section class="login_content">

          <form style="width: 350px;margin-left: 25px;" action="emeliyyat.php" method="POST">

            <h1>İdarəetmə | Giriş</h1>
            <div>
              <input  type="text" class="form-control" name="istifadeci_ad" placeholder="İstifadəçi Ad" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="istifadeci_sifre" placeholder="İstifadəçi Şifrə" required="" />
            </div>
            <div>
              <button style="width: 100%;" class="btn btn-primary" name="giriset" >Giriş Et</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <?php if($_GET['durum']=="no"){ ?>
                <p >İstifadəçi məlumatları səhvdir...</p>             
              <?php } ?>
              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-legal"></i>  AzCoder  İ.P.</h1>
                <p>©2022 Afər Rəhimov tərəfindən kodlanıb. | Bütün hüquqlar qorunur.</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
