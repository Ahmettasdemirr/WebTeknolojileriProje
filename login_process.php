<?php
session_start();

// Formdan gelen verileri al
$email = $_POST['email'];
$password = $_POST['password'];

// Örnek bir kullanıcı doğrulama
// Not: Gerçek uygulamalarda kullanıcı verileri veritabanından çekilmelidir
if ($email === 'G231210068@sakarya.edu.tr' && $password === 'G231210068') {
    // Kullanıcı doğrulaması başarılıysa oturumu başlat
    $_SESSION['loggedin'] = true;
    // Ana sayfaya yönlendir
    header('Location: hakkimizda.php');
    exit();
} else {
    echo "Hatalı email adresi veya şifre!";
}
?>
