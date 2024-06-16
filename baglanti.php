<?php

$db_sunucu="localhost";
$db_kullanici="root";
$db_sifre="";
$db_ad="emlak";

$baglan=mysqli_connect($db_sunucu,$db_kullanici,$db_sifre,$db_ad);

if(!$baglan){
    die("Veritabani baglantisi basarisiz.".mysqli_connect_error());
}






?>