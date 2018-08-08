<?php

require "../qurulum.php";

if($_POST && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	$idver=$_POST['indeks_verilen'];
	$sorgu=mysql_fetch_array(mysql_query("select * from menu where id=".$idver));
	$array['men']=$sorgu['menu'];
	$array['sira']=$sorgu['sira_n'];
	$array['alt']=$sorgu['alt_m'];
	echo json_encode($array);
}

?>