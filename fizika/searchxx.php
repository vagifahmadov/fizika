<?php
include("qurulum.php");

//
$sehife="axtaris";
if(isset($_POST['axtar'])){
$_SESSION['axtaris_soz']=$_POST['axtar'];
}
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type;" content="text/html; charset=utf-8;" />
<meta name="keywords" content="<?php echo $seyfe_sec['keyw']; ?>" />
<meta name="description" content="<?php echo $seyfe_sec['desc']; ?>" />
<title><?php echo $seyfe_sec['title']; ?></title>
<script src="MenuBar.js" type="text/javascript"></script>
<link href="stil-dizayn.css" rel="stylesheet" type="text/css" />
</head>
<body id="govde">
<table style="width:100%; border:0px;" cellpadding="0" cellspacing="0"><tr><td>
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:35px;">
  <tr>
    <td height="205" valign="top" id="basliq"><table width="920" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="32" valign="top"><img src="img/ara.png" width="30" height="9" /></td>
        <td width="357" valign="top"><img src="img/fizikadersi.png" width="338" height="152" style="margin-top:40px; margin-left:10px;" /></td>
        <td width="503" valign="top">
        <form method="post" action="search.php">
        <table border="0" align="right" cellpadding="0" cellspacing="0" id="search" style="margin-top:100px; margin-right:30px; width:223px; height:33px;">
          <tr>
            <td width="102" align="right"><input name="axtar" type="text" style="width:170px; background:none; border:0px; font-style:italic; font-size:14px; color:#FFF; display:inline; margin:5px 0 0 5px;" value="Axtar..." onfocus="if (this.value=='Axtar...'){this.value='';}" onblur="if (!this.beenchanged){ this.value='Axtar...'; } else if( this.value == ''){ this.beenchanged=false; }" onchange="this.beenchanged=true;" /></td>
            <td width="111"><input type="image" src="img/search.png" style="width:25px; height:25px;" /></td>
          </tr>
        </table>
        </form>
        </td>
        <td width="32" valign="top"><img src="img/ara.png" width="30" height="9" /></td>
      </tr>
      
    </table></td>
  </tr>
  <tr><td height="50" id="menu"><table width="920" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="30"><img src="img/ara.png" alt="" width="30" height="9" /></td>
      <td width="860">
      <ul id="MenuBar1" class="MenuBarHorizontal">
<?php
		$menu=@mysql_query("select * from menu where alt_m='0' ORDER BY 'sira_n'", $elaqe);
		while($sutun_menu=mysql_fetch_array($menu)){
		//
		if( $sutun_menu['pag'] == $sehife ){
?>
  <li style="background: #0c4e80 url(img/pointer.gif) no-repeat center bottom;"><a class="MenuBarItemSubmenu" style="padding-top:14px; color:#fff;"><center><?php echo $sutun_menu['menu']; ?></center></a>
      
      <?php
	$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
		
	if(mysql_num_rows($alt_m)>0){
	  ?>
      <ul>
      <?php while($altmenu=mysql_fetch_array($alt_m)){ ?>
        <li><a href="index.php?id=<?php echo $altmenu['id']; ?>"><?php echo $altmenu['menu']; ?></a></li>
      <?php } ?> 
      </ul>
      <?php
      }
	  ?>
      
  </li>
<?php }else{ ?>
  <li><a class="MenuBarItemSubmenu" href="index.php?id=<?php echo $sutun_menu['id']; ?>" style="padding-top:14px;"><center><?php echo $sutun_menu['menu']; ?></center></a>
      <?php
		$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
		
		if(mysql_num_rows($alt_m)>0){
	  ?>
      <ul>
      <?php while($altmenu=mysql_fetch_array($alt_m)){ ?>
        <li><a href="index.php?id=<?php echo $altmenu['id']; ?>"><?php echo $altmenu['menu']; ?></a></li>
      <?php } ?> 
      </ul>
      <?php
      }
	  ?>
  </li>
<?php }} ?>
 </ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"", imgRight:""});
//-->
</script>
      
      </td>
      <td width="30" ><img src="img/ara.png" alt="" width="30" height="9" /></td>
    </tr>
  </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">
        <table width="920" border="0" cellpadding="0" cellspacing="0" id="yaxi_bg">
          <tr>
            <td height="140" valign="top" style="padding-top:10px; padding-left:34px; padding-right:34px; padding-bottom:6px;"><img src="img/ara.png" alt="" width="30" height="9" /><img src="img/ara.png" alt="" width="30" height="9" />
            
			<table width="855" border="0" cellpadding="0" cellspacing="0"><tr><td width="500" valign="top">
            <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" valign="top" style="font-size:20px; color:#707070; border-bottom:1px solid #e6e6e6; padding-left:5px;">Axtarış nəticələri</td>
      </tr>
      <tr>
        <td valign="top" style="padding-top:10px; padding-left:3px;">
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
         <?php
//$basliq_menu=@mysql_fetch_array(mysql_query("select * from 'xeberler'", $elaqe));
echo $basliq_menu['menu'];

//baslanqic verilenler
$davam=$_GET['davam'];
if(!isset($davam)){
$davam=0;
}
if(empty($_GET['xeberler_verilenleri'])){
$verilenler_sehifeleme="menuda_1-ci_mail"; // burda menuda click edilmemisden qabaq bu kateqoryali maillar gelecek
}else{
$verilenler_sehifeleme=$_GET['xeberler_verilenleri']; // menuda click edilenden sonra click olunan kateqoryali maillar gelecek
}
$xeberlersehifesi=intval($_GET['aktiv_xeberler_sehifesi']);
if($xeberlersehifesi==0){
$xeberlersehifesi=1;
}
$gosterilen_xeberler=8;

// naviqator ucun hisse
$dinamiksehifexeber=$xeberlersehifesi-1;
$baslanqic_xeberler=$gosterilen_xeberler*$dinamiksehifexeber;

// qurulum hisse
$xeber_veri_cek=@mysql_query("select * from sehifeler where sh LIKE '%".$_SESSION['axtaris_soz']."%' limit $baslanqic_xeberler, $gosterilen_xeberler",$elaqe);
$xeber_sorgusu=mysql_query("select count(*) from sehifeler where sh LIKE '%".$_SESSION['axtaris_soz']."%'", $elaqe);
$xeberler_sutun=mysql_fetch_array($xeber_sorgusu);
$cemi_xeber=$xeberler_sutun["count(*)"];
//geden qutusu
while($xeberlerqutusu=@mysql_fetch_array($xeber_veri_cek)){
?>
          
          <tr>
            <td style="color:#444; padding-top:2px; padding-bottom:2px; text-align:left;">
            <?php echo $xeberlerqutusu['axt_sh']; ?>
            </td>
          </tr>
          <tr>
            <td style="padding-top:4px; padding-bottom:4px; border-bottom:1px solid #CCC;"><table width="220" border="0" cellpadding="2" cellspacing="0" style="border:1px solid #e6e6e6; background:#FCFCFC; padding-left:8px;">
              <tr>
                <td><a href="index.php?id=<?php echo $xeberlerqutusu['axt_id']; ?>" id="ardi"> Ardını oxuyun &gt;&gt;</a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
          <?php 
}
//geden qutusu
?>
            <td style="background:url(img/noqteler.png) repeat-x bottom; padding-top:2px;"><img src="img/ara_10x.png" /></td>
          </tr>
          <tr><td>Yeniliklərlə bağlı cəmi <b><?php echo $cemi_xeber; ?></b> - ədəd yazı var.</td></tr>
          <tr bgcolor="#EAEAEA"><td style="border-bottom:1px solid #ccc;">
         <?php  // sehifelerin sayini teyin edilen hisse
$xeber_qaliqsayi=$cemi_xeber;
do{
$xeber_qaliqsayi=$xeber_qaliqsayi-$gosterilen_xeberler;
}while($xeber_qaliqsayi>=$gosterilen_xeberler);
$xeberlercemiseyfe=($cemi_xeber-$xeber_qaliqsayi)/$gosterilen_xeberler;
if($xeber_qaliqsayi==0){
$toplam_xeber_sehifesi=$xeberlercemiseyfe;
}else if($xeber_qaliqsayi>0){
$toplam_xeber_sehifesi=$xeberlercemiseyfe+1;
}
// sehifelerin sayini teyin edilen hisse

//profsanal sehifeleme
echo "<table id='seyfeleme' align='right'><tr>";

if($xeberlersehifesi!=1){
echo "<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi-1)." id='ardi'><<</a></td>";
}

$current=$xeberlersehifesi;
$sona_basa_mesafe=3;
$TotalPagesCount=$toplam_xeber_sehifesi;
$dog=false;
$k=max(1,$current-$sona_basa_mesafe);


for ($i=$k; $i<=$current; $i++){

//bas son
if($i == 1){
$dog=true;
}

if($dog){
unset($bas);
}else{
$dog=true;
$bas="<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi-$sona_basa_mesafe-1)." id='ardi'>...</a></td>";
}

//bas son
echo $bas;

if($i==$current){
echo "<td id='aktiv_seh'><b>".$i."</b></td>";
}else{
echo "<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".$i." id='ardi'>".$i."</a></td>";
}

}
$deg=false;
$k=min($TotalPagesCount,$current+$sona_basa_mesafe);
for ($i=$current+1; $i<=$k; $i++){
echo "<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".$i." id='ardi'>".$i."</a></td>";
//bas son
if($i==$TotalPagesCount){
$deg=true;
}
if($deg){
unset($son);
}else{
$son="<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi+$sona_basa_mesafe+1)." id='ardi'>...</a
</td>";
}
//bas son
}
echo $son;

if($xeberlersehifesi<$TotalPagesCount){
echo "<td id='deaktiv_seh'><a href=search.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi+1)." id='ardi'>>></a></td>";
}

echo "</tr></table>";
//profsanal sehifeleme?>
          </td></tr>
        </table>
        
        
        
        
        </td>
      </tr>
    </table>
			</td><td valign="top">
            
            <table width="310" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td>

    <table width="100%" cellpadding="1" cellspacing="0">
    <tr><td style="height:30px; border-bottom:1px solid #CCCCCC; color:#707070; font-size:16px; vertical-align:top;">
    <?php
    $basliq_menu=@mysql_fetch_array(mysql_query("select menu from menu where id='2'", $elaqe));
	echo $basliq_menu['menu'];
	?>
    </td></tr>

      <?php
//baslanqic verilenler
$dav=$_GET['davam'];
if(!isset($dav)){
$dav=0;
}
if(empty($_GET['menu_maillar'])){
$maillar="menuda_1-ci_mail"; // burda menuda click edilmemisden qabaq bu kateqoryali maillar gelecek
}else{
$maillar=$_GET['menu_maillar']; // menuda click edilenden sonra click olunan kateqoryali maillar gelecek
}
$sehife=intval($_GET['aktiv_shife']);
if($sehife==0){
$sehife=1;
}
$goster=10;

// naviqator ucun hisse
$sehifew=$sehife-1;
$baslayan=$goster*$sehifew;

// qurulum hisse
$mail_veri_cek=@mysql_query("select * from menu where pag='sercv' and alt_m !='0' order by sira_n limit $baslayan, $goster",$elaqe);
$sor_box_geden=mysql_query("select count(*) from menu where pag='sercv' and alt_m !='0'", $elaqe);
$sutun_mail=mysql_fetch_array($sor_box_geden);
$toplam_mail=$sutun_mail["count(*)"];
//geden qutusu
while($mail_box_geden=@mysql_fetch_array($mail_veri_cek)){
?>
      <tr>
        <td style="height:30px; vertical-align:middle; border-bottom:1px solid #E9E9E9;"><a href="index.php?id=<?php echo $mail_box_geden['id']; ?>" id="siyahi_sol"><?php echo $mail_box_geden['menu']; ?></a></td>
        </tr>
      <?php 
}
//geden qutusu

// sehifelerin sayini teyin edilen hisse
$qaliq=$toplam_mail;
do{
$qaliq=$qaliq-$goster;
}while($qaliq>=$goster);
$sehifeler=($toplam_mail-$qaliq)/$goster;
if($qaliq==0){
$toplam_sehife=$sehifeler;
}else if($qaliq>0){
$toplam_sehife=$sehifeler+1;
}
?>
      <tr>
      <tr><td height="10" style="background:url(img/noqteler.png) repeat-x bottom; padding-top:5px;"><img src="img/ara_10x.png" height="10" width="10" /></td></tr>
        <td style="color:#777; font-size:10px; padding-left:5px; height:20px; vertical-align:bottom;">Cəmi <b><?php echo $toplam_mail; ?></b> - ədəd dərsimiz var.</td>
      </tr>
      <tr bgcolor="#EAEAEA">
        <td style="border-bottom:1px solid #ccc;"><?php

// sehifelerin sayini teyin edilen hisse

//profsanal sehifeleme
echo "<table id='seyfeleme' align='right'><tr>";

if($sehife!=1){
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".($sehife-1)." id='ardi'><<</a></td>";
}

$current=$sehife;
$sona_basa_mesafe=3;
$TotalPagesCount=$toplam_sehife;
$dog=false;
$k=max(1,$current-$sona_basa_mesafe);


for ($i=$k; $i<=$current; $i++){

//bas son
if($i == 1){
$dog=true;
}

if($dog){
unset($bas);
}else{
$dog=true;
$bas="<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".($sehife-$sona_basa_mesafe-1)." id='ardi'>...</a></td>";
}

//bas son
echo $bas;

if($i==$current){
echo "<td id='aktiv_seh'><b>".$i."</b></td>";
}else{
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".$i." id='ardi'>".$i."</a></td>";
}

}
$deg=false;
$k=min($TotalPagesCount,$current+$sona_basa_mesafe);
for ($i=$current+1; $i<=$k; $i++){
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".$i." id='ardi'>".$i."</a></td>";
//bas son
if($i==$TotalPagesCount){
$deg=true;
}
if($deg){
unset($son);
}else{
$son="<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".($sehife+$sona_basa_mesafe+1)." id='ardi'>...</a
</td>";
}
//bas son
}
echo $son;

if($sehife<$TotalPagesCount){
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslayan."&aktiv_shife=".($sehife+1)." id='ardi'>>></a></td>";
}

echo "</tr></table>";
//profsanal sehifeleme
?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td style="padding-top:10px;"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="309" height="116">
      <param name="movie" value="banns/bann_2.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="banns/bann_2.swf" width="309" height="116">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
  </tr>
</table>
            
            </td></tr></table>
            </td>
            </tr>
          <tr>
            <td valign="top" style="background:url(img/wrap_top.png) no-repeat; height:10px;"><img src="img/ara_10x.png" width="10" height="10" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="200" valign="top" id="orta"><table width="920" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="29"><span style="padding-top:10px;"><img src="img/ara.png" alt="" width="30" height="9" /></span></td>
            <td width="859"><table width="860" border="0" align="center">
              <tr>
                <td style="color:#FFFFFF; font-size:16px; font-weight:bold; padding-left:10px;">Əlaqələr</td>
              </tr>
              <tr>
                <td><?php
		$projeler=mysql_query("select * from last_proj", $elaqe);
        $cemi_proj=@mysql_num_rows($projeler);
		
		$c_prj=0;
		
		$sorgu_proje=@mysql_query("select * from last_proj", $elaqe);
		while($sutun_prj=mysql_fetch_array($sorgu_proje)){
		$c_prj++;
		?>
                    <table width="855" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="949" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="4">
                            <?php if($sutun_prj){ //width="855"-cari cedvelin uzunlugu?>
                            <tr>
                              <?php if($sutun_prj){ ?>
                              <td align="center" valign="middle"><table align="center">
                                  <tr>
                                    <td align="center"><a href="<?php echo $sutun_prj['link']; ?>" target="_blank"><img src="<?php echo $sutun_prj['img_url']; ?>" border="0" /></a> </td>
                                  </tr>
                                  <tr>
                                    <td id="partfolya_info"><?php echo $sutun_prj["info_prj"];?></td>
                                  </tr>
                              </table></td>
                              <?php }
					$cemi_proj -=1;
					if($cemi_proj > 1){
					?>
                              <td width="1" valign="top" id="araliq_partfolya"><img src="img/araX1.png" width="1" height="1" /></td>
                              <?php }
					$sutun_prj=mysql_fetch_array($sorgu_proje);
					if($sutun_prj){
					?>
                              <td align="center" valign="middle"><table align="center" id="elaqeler_xana">
                                  <tr>
                                    <td align="center"><a href="<?php echo $sutun_prj['link']; ?>" target="_blank"><img src="<?php echo $sutun_prj['img_url']; ?>" border="0" /></a> </td>
                                  </tr>
                                  <tr>
                                    <td id="partfolya_info"><?php echo $sutun_prj["info_prj"];?> </td>
                                  </tr>
                              </table></td>
                              <?php }
					$cemi_proj -=1;
					if($cemi_proj > 1){
					  ?>
                              <td width="1" valign="top" id="araliq_partfolya"><img src="img/araX1.png" width="1" height="1" /></td>
                              <?php }
					$sutun_prj=mysql_fetch_array($sorgu_proje);
					if($sutun_prj){
					  ?>
                              <td align="center" valign="middle"><table align="center" id="elaqeler_xana">
                                  <tr>
                                    <td align="center"><a href="<?php echo $sutun_prj['link']; ?>" target="_blank"><img src="<?php echo $sutun_prj['img_url']; ?>" border="0" /></a> </td>
                                  </tr>
                                  <tr>
                                    <td id="partfolya_info"><?php echo $sutun_prj["info_prj"];?> </td>
                                  </tr>
                              </table></td>
                              <?php }
					$cemi_proj -=1;
					if($cemi_proj > 1){
					  ?>
                              <td width="1" valign="top" id="araliq_partfolya"><img src="img/araX1.png" width="1" height="1" /></td>
                              <?php }
					$sutun_prj=mysql_fetch_array($sorgu_proje);
					if($sutun_prj){
					  ?>
                              <td align="center" valign="middle"><table align="center" id="elaqeler_xana">
                                  <tr>
                                    <td align="center"><a href="<?php echo $sutun_prj['link']; ?>" target="_blank"><img src="<?php echo $sutun_prj['img_url']; ?>" border="0" /></a> </td>
                                  </tr>
                                  <tr>
                                    <td id="partfolya_info"><?php echo $sutun_prj["info_prj"];?></td>
                                  </tr>
                              </table></td>
                              <?php } ?>
                            </tr>
                            <?php } ?>
                        </table></td>
                      </tr>
                    </table>
                  <?php }
			   ?></td>
              </tr>
            </table></td>
            <td width="32"><span style="padding-top:10px;"><img src="img/ara.png" alt="" width="30" height="9" /></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="40" id="son">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</td></tr></table>
</body>
</html>