<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
    <div class="container1">

        <div class="headerr">
            
            <nav>
                <ul>
                <li><a class="active" href="index"><h2>Projeler</h2></a></li>
                    <li><a href="anasayfa.php"><h2>Anasayfa</h2></a></li>
                    <li><a href="urunler.php"><h2>Ürünler</h2></a></li>
                    <li ><a class="bilmem" href="register.php"><h2>Kayıt</h2></a>
                            
                    </li>
                    <li><a href="sing-up.php"><h2>Giriş</h2></a></li>
                    
                </ul>
            </nav>
             


             
        </div>
        <?php include("register-content.php");?>
        <form action="" method="post">
        
        <div class="card text-light bg-dark m-auto mb-5 text-center" >
  <div class="row no-gutters ">
    <div class="col-md-4">
      <img src="/image/logo1.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body mb-5 mt-5">
        <h5 class="card-title register-name mb-5">Kayıt Ol</h5>
        
        <input type="text" class="form-control mb-5 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="İsim">
        <input type="email" class="form-control mb-5 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Posta">
        <input type="password" class="form-control mb-5 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı Adı">
        <input type="password" class="form-control mb-5 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Şifre">
        <input type="username" class="form-control mb-5 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Şifre Doğrula">
        <button class="btn btn-success mr-54"><h3>Kayıt</h3></button>
        
      </div>
    </div>
  </div>
</div>
</form>    
        <div class="page-last">
            <div class="adress">
              Adres: İzmir ismet kaptan 35360 Gazi bulvarı no:96c z12 Çankaya, 35360 Konak/İzmir<br><br>
Çalışma saatleri: <br>
<br>

Pazartesi
08:30 - 19:00
<br>
Salı
08:30 - 19:00
<br>
Çarşamba
08:30 - 19:00
<br>
Perşembe
08:30 - 19:00
<br>
Cuma
08:30 - 19:00
<br>
Cumartesi
08:30 - 19:00
<br>
Pazar
Kapalı

<br><br>
<img src="/image/phone .png"  class="mobill" alt=""> Telefon: (0232) 483 72 81
            </div>
            <div class="iletisim">
              <ul>
                <li><a href="iletisim.php"> İletişim </a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
              </ul>


            </div></div>
         
    </div>
</body>
</html>