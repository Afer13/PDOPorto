<?php 
ob_start();
session_start();
include 'baglan.php';
//----------==========--------------LogIn-------------------------========------
if(isset($_POST['giriset']))
{
	$istifadeci_ad=$_POST['istifadeci_ad'];
	$istifadeci_sifre=md5($_POST['istifadeci_sifre']);
	if($istifadeci_ad && $istifadeci_sifre)
	{
		$girisSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_ad=:istifadeci_ad AND istifadeci_sifre=:istifadeci_sifre");
		$girisSorgu->execute(array(
			'istifadeci_ad'=>$istifadeci_ad,
			'istifadeci_sifre'=>$istifadeci_sifre
		));
		$girisSay=$girisSorgu->rowCount();
		$girisCek=$girisSorgu->fetch(PDO::FETCH_ASSOC);
		if($girisSay>0)
		{
			$_SESSION['istifadeci_id']=$girisCek['istifadeci_id'];
			header("Location:index.php");
		}
		else
		{
			header("Location:login.php?durum=no");
		}
	}
}



//----------==========--------------Umumi Ayrlar Yenileme-------------------------========------
if(isset($_POST['uayaryenile']))
{
	$UayarYenile=$db->prepare("UPDATE ayarlar SET ayar_sayturl=:ayar_sayturl,ayar_logoheader=:ayar_logoheader,ayar_logofooter=:ayar_logofooter,ayar_title=:ayar_title,ayar_description=:ayar_description,ayar_keywords=:ayar_keywords,ayar_author=:ayar_author WHERE ayar_id= :ayar_id");
	$UayarYenile->execute(array(
		'ayar_sayturl'=>$_POST['ayar_sayturl'],
		'ayar_logoheader'=>$_POST['ayar_logoheader'],
		'ayar_logofooter'=>$_POST['ayar_logofooter'],
		'ayar_title'=>$_POST['ayar_title'],
		'ayar_description'=>$_POST['ayar_description'],
		'ayar_keywords'=>$_POST['ayar_keywords'],
		'ayar_author'=>$_POST['ayar_author'],
		'ayar_id'=>1
	));
	if($UayarYenile)
	{
		header("Location:umumiparametrler.php?durum=ok");
	}
	else
	{
		header("Location:umumiparametrler.php?durum=no");
	}
}


//----------==========--------------Elaqe Ayrlar Yenileme-------------------------========------
if(isset($_POST['elayaryenile']))
{
	$ELayarYenile=$db->prepare("UPDATE ayarlar SET ayar_tel=:ayar_tel,ayar_gsm=:ayar_gsm,ayar_faks=:ayar_faks,ayar_mail=:ayar_mail,ayar_adres=:ayar_adres,ayar_olka=:ayar_olka,ayar_seher=:ayar_seher,ayar_isvaxti=:ayar_isvaxti WHERE ayar_id= :ayar_id");
	$ELayarYenile->execute(array(
		'ayar_tel'=>$_POST['ayar_tel'],
		'ayar_gsm'=>$_POST['ayar_gsm'],
		'ayar_faks'=>$_POST['ayar_faks'],
		'ayar_mail'=>$_POST['ayar_mail'],
		'ayar_adres'=>$_POST['ayar_adres'],
		'ayar_olka'=>$_POST['ayar_olka'],
		'ayar_seher'=>$_POST['ayar_seher'],
		'ayar_isvaxti'=>$_POST['ayar_isvaxti'],
		'ayar_id'=>1
	));
	if($ELayarYenile)
	{
		header("Location:elaqeparametrler.php?durum=ok");
	}
	else
	{
		header("Location:elaqeparametrler.php?durum=no");
	}
}



//----------==========--------------Sosial Media Ayrlar Yenileme---------------------========------
if(isset($_POST['soayaryenile']))
{
	$SOayarYenile=$db->prepare("UPDATE ayarlar SET ayar_facebook=:ayar_facebook,ayar_instagram=:ayar_instagram,ayar_twitter=:ayar_twitter,ayar_youtube=:ayar_youtube WHERE ayar_id= :ayar_id");
	$SOayarYenile->execute(array(
		'ayar_facebook'=>$_POST['ayar_facebook'],
		'ayar_instagram'=>$_POST['ayar_instagram'],
		'ayar_twitter'=>$_POST['ayar_twitter'],
		'ayar_youtube'=>$_POST['ayar_youtube'],
		'ayar_id'=>1
	));
	if($SOayarYenile)
	{
		header("Location:sosialparametrler.php?durum=ok");
	}
	else
	{
		header("Location:sosialparametrler.php?durum=no");
	}
}



//----------==========--------------API Ayrlar Yenileme---------------------========------
if(isset($_POST['apiayaryenile']))
{
	$APIayarYenile=$db->prepare("UPDATE ayarlar SET ayar_recapctha=:ayar_recapctha,ayar_googlemap=:ayar_googlemap,ayar_analystic=:ayar_analystic WHERE ayar_id= :ayar_id");
	$APIayarYenile->execute(array(
		'ayar_recapctha'=>$_POST['ayar_recapctha'],
		'ayar_googlemap'=>$_POST['ayar_googlemap'],
		'ayar_analystic'=>$_POST['ayar_analystic'],
		'ayar_id'=>1
	));
	if($APIayarYenile)
	{
		header("Location:apiparametrler.php?durum=ok");
	}
	else
	{
		header("Location:apiparametrler.php?durum=no");
	}
}


//----------==========--------------Mail Ayrlar Yenileme---------------------========------
if(isset($_POST['mailayaryenile']))
{
	$MAayarYenile=$db->prepare("UPDATE ayarlar SET ayar_smtphost=:ayar_smtphost,ayar_smtpuser=:ayar_smtpuser,ayar_smtppassword=:ayar_smtppassword,ayar_smtpport=:ayar_smtpport WHERE ayar_id= :ayar_id");
	$MAayarYenile->execute(array(
		'ayar_smtphost'=>$_POST['ayar_smtphost'],
		'ayar_smtpuser'=>$_POST['ayar_smtpuser'],
		'ayar_smtppassword'=>$_POST['ayar_smtppassword'],
		'ayar_smtpport'=>$_POST['ayar_smtpport'],
		'ayar_id'=>1
	));
	if($MAayarYenile)
	{
		header("Location:mailparametrler.php?durum=ok");
	}
	else
	{
		header("Location:mailparametrler.php?durum=no");
	}
}



//----------==========--------------Haqqinda Yenileme-------------------------========------
if(isset($_POST['haqqyenile']))
{
	$haqqYenile=$db->prepare("UPDATE haqqimizda SET haqq_baslig=:haqq_baslig,haqq_mezmun=:haqq_mezmun,haqq_vidio=:haqq_vidio,haqq_vizion=:haqq_vizion,haqq_mision=:haqq_mision WHERE haqq_id= :haqq_id");
	$haqqYenile->execute(array(
		'haqq_baslig'=>$_POST['haqq_baslig'],
		'haqq_mezmun'=>$_POST['haqq_mezmun'],
		'haqq_vidio'=>$_POST['haqq_vidio'],
		'haqq_vizion'=>$_POST['haqq_vizion'],
		'haqq_mision'=>$_POST['haqq_mision'],
		'haqq_id'=>1
	));
	if($haqqYenile)
	{
		header("Location:haqqimizda.php?durum=ok");
	}
	else
	{
		header("Location:haqqimizda.php?durum=no");
	}
}



//----------==========--------------Slayd Yenileme-------------------------========------
if(isset($_POST['slaydyenile']))
{
	if($_FILES['slayd_sec']["size"]==0)
	{
		$slaydYenile=$db->prepare("UPDATE slaydlar SET slayd_ad=:slayd_ad,slayd_url=:slayd_url,slayd_sira=:slayd_sira,slayd_status=:slayd_status WHERE slayd_id= :slayd_id");
		$slaydYenile->execute(array(
			'slayd_ad'=>$_POST['slayd_ad'],
			'slayd_url'=>$_POST['slayd_url'],
			'slayd_sira'=>$_POST['slayd_sira'],
			'slayd_status'=>$_POST['slayd_status'],
			'slayd_id'=>$_POST['slayd_id']
		));
		if($slaydYenile)
		{
			header("Location:slaydlar.php?durumY=ok");
		}
		else
		{
			header("Location:slaydlar.php?durumY=no");
		}
	}
	else
	{


		$slaydyukyer="../../images/slaydlar";
		@$name=$_FILES['slayd_sec']["name"];
		@$tmp_name=$_FILES['slayd_sec']["tmp_name"];

		$ferqliad1=rand(2000,3000);
		$ferqliad2=rand(3000,4000);

		$ferqliad=$ferqliad1.$ferqliad2;

		$slaydyol=$slaydyukyer."/".$ferqliad.$name;

		@move_uploaded_file($tmp_name,"$slaydyukyer/$ferqliad$name");

		$slaydYenile=$db->prepare("UPDATE slaydlar SET slayd_yol=:slayd_yol,slayd_ad=:slayd_ad,slayd_url=:slayd_url,slayd_sira=:slayd_sira,slayd_status=:slayd_status WHERE slayd_id= :slayd_id");
		$slaydYenile->execute(array(
			'slayd_yol'=>$slaydyol,
			'slayd_ad'=>$_POST['slayd_ad'],
			'slayd_url'=>$_POST['slayd_url'],
			'slayd_sira'=>$_POST['slayd_sira'],
			'slayd_status'=>$_POST['slayd_status'],
			'slayd_id'=>$_POST['slayd_id']
		));
		if($slaydYenile)
		{
			header("Location:slaydlar.php?durumY=ok");
		}
		else
		{
			header("Location:slaydlar.php?durumY=no");
		}


	}
}




//----------==========--------------Slayd Elave Et-------------------------========------
if(isset($_POST['slaydelaveet']))
{
	$slaydyukyer="../../images/slaydlar";
	@$name=$_FILES['slayd_sec']["name"];
	@$tmp_name=$_FILES['slayd_sec']["tmp_name"];

	$ferqliad1=rand(2000,3000);
	$ferqliad2=rand(3000,4000);

	$ferqliad=$ferqliad1.$ferqliad2;

	$slaydyol=$slaydyukyer."/".$ferqliad.$name;

	@move_uploaded_file($tmp_name,"$slaydyukyer/$ferqliad$name");

	$slaydEl=$db->prepare("INSERT INTO slaydlar(slayd_ad,slayd_yol,slayd_url,slayd_sira,slayd_status) VALUES(:slayd_ad,:slayd_yol,:slayd_url,:slayd_sira,:slayd_status)");
	$slaydEl->execute(array(
		'slayd_ad'=>$_POST['slayd_ad'],
		'slayd_yol'=>$slaydyol,
		'slayd_url'=>$_POST['slayd_url'],
		'slayd_sira'=>$_POST['slayd_sira'],
		'slayd_status'=>$_POST['slayd_status']
	));

	if($slaydEl)
	{
		header("Location:slaydlar.php?durumE=ok");
	}
	else
	{
		header("Location:slaydlar.php?durumE=no");
	}
}




//----------==========--------------Slayd Sil-------------------------========-----
if($_GET['slayd_id'])
{
	$id=$_GET['slayd_id'];
	$slaydSil=$db->prepare("DELETE FROM slaydlar WHERE slayd_id=?");
	$slaydSil->execute(array($id));

	if($slaydSil)
	{
		$yol=$_GET['slayd_yol'];
		unlink("$yol");
		header("Location:slaydlar.php?durumS=ok");
	}
	else
	{
		header("Location:slaydlar.php?durumS=no");
	}
}





//----------==========--------------Xeber Yenileme-------------------------========------
if(isset($_POST['xeberyenile']))
{
	if($_FILES['xeber_sec']["size"]==0)
	{

		$xeber_tarix=$_POST['xeber_tarix']." ".$_POST['xeber_saat'];

		$xeberYenile=$db->prepare("UPDATE xeberler SET xeber_ad=:xeber_ad,xeber_tarix=:xeber_tarix,xeber_mezmun=:xeber_mezmun,xeber_status=:xeber_status WHERE xeber_id= :xeber_id");
		$xeberYenile->execute(array(
			'xeber_ad'=>$_POST['xeber_ad'],
			'xeber_tarix'=>$xeber_tarix,
			'xeber_mezmun'=>$_POST['xeber_mezmun'],
			'xeber_status'=>$_POST['xeber_status'],
			'xeber_id'=>$_POST['xeber_id']
		));
		if($xeberYenile)
		{
			header("Location:xeberler.php?durumY=ok");
		}
		else
		{
			header("Location:xeberler.php?durumY=no");
		}
	}
	else
	{

		$xeber_tarix=$_POST['xeber_tarix']." ".$_POST['xeber_saat'];

		$xeberyukyer="../../images/xeberler";
		@$name=$_FILES['xeber_sec']["name"];
		@$tmp_name=$_FILES['xeber_sec']["tmp_name"];

		$ferqliad1=rand(2000,3000);
		$ferqliad2=rand(3000,4000);

		$ferqliad=$ferqliad1.$ferqliad2;

		$xeberyol=$xeberyukyer."/".$ferqliad.$name;

		@move_uploaded_file($tmp_name,"$xeberyukyer/$ferqliad$name");

		$xeberYenile=$db->prepare("UPDATE xeberler SET xeber_yol=:xeber_yol,xeber_ad=:xeber_ad,xeber_kateqoriya=:xeber_kateqoriya,xeber_tarix=:xeber_tarix,xeber_status=:xeber_status,xeber_mezmun=:xeber_mezmun WHERE xeber_id= :xeber_id");
		$xeberYenile->execute(array(
			'xeber_yol'=>$xeberyol,
			'xeber_ad'=>$_POST['xeber_ad'],
			'xeber_kateqoriya'=>$_POST['xeber_kateqoriya'],
			'xeber_tarix'=>$xeber_tarix,
			'xeber_mezmun'=>$_POST['xeber_mezmun'],
			'xeber_status'=>$_POST['xeber_status'],
			'xeber_id'=>$_POST['xeber_id']
		));
		if($xeberYenile)
		{
			header("Location:xeberler.php?durumY=ok");
		}
		else
		{
			header("Location:xeberler.php?durumY=no");
		}


	}
}


//----------==========--------------xeber Elave Et-------------------------========------
if(isset($_POST['xeberelaveet']))
{
	$xeber_tarix=$_POST['xeber_tarix']." ".$_POST['xeber_saat'];

	$xeberyukyer="../../images/xeberler";
	@$name=$_FILES['xeber_sec']["name"];
	@$tmp_name=$_FILES['xeber_sec']["tmp_name"];

	$ferqliad1=rand(2000,3000);
	$ferqliad2=rand(3000,4000);

	$ferqliad=$ferqliad1.$ferqliad2;

	$xeberyol=$xeberyukyer."/".$ferqliad.$name;



	@move_uploaded_file($tmp_name,"$xeberyukyer/$ferqliad$name");

	$xeberEl=$db->prepare("INSERT INTO xeberler(xeber_ad,xeber_kateqoriya,xeber_yol,xeber_tarix,xeber_mezmun,xeber_status) VALUES(:xeber_ad,:xeber_kateqoriya,:xeber_yol,:xeber_tarix,:xeber_mezmun,:xeber_status)");
	$xeberEl->execute(array(
		'xeber_ad'=>$_POST['xeber_ad'],
		'xeber_kateqoriya'=>$_POST['xeber_kateqoriya'],
		'xeber_yol'=>$xeberyol,
		'xeber_tarix'=>$xeber_tarix,
		'xeber_mezmun'=>$_POST['xeber_mezmun'],
		'xeber_status'=>$_POST['xeber_status']
	));

	if($xeberEl)
	{
		header("Location:xeberler.php?durumE=ok");
	}
	else
	{
		header("Location:xeberler.php?durumE=no");
	} 
}



//----------==========--------------xeber Sil-------------------------========-----
if($_GET['xeber_id'])
{
	$id=$_GET['xeber_id'];
	$xeberSil=$db->prepare("DELETE FROM xeberler WHERE xeber_id=?");
	$xeberSil->execute(array($id));

	if($xeberSil)
	{
		$yol=$_GET['xeber_yol'];
		unlink("$yol");
		header("Location:xeberler.php?durumS=ok");
	}
	else
	{
		header("Location:xeberlar.php?durumS=no");
	}
}



//----------==========--------------Faq Yenileme-------------------------========------
if(isset($_POST['faqyenile']))
{
	
	$faqYenile=$db->prepare("UPDATE faqlar SET faq_sual=:faq_sual,faq_cavab=:faq_cavab WHERE faq_id= :faq_id");
	$faqYenile->execute(array(
		'faq_sual'=>$_POST['faq_sual'],
		'faq_cavab'=>$_POST['faq_cavab'],
		'faq_id'=>$_POST['faq_id']
	));
	if($faqYenile)
	{
		header("Location:faq.php?durumY=ok");
	}
	else
	{
		header("Location:faq.php?durumY=no");
	}


}




//----------==========--------------faq Elave Et-------------------------========------
if(isset($_POST['faqelaveet']))
{

	$faqEl=$db->prepare("INSERT INTO faqlar(faq_sual,faq_cavab) VALUES(:faq_sual,:faq_cavab)");
	$faqEl->execute(array(
		'faq_sual'=>$_POST['faq_sual'],
		'faq_cavab'=>$_POST['faq_cavab']
	));

	if($faqEl)
	{
		header("Location:faq.php?durumE=ok");
	}
	else
	{
		header("Location:faq.php?durumE=no");
	}
}




//----------==========--------------faq Sil-------------------------========-----
if($_GET['faq_id'])
{
	$id=$_GET['faq_id'];
	$faqSil=$db->prepare("DELETE FROM faqlar WHERE faq_id=?");
	$faqSil->execute(array($id));

	if($faqSil)
	{
		header("Location:faq.php?durumS=ok");
	}
	else
	{
		header("Location:faq.php?durumS=no");
	}
}



//----------==========--------------xidmet Yenileme-------------------------========------
if(isset($_POST['xidmetyenile']))
{
	if($_FILES['xidmet_sec']["size"]==0)
	{


		$xidmetYenile=$db->prepare("UPDATE xidmetler SET xidmet_ad=:xidmet_ad,xidmet_mezmun=:xidmet_mezmun,xidmet_qiymet=:xidmet_qiymet,xidmet_status=:xidmet_status WHERE xidmet_id= :xidmet_id");
		$xidmetYenile->execute(array(
			'xidmet_ad'=>$_POST['xidmet_ad'],
			'xidmet_mezmun'=>$_POST['xidmet_mezmun'],
			'xidmet_qiymet'=>$_POST['xidmet_qiymet'],
			'xidmet_status'=>$_POST['xidmet_status'],
			'xidmet_id'=>$_POST['xidmet_id']
		));
		if($xidmetYenile)
		{
			header("Location:xidmetler.php?durumY=ok");
		}
		else
		{
			header("Location:xidmetler.php?durumY=no");
		}
	}
	else
	{

		$xidmetyukyer="../../images/xidmetler";
		@$name=$_FILES['xidmet_sec']["name"];
		@$tmp_name=$_FILES['xidmet_sec']["tmp_name"];

		$ferqliad1=rand(2000,3000);
		$ferqliad2=rand(3000,4000);

		$ferqliad=$ferqliad1.$ferqliad2;

		$xidmetyol=$xidmetyukyer."/".$ferqliad.$name;

		@move_uploaded_file($tmp_name,"$xidmetyukyer/$ferqliad$name");

		$xidmetYenile=$db->prepare("UPDATE xidmetler SET xidmet_yol=:xidmet_yol,xidmet_ad=:xidmet_ad,xidmet_qiymet=:xidmet_qiymet,xidmet_status=:xidmet_status,xidmet_mezmun=:xidmet_mezmun WHERE xidmet_id= :xidmet_id");
		$xidmetYenile->execute(array(
			'xidmet_yol'=>$xidmetyol,
			'xidmet_ad'=>$_POST['xidmet_ad'],
			'xidmet_qiymet'=>$_POST['xidmet_qiymet'],
			'xidmet_mezmun'=>$_POST['xidmet_mezmun'],
			'xidmet_status'=>$_POST['xidmet_status'],
			'xidmet_id'=>$_POST['xidmet_id']
		));
		if($xidmetYenile)
		{
			header("Location:xidmetler.php?durumY=ok");
		}
		else
		{
			header("Location:xidmetler.php?durumY=no");
		}


	}
}


//----------==========--------------xidmet Elave Et-------------------------========------
if(isset($_POST['xidmetelaveet']))
{
	$xidmetyukyer="../../images/xidmetler";
	@$name=$_FILES['xidmet_sec']["name"];
	@$tmp_name=$_FILES['xidmet_sec']["tmp_name"];

	$ferqliad1=rand(2000,3000);
	$ferqliad2=rand(3000,4000);

	$ferqliad=$ferqliad1.$ferqliad2;

	$xidmetyol=$xidmetyukyer."/".$ferqliad.$name;



	@move_uploaded_file($tmp_name,"$xidmetyukyer/$ferqliad$name");

	$xidmetEl=$db->prepare("INSERT INTO xidmetler(xidmet_ad,xidmet_qiymet,xidmet_yol,xidmet_mezmun,xidmet_status) VALUES(:xidmet_ad,:xidmet_qiymet,:xidmet_yol,:xidmet_mezmun,:xidmet_status)");
	$xidmetEl->execute(array(
		'xidmet_ad'=>$_POST['xidmet_ad'],
		'xidmet_qiymet'=>$_POST['xidmet_qiymet'],
		'xidmet_yol'=>$xidmetyol,
		'xidmet_mezmun'=>$_POST['xidmet_mezmun'],
		'xidmet_status'=>$_POST['xidmet_status']
	));

	if($xidmetEl)
	{
		header("Location:xidmetler.php?durumE=ok");
	}
	else
	{
		header("Location:xidmetler.php?durumE=no");
	} 
}



//----------==========--------------xidmet Sil-------------------------========-----
if($_GET['xidmet_id'])
{
	$id=$_GET['xidmet_id'];
	$xidmetSil=$db->prepare("DELETE FROM xidmetler WHERE xidmet_id=?");
	$xidmetSil->execute(array($id));

	if($xidmetSil)
	{
		$yol=$_GET['xidmet_yol'];
		unlink("$yol");
		header("Location:xidmetler.php?durumS=ok");
	}
	else
	{
		header("Location:xidmetlar.php?durumS=no");
	}
}



//----------==========--------------Profil Şekli Yenile-------------------------========-----
if(isset($_POST['psekilyenile']))
{
	$istifadeci_tarix=date('Y-m-d H:i');
	if($_FILES['sekil_sec']["size"]==0)
	{
		header("Location:profil.php");
	}
	else
	{
		$id=$_SESSION['istifadeci_id'];
		$adminSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_id=?");
		$adminSorgu->execute(array($id));
		$adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);
		$kohneyol=$adminCek['istifadeci_sekil'];



		$profyukyer="images/proffoto";
		@$name=$_FILES['sekil_sec']["name"];
		@$tmp_name=$_FILES['sekil_sec']["tmp_name"];

		$ferqliad1=rand(2000,3000);
		$ferqliad2=rand(3000,4000);

		$ferqliad=$ferqliad1.$ferqliad2;

		$sekilyol=$profyukyer."/".$ferqliad.$name;

		@move_uploaded_file($tmp_name,"$profyukyer/$ferqliad$name");

		$profYenile=$db->prepare("UPDATE admin SET istifadeci_sekil=:istifadeci_sekil,istifadeci_tarix=:istifadeci_tarix WHERE istifadeci_id= :istifadeci_id");
		$profYenile->execute(array(
			'istifadeci_sekil'=>$sekilyol,
			'istifadeci_tarix'=>$istifadeci_tarix,
			'istifadeci_id'=>$_SESSION['istifadeci_id']
		));
		if($profYenile)
		{
			unlink("$kohneyol");
			header("Location:profil.php?Pdurum=ok");
		}
		else
		{
			header("Location:profil.php?Pdurum=no");
		}
	}
}

//----------==========--------------Profil Şekli Sil-------------------------========-----
if(isset($_POST['psekilsil']))
{

	$id=$_SESSION['istifadeci_id'];
	$adminSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_id=?");
	$adminSorgu->execute(array($id));
	$adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);
	$kohneyol=$adminCek['istifadeci_sekil'];


	$istifadeci_tarix=date('Y-m-d H:i');
	$id=$_SESSION['istifadeci_id'];
	$yol="images/profilno.png";
	$profSil=$db->prepare("UPDATE admin SET istifadeci_tarix=:istifadeci_tarix,istifadeci_sekil=:istifadeci_sekil WHERE istifadeci_id= :istifadeci_id");
	$profSil->execute(array(
		'istifadeci_sekil'=>$yol,
		'istifadeci_tarix'=>$istifadeci_tarix,
		'istifadeci_id'=>$_SESSION['istifadeci_id']
	));

	if($profSil)
	{
		if($kohneyol=="images/profilno.png")
			header("Location:profil.php?Sdurum=ok");
		else
			unlink("$kohneyol");
		
	}
	else
	{
		header("Location:profil.php?Sdurum=no");
	}
}

//----------==========--------------Profil Tam Ad Yenile-------------------------========-----
if(isset($_POST['ptamadyenile']))
{
	$istifadeci_tarix=date('Y-m-d H:i');
	$profTamAd=$db->prepare("UPDATE admin SET istifadeci_tarix=:istifadeci_tarix,istifadeci_adsoyad=:istifadeci_adsoyad WHERE istifadeci_id= :istifadeci_id");
	$profTamAd->execute(array(
		'istifadeci_adsoyad'=>$_POST['istifadeci_adsoyad'],
		'istifadeci_tarix'=>$istifadeci_tarix,
		'istifadeci_id'=>$_SESSION['istifadeci_id']
	));

	if($profTamAd)
	{
		header("Location:profil.php?Tdurum=ok");
	}
	else
	{
		header("Location:profil.php?Tdurum=no");
	}
}


//----------==========--------------Profil IsAd Yenile-------------------------========-----
if(isset($_POST['pisadyenile']))
{
	$istifadeci_tarix=date('Y-m-d H:i');
	$profIsAd=$db->prepare("UPDATE admin SET istifadeci_tarix=:istifadeci_tarix, istifadeci_ad=:istifadeci_ad WHERE istifadeci_id= :istifadeci_id");
	$profIsAd->execute(array(
		'istifadeci_ad'=>$_POST['istifadeci_ad'],
		'istifadeci_tarix'=>$istifadeci_tarix,
		'istifadeci_id'=>$_SESSION['istifadeci_id']
	));

	if($profIsAd)
	{
		header("Location:profil.php?Idurum=ok");
	}
	else
	{
		header("Location:profil.php?Idurum=no");
	}
}



//----------==========--------------Profil Sifre Yenile-------------------------========-----
if(isset($_POST['psifreyenile']))
{
	$istifadeci_tarix=date('Y-m-d H:i');
	$id=$_SESSION['istifadeci_id'];
	$adminSorgu=$db->prepare("select * from admin where istifadeci_id=?");
	$adminSorgu->execute(array($id));
	$adminCek=$adminSorgu->fetch(PDO::FETCH_ASSOC);


	$kohnesifre=md5($_POST['istifadeci_kohnesifre']);
	$yenisifre=md5($_POST['istifadeci_yenisifre']);
	if($kohnesifre==$adminCek['istifadeci_sifre'])
	{
		$profSifre=$db->prepare("UPDATE admin SET istifadeci_tarix=:istifadeci_tarix,istifadeci_sifre=:yenisifre WHERE istifadeci_id= :istifadeci_id");

		$profSifre->execute(array(
			'yenisifre'=>$yenisifre,
			'istifadeci_tarix'=>$istifadeci_tarix,
			'istifadeci_id'=>$_SESSION['istifadeci_id']
		));

		if($profSifre)
		{
			header("Location:profil.php?SIdurum=ok");
		}
		else
		{
			header("Location:profil.php?SIdurum=no");
		}
	}

	else
	{
		header("Location:profilyenile.php?durum=no");
	}
}

?>