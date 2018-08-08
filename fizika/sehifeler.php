<?php
$id_sh=$_GET['id'];
include('qurulum.php');

if(!is_numeric($id_sh)){
	$id_sh=0;
}

$sorgu_sehife="select sh from sehifeler where id='$id_sh'";
$sehife_cxart=mysql_fetch_array(mysql_query($sorgu_sehife, $elaqe));
$melumatvarsa=mysql_num_rows(mysql_query($sorgu_sehife, $elaqe));


if($melumatvarsa>0){
	echo $sehife_cxart['sh'];
}else{
	echo "<div class='xeta'><img src='img/404.png'></div>";
}

?>