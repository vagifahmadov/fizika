<?php

if(!isset($_GET['id']) || $_GET['id']==0){
	$_GET['id']=1;
}

$kontent_sorgu="select * FROM admin_pages where sil=0 and id=".$_GET['id'];
$kontent=mysql_fetch_array(mysql_query($kontent_sorgu, $elaqe));

if(isset($kontent['fayl'])){
	include($kontent['fayl']);
}
?>