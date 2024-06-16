
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  .navbar-nav .nav-link,
        .navbar-brand {
            color: white !important;
        }

table{
     border-collapse:collapse ;
     background-color: #fff;

}

table tr, table td,table th{
border: 1px solid #bbb;
}

table th{
    background-color: brown;
    color: #fff;
    font-weight: 600;
}

table td{
    background-color: gray;
    
}


</style>
  </head>
<body>
    



  <nav class="navbar navbar-expand-lg bg-dark color-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Hüseyin Emlak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="giris.php">Admin Sayfası</a>
                </li>

                

            </ul>
        </div>
    </div>
</nav>


<div style="text-align: center;">
    <h1>Tüm Konutlar</h1>
</div>

<?php

include("baglanti.php");

$liste="select * from evozellik";

$sonuc=$baglan->query($liste);

echo '<table border="1" width="100%" style="border-collapse: collapse;">';
echo '<tr>';
echo "<th width='14%' style='text-align:center;'>Resim</th>";
echo '<th width="14%" style="text-align:center;">Id</th>';
echo '<th width="14%" style="text-align:center;">Oda Sayısı</th>';
echo '<th width="14%" style="text-align:center;">Metrekare</th>';
echo '<th width="14%" style="text-align:center;">Kat</th>';
echo '<th width="14%" style="text-align:center;">Cephe</th>';
echo '<th width="14%" style="text-align:center;">Adres</th>';
echo '<th width="16%" style="text-align:center;">Fiyat</th>';
echo '</tr>';

while ($veri_cek = $sonuc->fetch_assoc()) {
    echo '<tr>';
    echo "<td style='text-align:center; vertical-align:middle;'> <img src='../PhpOdev/img/{$veri_cek['ResimAdi']}' alt='' style='width:211px;height:153px;'></td>";
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['Id'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['OdaSayısı'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['MetreKare'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['Kat'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['Cephe'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['Adres'].'</td>';
    echo '<td style="text-align:center; vertical-align:middle;">'.$veri_cek['Fiyat'].'</td>';
    echo '</tr>';
}

echo '</table>';


?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>