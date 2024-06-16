<?php
include ("baglanti.php");
$id=$_POST["InputID"];

$sil="DELETE FROM `evozellik` WHERE Id='$id'";


if($baglan->query($sil)===true){
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Başarılı',
            text: 'Ev Başarıyla Silindi.',
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
            text: 'Hata Oluştu.',
            confirmButtonText: 'Tamam'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'sil.html';
            }
        });
    });
    </script>";}

?>