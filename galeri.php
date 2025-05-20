<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Galeri Foto</title> 
  <style> 
    body { 
      font-family: Arial, sans-serif; 
      margin: 0; 
    } 
    nav { 
      background-color: #333; 
      display: flex; 
      justify-content: center; 
      align-items: center; 
    } 
    nav a { 
      background-color: #333; 
      color: white; 
      border: none; 
      padding: 14px 20px; 
      cursor: pointer; 
      font-size: 16px; 
      text-decoration: none; 
    } 
    nav a:hover { 
      background-color: #555; 
    } 
    .content { 
      background-color: #f2f2f2; 
      padding: 20px; 
      border-top: 1px solid #ddd; 
      text-align: center; 
    } 
    .content img { 
      width: 200px; 
      margin: 10px; 
      border-radius: 8px; 
    } 
  </style> 
</head> 
<body> 
 
<nav> 
  <a href="beranda.php">Home</a> 
  <a href="profil.php">Profil</a> 
  <a style="background-color:black;" href="gallery.php">Galeri</a> 
</nav> 
 
<div class="content"> 
  <h1>INI FOTO YANG SUDAH KAMU UPLOAD</h1> 
 
  <?php 
  $folder = "gambar/"; 
  $files = glob($folder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); 
 
  if (!empty($files)) { 
    foreach ($files as $file) { 
      echo "<img src='$file' alt='gambar'>"; 
    } 
  } else { 
    echo "<p>Belum ada gambar yang diupload.</p>"; 
  } 
  ?> 
 
</div> 
 
</body> 
</html> 