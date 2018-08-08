<?php 
include('../../../qurulum.php');

//id
if(!isset($_GET['id'])){
	$_GET['id']=1;
}

if(!is_numeric($_GET['id'])){
	$_GET['id']=1;
}
//id


// alt_m
if(!isset($_GET['alt_m'])){
	$_GET['alt_m']=0;
}

if(!is_numeric($_GET['alt_m'])){
	$_GET['alt_m']=0;
	$_GET['id']=1;
}
// alt_m
?>
<html>
<head>
<title>
tree menu
</title>
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="tree.jquery.js"></script>
<link rel="stylesheet" href="jqtree.css">
<script>
//

$(document).ready(function(){
window.verilern_cavab=true;
function ajaxmuraciet_menu(idyeridey, idaltver){
		var yerideyisen=idyeridey;
		var kiminalti=idaltver
		$.ajax({
			type: "post",
			url: "ajax_menudrag.php",
			data: {"yerideyisen":yerideyisen, "kiminalti":kiminalti},
			dataType: "json",
			success: function(cavabmenu){
				//alert(cavabmenu.duzdu+" - "+cavabmenu.men+" - "+cavabmenu.sira+" - "+cavabmenu.alt);
				duzgunluk=cavabmenu.duzdu;
				if(duzgunluk==1){
					//event.move_info.do_move();
					//alert('Duzdu: '+duzgunluk);
					verilern_cavab=true;
					alert(cavabmenu.men);
					location.reload();
				}else{
					alert('Mümkün olmadı, çünki sistemdə üçqat alt menu nəzərdə tutulmayıb.');
					//dragAndDrop: false;
					verilern_cavab=false;
					location.reload();
				}
			}
		});
	}	
	

/*
Hadiseler	
console.log('moved_node', event.move_info.moved_node);
console.log('target_node', event.move_info.target_node);
console.log('position', event.move_info.position);
console.log('previous_parent', event.move_info.previous_parent);
*/
var data = [

{
        name: 'Menyu', id: 0,
        children: [
    
<?php
$menu=@mysql_query("select * from menu where alt_m='0' ORDER BY 'sira_n'", $elaqe);

$cemi_basmenu=@mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM menu where alt_m='0'", $elaqe));

$cbm=0;
while($sutun_menu=mysql_fetch_array($menu)){
	$cbm++;
		//
		$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
		
		$cemi_altmenu=@mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM menu where alt_m='".$sutun_menu['id']."'", $elaqe));
		
		if($cemi_basmenu['COUNT(*)']==$cbm){$vergul='';} else {$vergul=',';}
		
		if(mysql_num_rows($alt_m)>0){$alt_vergul=',';} else {$alt_vergul='';}
?>
        { name: '<?php echo $sutun_menu['menu']; ?>',  id: <?php echo $sutun_menu['id']; 
		echo $alt_vergul."\n"; if(mysql_num_rows($alt_m)>0){ ?>
children: [
      <?php 
	  $alt_cbm=0;
	  while($altmenu=mysql_fetch_array($alt_m)){
		$alt_cbm++;
		  		$alt_alt_m=@mysql_query("select * from menu where alt_m='".$altmenu['id']."' ORDER BY 'sira_n'", $elaqe);
				
				if($cemi_altmenu['COUNT(*)']==$alt_cbm){$alt_alt_vergul='';} else {$alt_alt_vergul=',';}
				if(mysql_num_rows($alt_alt_m)>0){$alt_alt_vergul_chil=',';}else{$alt_alt_vergul_chil='';}
		  ?>
		  { name: '<?php echo $altmenu['menu']; ?>', id: <?php echo $altmenu['id']; 
		  
		    echo $alt_alt_vergul_chil."\n"; if(mysql_num_rows($alt_alt_m)>0){
		  
		  ?> 
		  children: [
	  <?php $alt_alt_cbm=0;
	  while($alt_altmenu=mysql_fetch_array($alt_alt_m)){
		$alt_alt_cbm++;
		  		
				$cemi_altmenu_alt=@mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM menu where alt_m='".$altmenu['id']."'", $elaqe));
				if($cemi_altmenu_alt['COUNT(*)']==$alt_alt_cbm){$alt_alt_alt_vergul='';} else {$alt_alt_alt_vergul=',';}
		  ?>
		  { name: '<?php echo $alt_altmenu['menu']; ?>', id: <?php echo $alt_altmenu['id']; ?>}


             <?php echo $alt_alt_alt_vergul; } ?>
			]<?php } ?>
			 }
			<?php echo $alt_alt_vergul; } ?>
		]
      <?php } ?>}
        <?php echo $vergul; } ?>
			]		}
];
//surusdur=1;
/* if(surusdur==1){
	verilern_cavab=true;
}else{
	verilern_cavab=false;
} */

$('#tree1').tree({
		data: data,
		autoOpen: true,
		dragAndDrop: verilern_cavab,	
});


$('#tree1').bind(
    'tree.move',
	function(event) {
        if (confirm('Əminsən dəyişməyə?')) {
			ajaxmuraciet_menu(event.move_info.moved_node.id, event.move_info.target_node.id);
			//$('#tree1').css('cursor', 'default');
			/* alert('Köçürülən: - '+event.move_info.moved_node.id+"."+event.move_info.moved_node.name+"\n"+
			  'Kimin altina gedir: - '+event.move_info.target_node.id+"."+event.move_info.target_node.name+"\n"+
			  'Mövqe: - '+event.move_info.moved_node.id+"."+event.move_info.position+"\n duzgunluk:"+duzgunluk
			); */
        }
    }
);
	
});

</script>
</head>
<body>
Heee

<div id="tree1"></div>
</body>
</html>