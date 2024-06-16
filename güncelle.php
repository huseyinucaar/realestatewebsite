<?php
include("baglanti.php");
$id=$_POST["InputID"];
$odasayisi=$_POST["InputOda"];
$metrekare=$_POST["InputMetre"];
$kat=$_POST["InputKat"];
$cephe=$_POST["InputCephe"];
$fiyat=$_POST["InputFiyat"];
$adres=$_POST["InputAdres"];
$resim=$_POST["InputResim"];

$guncelle = "UPDATE evozellik SET ResimAdi='$resim',OdaSayısı='$odasayisi',
MetreKare='$metrekare',Kat='$kat',Cephe='$cephe',Adres='$adres',Fiyat='$fiyat' where Id='$id' ";

if($baglan->query($guncelle)===true){
    

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Başarılı',
            text: 'Ev Güncellendi.',
            confirmButtonText: 'Tamam'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'admin.html';
            }
        });
    });
    </script>";



}

else{
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'error',
            title: 'Hata',
            text: 'Ev Güncellenemedi.',
            confirmButtonText: 'Tamam'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'güncelle.html';
            }
        });
    });
    </script>";
}





?>