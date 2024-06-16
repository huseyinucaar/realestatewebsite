<?php
include("baglanti.php");
$odasayisi=$_POST["InputOda"];
$metrekare=$_POST["InputMetre"];
$kat=$_POST["InputKat"];
$cephe=$_POST["InputCephe"];
$fiyat=$_POST["InputFiyat"];
$adres=$_POST["InputAdres"];
$resim=$_POST["InputResim"];






$ekle="INSERT INTO `evozellik`(`ResimAdi`, `OdaSayısı`, `MetreKare`, `Kat`, `Cephe`, `Adres`, `Fiyat`) VALUES ('".$resim."','".$odasayisi."','".$metrekare."','".$kat."','".$cephe."','".$adres."','".$fiyat."')";

    if($baglan->query($ekle)===true){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Başarılı',
            text: 'Ev Eklendi.',
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
            text: 'Ev Eklenemedi.',
            confirmButtonText: 'Tamam'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'ekle.html';
            }
        });
    });
    </script>";
}

?>