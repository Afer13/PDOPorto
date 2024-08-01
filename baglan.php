<?php 
try {
	$db=new PDO("mysql:host=localhost:3308;dbname=pdoporto",'root','13545762aR');
	//echo "ok";
} catch (PDOException $e) {
	echo $e->getMesssage();
}
?>