<?php

require "../../../qurulum.php";

if($_POST && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	$id_deyisen=$_POST['yerideyisen'];
	$id_altinagirdiyi=$_POST['kiminalti'];
	
	/* $id_deyisen=4;
	$id_altinagirdiyi=12; */
	
	$sorgu=mysql_fetch_array(mysql_query("select * from menu where id=".$id_altinagirdiyi));
	
	$menumertebe=0;
	$menumertteyin=$sorgu['alt_m'];
	while($menumertteyin!=0){
		$menumertebe++;
		$sorgu=mysql_fetch_array(mysql_query("select * from menu where id=".$menumertteyin));
		$menumertteyin=$sorgu['alt_m'];
		//echo $menumertebe.'. '.$menumertteyin;
	}
	
	if($menumertebe>1){
		$array['duzdu']=0;
	}else{
		$array['duzdu']=1;
		$array['men']='mertebe='.$menumertebe.' /n Emr: '."UPDATE menu SET alt_m =".$id_altinagirdiyi." WHERE id=".$id_deyisen;
		$array['sira']='yerdeyisen: '.$id_deyisen;
		$array['alt']='neyin altina girib?: '.$id_altinagirdiyi;
		mysql_query("UPDATE menu SET alt_m =".$id_altinagirdiyi." WHERE id=".$id_deyisen);
	}
	
	/* $array['men']=$sorgu['menu'];
	$array['sira']=$sorgu['sira_n'];
	$array['alt']=$sorgu['alt_m']; */
	echo json_encode($array);
}

?>