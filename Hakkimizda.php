<?php
session_start();
// Oturum kontrolü yap
if (!isset($_SESSION['loggedin'])) {
    // Kullanıcı girişi yapılmamışsa, giriş sayfasına yönlendir
    header('Location: index.php');
    exit();
}
?>















<!DOCTYPE html>
<html lang="tr">
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <script src="bootstrap.js"></script>
  <style>
    
    
  </style>
</head>
<body>
  <div class="ust-kisim">
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container">
      <a class="navbar-brand" href="#">
        <img class="img-fluid logo" src="Resimler/kutahya_sehir_silueti_vektorel_2209181.png" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link active "  aria-current="page" href="Hakkimizda.php">Hakkımızda</a>
            <span class="ayrac">|</span>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="Ozgecmis.html">Özgeçmiş</a>
            <span class="ayrac">|</span>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="Sehrim.html">Şehrim</a>
            <span class="ayrac">|</span>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="Takımımız.html">Takımımız</a>
            <span class="ayrac">|</span>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="Ilgi Alanlarim.html">İlgi Alanlarım</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </div>

  <div class="container metin content">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Hakkımızda</h1>
        <h3>Ahmet Taşdemir</h3>
        <p>
          <i class="fa-solid fa-quote-left"></i>
          Merhaba , ben Ahmet Taşdemir. Sakarya Üniversitesi Bilgisayar Mühendisliği bölümünde öğrenim görmekteyim. Gelecekte kendi şirketimi kurup video oyunu yapım,dağıtım ve oyun teknolojisi geliştirme üzerine faaliyet göstermeyi hedefliyorum.
          <i class="fa-solid fa-quote-right"></i>
        </p>

        <h3 class="text-center">Hobilerim</h3>
        <div class="Hobi  d-flex mt-3 ">

          <div class="col-sm">
          <div class="card ml-3" style="width: 18rem;">
            <img src="Resimler/En-İyi-5-Müzik-Dinleme-Uygulamasi-2-scaled.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"> <i class="fa-solid fa-music"></i>
                Müzik
              </h5>
              <p class="card-text">Müzik dinlemeyi çok severim. Çalışırken, dinlenirken, yolculuk yaparken, tatildeyken, arkadaşlarımla birlikteyken, kısacası her zaman ve her yerde müzikle iç içe biriyim. Genel olarak ağır tempolu müzikler dinlesemde, anlık ruh halime göre dinlediğim müzikler değişiklik gösterebilir.</p>
              <a href="https://open.spotify.com/playlist/37i9dQZF1DZ06evO0Z5EJ2?si=0864030b96ca425d" class="btn btn-primary"> müzik listesine gitmek için tıkla</a>
            </div>
          </div> 
          </div>
          <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="Resimler/futbol.jpg_31517406.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-regular fa-futbol"></i> Futbol</h5>
              <p class="card-text">Futbol benim için sadece bir oyun değil bir tutkudur. Sahada olmanın verdiği özgürlük, o an sadece futbol oynamak hem mental anlamda hem de fiziksel anlamda bana çok iyi geliyor. Aynı zamanda tuttuğum takımın maçını izlerken de benzer duygular hissediyorum. </p>
              <a href="https://incisozluk.co/w/futbolu-neden-mi-seviyoruz/" class="btn btn-primary">Futbolu neden seviyoruz</a>
            </div>
          </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img src="Resimler/film.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-film"></i> Film, dizi izlemek</h5>
                <p class="card-text">Film veya dizi izlemek de sevdiğim aktivitelerden biridir. Farklı türlerdeki film ve dizileri izlemek ve hikayelerine kapılıp gitmek benim için güzel bir zaman geçirme yöntemi.Eski film cdlerini hala saklayan biri olarak klasikleri izlemek sevdiğim bir aktivite.</p>
                <a href="https://www.beyazperde.com/filmler/vizyondakiler/sinema-sayisi/" class="btn btn-primary">Güncel filmlerden haberdar olmak için tıkla</a>
              </div>
            </div>
          </div>  
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img src="Resimler/code.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-code"></i> Kod Yazmak</h5>
                <p class="card-text"> Kod yazmak her ne kadar mesleğim olacaksa da benim için her zaman zevkli bir aktivitedir. Bir proje üzerine çalışırken işimi yapmanın yanı sıra keyif de almak bence çok önemli. Kimi zaman zorlu işlemler yapsak da günün sonunda güzel bir iş ortaya çıkarmak beni her zaman mutlu ediyor.</p>
                
              </div>
            </div>
          </div>     
        </div>
      </div>
    </div>
  </div>

  
  

  <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
