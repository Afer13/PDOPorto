<?php 
if(isset($_POST['proq']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Proqramlaşdırma' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
	$say=$xeberSorgu->rowCount();
}
if(isset($_POST['texno']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Texnoloji' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['tehsil']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Təhsil' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['idman']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='İdman' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['siyaset']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Siyasət' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['herbi']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Hərbi' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['senet']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Sənət' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}
if(isset($_POST['gunluk']))
{
	$xeberSorgu=$db->prepare("SELECT * FROM xeberler WHERE xeber_kateqoriya='Günlük' ORDER BY xeber_tarix DESC");
	$xeberSorgu->execute();
}

?>