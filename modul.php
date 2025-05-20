<?php
$halaman = $_GET['page'] ?? '';

if ($halaman == "home") {
    include("beranda
    .php");
} elseif ($halaman == "profil") {
    include("profil.php");
} elseif ($halaman == "galeri") {
    include("galeri.php");
} else {
    echo "Halaman tidak ditemukan.";
}
?>
