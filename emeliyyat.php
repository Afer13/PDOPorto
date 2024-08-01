<?php include 'baglan.php';
//--------------------------Mesaj Emeliyyat----------------------
if(isset($_POST['gondar']))
{
	$mesaj_vaxt=date('Y-m-d H:i');

	$mesajSorgu=$db->prepare("INSERT INTO mesajlar(mesaj_ad,mesaj_mail,mesaj_movzu,mesaj_mesaj,mesaj_vaxt) VALUES(:mesaj_ad,:mesaj_mail,:mesaj_movzu,:mesaj_mesaj,:mesaj_vaxt)");
	$mesajSorgu->execute(array(
		'mesaj_ad'=>$_POST['mesaj_ad'],
		'mesaj_mail'=>$_POST['mesaj_mail'],
		'mesaj_movzu'=>$_POST['mesaj_movzu'],
		'mesaj_mesaj'=>$_POST['mesaj_mesaj'],
		'mesaj_vaxt'=>$mesaj_vaxt
	));

	if($mesajSorgu)
	{
		header("Location:elaqe.php?durum=ok");
	}
	else
	{
		header("Location:elaqe.php?durum=no");
	}
}

//--------------------------Index Mesaj Emeliyyat----------------------

if(isset($_POST['gondarIndex']))
{
	$Imesaj_vaxt=date('Y-m-d H:i');

	$ImesajSorgu=$db->prepare("INSERT INTO mesajlar(mesaj_ad,mesaj_mail,mesaj_movzu,mesaj_mesaj,mesaj_vaxt) VALUES(:mesaj_ad,:mesaj_mail,:mesaj_movzu,:mesaj_mesaj,:mesaj_vaxt)");
	$ImesajSorgu->execute(array(
		'mesaj_ad'=>$_POST['mesaj_ad1'],
		'mesaj_mail'=>$_POST['mesaj_mail1'],
		'mesaj_movzu'=>$_POST['mesaj_movzu1'],
		'mesaj_mesaj'=>$_POST['mesaj_mesaj1'],
		'mesaj_vaxt'=>$Imesaj_vaxt
	));

	if($ImesajSorgu)
	{
		header("Location:index.php?durum=ok");
	}
	else
	{
		header("Location:index.php?durum=no");
	}
}

//--------------------------Şərhlər Emeliyyat----------------------

if(isset($_POST['serhgonder']))
{
	$serh_vaxt=date('Y-m-d H:i');
	$serhSorgu=$db->prepare("INSERT INTO serhler(serh_ad,serh_mail,serh_serh,serh_vaxt) VALUES(:serh_ad,:serh_mail,:serh_serh,:serh_vaxt)");
	$serhSorgu->execute(array(
		'serh_ad'=>$_POST['serh_ad'],
		'serh_mail'=>$_POST['serh_mail'],
		'serh_serh'=>$_POST['serh_serh'],
		'serh_vaxt'=>$serh_vaxt
	));

	if($serhSorgu)
	{
		header("Location:serhler.php?durum=ok");
	}
	else
	{
		header("Location:serhler.php?durum=no");
	}
}
?>