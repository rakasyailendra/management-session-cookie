<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}


$valid_pages = ['beranda', 'profil', 'galeri'];
$page = $_GET['page'] ?? 'beranda';


if (!in_array($page, $valid_pages)) {
    $page = 'beranda';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        nav { margin: 20px 0; }
        nav a {
            padding: 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .content { padding: 20px; }
    </style>
</head>
<body>
    <h1>Selamat Datang, Admin!</h1>
    <nav>
        <a href="?page=beranda">Beranda</a>
        <a href="?page=profil">Profil</a>
        <a href="?page=galeri">Galeri</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="content">
        <?php
        $file_path = "modul_admin/" . $page . ".php";
        if (file_exists($file_path)) {
            include($file_path);
        } else {
            echo "<p>Halaman ini adalah: $page</p>";
            error_log("File $file_path tidak ada!");
        }
        ?>
    </div>
</body>
</html>
