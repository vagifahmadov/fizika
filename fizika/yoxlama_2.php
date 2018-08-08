<?php include("qurulum.php"); ?>
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