<?php
include('qurulum.php');
$axtaris=$_POST['axtar'];

if(isset($_POST['klik'])){
	$klik=$_POST['klik'];
}else{
	$klik=0;
}

//AGILLI AXTARIS FUNKSIYA
function axtaris($cedvel,$qosmasi,$elavesi){
	$axtaris_akilli="select * from ".$cedvel." ".$qosmasi." ".$elavesi;
	return $axtaris_akilli;
}


//davam_id
if(isset($_POST['davam_id'])){
	sleep(1);
	$sira_sayi_id=$_POST['davam_id'];
}else{
	$sira_sayi_id=0;
}
//davam_id

$sorgu_axtar=@mysql_query('select * from axtaris where value="'.$axtaris.'"');
if(mysql_num_rows($sorgu_axtar) > 0){
    //deqiq kankret netice
	echo '<ul class="axtaris_result">';
	while($cavab=@mysql_fetch_array($sorgu_axtar)){
		$menu_axtar=@mysql_fetch_array(mysql_query("select * from menu where id=".$cavab['id_seh']));
        $deqiq_basliq_axtaris=@mysql_fetch_array(mysql_query(axtaris("sehifeler","where id=".$cavab['id_seh'],"")));
        $deqiq_metn_axtaris=mb_substr($cavab['value'],0,100,'utf-8')."...";
		echo "<li id=".$cavab['id']."><a href='index.php?id=".$cavab['id_seh']."&alt_m=".$menu_axtar['alt_m']."'>".$deqiq_basliq_axtaris['title']."</a><br>".str_ireplace($axtaris, '<font class="war_term">'.$axtaris.'</font>', $deqiq_metn_axtaris)."</li>";
	}
	echo "</ul>";
    //deqiq kankret netice
}else{
    //say siyahi
    $say_axtarsiyahi=@mysql_fetch_array(mysql_query('select text from terminler where type="count" and sub_type="search"'));
    
	$oxsar=@mysql_query("SELECT * FROM axtaris WHERE value LIKE '%".$axtaris."%' ORDER BY  id ASC limit ".$sira_sayi_id.", ".$say_axtarsiyahi['text']);
	//eger varsa
	if(mysql_num_rows($oxsar)>0){
		$cume_war='<u>kankret</u>';
        $class_xeberdarliq="xeberdarliq_search";
        $img_w="warning";
	}else{
        $class_xeberdarliq="inkar_searcha";
		$cume_war='<u>heç bir</u>';
        $img_w="error";
	}
	//eger varsa
	
	if(!isset($_POST['davam_id'])){
		echo "<div class='".$class_xeberdarliq."'>
		<table cellpadding=0 cellspacing=0 border=0>
		<tr><td>
		<img src='img/".$img_w.".png'></td><td class='war_td'> Üzür istəyirik, <b>\"".$axtaris."\"</b> ilə bağlı ".$cume_war." məlumat yoxdur.
		</td></tr></table></div>";
	}
	
	//eger varsa
	if(mysql_num_rows($oxsar)>0){
		//var
		if(!isset($_POST['davam_id'])){ echo "<p class='war_p'>Oxşar nəticələr:</p><ul class='axtaris_result'>";}
		
		while ( $oxsar_xana = mysql_fetch_array($oxsar) ){
			$sira_sayi_id++;
			$menu_axtar_oxsar=mysql_fetch_array(mysql_query("select * from menu where id=".$oxsar_xana['id_seh']));
			//akilli
			if($menu_axtar_oxsar['alt_m'] != 0){
				$ak_query1=mysql_query(axtaris("menu","where id=".$menu_axtar_oxsar['alt_m'],""));
				$say_ak_netice1=mysql_num_rows($ak_query1);
				$netice_ak1=mysql_fetch_array($ak_query1);
				if($say_ak_netice1 > 0){
					$say_ak_netice2=mysql_num_rows(mysql_query(axtaris("menu","where id=".$netice_ak1['alt_m'],"")));
					$netice_ak2=mysql_fetch_array(mysql_query(axtaris("menu","where id=".$netice_ak1['alt_m'],"")));
					if($say_ak_netice2>0){
						$menu_axtar_oxsar['alt_m']=$netice_ak1['alt_m'];
					}
				}else{
					$menu_axtar_oxsar['alt_m']=$netice_ak1['alt_m'];
				}
			}
			//akilli
			$basliq_axtaris=mysql_fetch_array(mysql_query(axtaris("sehifeler","where id=".$oxsar_xana['id_seh'],"")));
			$metn_axtaris_oxsar=mb_substr($oxsar_xana['value'],0,100,'utf-8')."...";
            
            
			echo "<li id=".$sira_sayi_id."><a href='index.php?id=".$oxsar_xana['id_seh']."&alt_m=".$menu_axtar_oxsar['alt_m']."'>".str_ireplace($axtaris, '<font class="war_term">'.$axtaris.'</font>', $basliq_axtaris['title'])."</a><br>"
			.str_ireplace($axtaris, '<font class="war_term">'.$axtaris.'</font>', $metn_axtaris_oxsar)."</li>";
		}
        ?>
        
        <script>
        
          <?php
            
            $say_cavab_muqaise=@mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM axtaris WHERE value LIKE '".$axtaris."%'"));
          
          ?>
          
          netice=$( ".axtaris_result li" ).size();
          html='<div class="ardi ardielave" style="display: block;">Daha məlumat yoxdur.</div>';
          
          if(<?php echo $say_cavab_muqaise["COUNT(*)"]; ?><=netice){
            $("#davaminyukle").hide();
            $(".ardi ").html(html).fadeIn(600);
          }
          
        </script>
        
        <?php
		if(!isset($_POST['davam_id'])){echo '</ul><div class="ardi"><img src="img/loader.gif" /></div><input class="duymeardi duymeardi-2 duymeardi-2a" id="davaminyukle" value="Ardı" type="Button">';}
		//var
	}else{
		if($klik == 0){
            $warsrch=@mysql_fetch_array(mysql_query('select text from terminler where type="war" and sub_type="nosearc"'));
			echo $warsrch['text'];
		}
	}
	//eger varsa
}
?>