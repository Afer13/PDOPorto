<?php 
ob_start();
session_start();

function seo($s)
{
	$az=array('ş','Ş','ə','Ə','ı','I','İ','ö','Ö','ğ','Ğ','ü','Ü','ç','Ç','(',')','/',' ',',','?');
	$eng=array('s','s','e','e','i','i','i','o','o','g','g','u','u','c','c','','','-','-','','');
	$s=str_replace($az, $eng, $s);
	$s=strtolower($s);
	$s=preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s=preg_replace('/\s+/', '-', $s);
	$s=preg_replace('|-+|', '-', $s);
	$s=preg_replace('/#/', '', $s);
	$s=str_replace('.', '', $s);
	$s=trim($s,'-');
	return $s;
}
?>