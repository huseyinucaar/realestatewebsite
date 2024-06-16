<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: darkslategrey;">

<div style="margin-top: 150px;">
    <div style="text-align: center; color: white;">
        <h1>Giriş Sayfası</h1>
    </div>

    
    <form action="giris.php" method="post"  style="width: 500px; height: 500px; align-items: center; margin-left: 530px;">
        <div class="form-group">
          <label style="color: white;" for="exampleInputEmail1">Kullanıcı Adı</label>
          <input style="margin-top: 5px;" type="text" class="form-control" name="InputKadi" aria-describedby="emailHelp" placeholder="Kullanıcı Adı Girin:">
          
        </div>
        <div  style="margin-top: 15px;" class="form-group">
          <label style="margin-top: 5px; color: white;" for="exampleInputPassword1">Şifre</label>
          <input type="password" class="form-control" name="InputSifre" placeholder="Şifre Girin">
        </div>
        
        <button style="margin-top: 15px;" type="submit" class="btn btn-primary">Giriş</button>
    </form>
   
  </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>

<?php

session_start();
if(isset($_POST["InputKadi"],$_POST["InputSifre"])){

if($_POST["InputKadi"]=="hüseyin" && $_POST["InputSifre"]=="232323"){
  $_SESSION['kullanıcı']=$_POST["InputKadi"];
  header("location:admin.html");
}
  
else{
  echo "<script>alert('Kullanıcı adı veya şifre yanlış')</script>";
}



}




?>