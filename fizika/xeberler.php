<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="510" height="300" valign="top" style="border-right:1px solid #E6E6E6; padding-top:10px;">
    <?php //cedvel
	
	if(isset($_GET['yenilik_tam'])){
	$genis_yenilik=@mysql_fetch_array(mysql_query("select * from xeberler where id='".$_GET['yenilik_tam']."'",$elaqe));
	?>
    <table width="470" border="0" cellpadding="0" cellspacing="0" style="margin-left:10px;">
      <tr>
        <td height="30" valign="top" style="font-size:20px; color:#303030; border-bottom:1px solid #e6e6e6; padding-left:5px; padding-bottom:2px;"><?php echo $genis_yenilik['bas']; ?></td>
      </tr>
      <tr>
        <td style="padding-top:4px; padding-bottom:8px; text-align:justify;"><?php echo $genis_yenilik['tam']; ?></td>
      </tr>
      <tr><td style="padding-top:2px; border-top:1px solid #CCC;">
      <font style="color:#777;">tarix: <?php echo $genis_yenilik['tarix']; ?></font><table width="120" style="background:#EAEAEA;" align="right" cellpadding="0" cellspacing="0"><tr><td><img border="0" src="img/back-ico.jpg" /></td><td><a href="javascript: history.go(-1)" id='ardi' style="padding-left:3px;">Geriə qayıt</a></td></tr></table>
      </td></tr>
    </table>
<?php
	}else{
	unset($_GET['yenilik_tam']);
	?>
    <table width="470" border="0" cellpadding="0" cellspacing="0" style="margin-left:10px;">
      <tr>
        <td height="30" valign="top" style="font-size:20px; color:#707070; border-bottom:1px solid #e6e6e6; padding-left:5px;">Yeniliklər</td>
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
$gosterilen_xeberler=3;

// naviqator ucun hisse
$dinamiksehifexeber=$xeberlersehifesi-1;
$baslanqic_xeberler=$gosterilen_xeberler*$dinamiksehifexeber;

// qurulum hisse
$xeber_veri_cek=@mysql_query("select * from xeberler order by tarix DESC limit $baslanqic_xeberler, $gosterilen_xeberler",$elaqe);
$xeber_sorgusu=mysql_query("select count(*) from xeberler", $elaqe);
$xeberler_sutun=mysql_fetch_array($xeber_sorgusu);
$cemi_xeber=$xeberler_sutun["count(*)"];
//geden qutusu
while($xeberlerqutusu=@mysql_fetch_array($xeber_veri_cek)){
?>
          <tr>
            <td style="padding-left:5px; padding-bottom:3px; padding-top:3px; background-color:#E9E9E9" valign="top"><a href="index.php?yenilik_tam=<?php echo $xeberlerqutusu['id']; ?>" id="bas_link"><?php echo $xeberlerqutusu['bas']; ?></a></td>
          </tr>
          <tr>
            <td style="color:#444; padding-top:5px;"><p align="justify">
            <?php echo $xeberlerqutusu['xulase']; ?>
            </p></td>
          </tr>
          <tr>
            <td style="padding-top:10px; padding-bottom:10px;"><table width="96%" border="0" align="center" cellpadding="10" cellspacing="0" style="border:1px solid #e6e6e6; background:#FCFCFC;">
              <tr>
                <td><font style="color:#777;">tarix: <?php echo $xeberlerqutusu['tarix']; ?></font><font style="color:#e6e6e6; font-weight:bold; padding-left:10px; padding-right:10px;">|</font><a href="index.php?yenilik_tam=<?php echo $xeberlerqutusu['id']; ?>" id="ardi"> Ardını oxuyun &gt;&gt;</a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
          <?php 
}
//geden qutusu
?>
            <td style="background:url(img/noqteler.png) repeat-x;"><img src="img/ara_10x.png" /></td>
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
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi-1)." id='ardi'><<</a></td>";
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
$bas="<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi-$sona_basa_mesafe-1)." id='ardi'>...</a></td>";
}

//bas son
echo $bas;

if($i==$current){
echo "<td id='aktiv_seh'><b>".$i."</b></td>";
}else{
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".$i." id='ardi'>".$i."</a></td>";
}

}
$deg=false;
$k=min($TotalPagesCount,$current+$sona_basa_mesafe);
for ($i=$current+1; $i<=$k; $i++){
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".$i." id='ardi'>".$i."</a></td>";
//bas son
if($i==$TotalPagesCount){
$deg=true;
}
if($deg){
unset($son);
}else{
$son="<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi+$sona_basa_mesafe+1)." id='ardi'>...</a
</td>";
}
//bas son
}
echo $son;

if($xeberlersehifesi<$TotalPagesCount){
echo "<td id='deaktiv_seh'><a href=index.php?davam=".$baslanqic_xeberler."&aktiv_xeberler_sehifesi=".($xeberlersehifesi+1)." id='ardi'>>></a></td>";
}

echo "</tr></table>";
//profsanal sehifeleme?>
          </td></tr>
        </table>
<br /></td>
      </tr>
    </table>
    <?php //cedvel
	}	
	?>
    </td>
    <td width="350" valign="top" style="padding-left:10px; padding-top:10px;">
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
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
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

    </td>
  </tr>
  <tr>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
