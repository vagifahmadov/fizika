<?php
//qurulum fayli

error_reporting(0);

$host="localhost";
$user="root";
$psw="";
$base="fizika_base";
$elaqe=@mysql_connect($host, $user, $psw) or die("Əlaqə qurulmadı...");
@mysql_select_db($base) or die ("Baza seçilmədi!");
@mysql_query("set names'utf8'",$elaqe);
?>