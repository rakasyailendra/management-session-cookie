<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['filenya'])) {
    $target_dir = __DIR__ . '/gambar/'; 
    $max_size = 2 * 1024 * 1024; // 2MB
    
 
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

   
    if (!is_writable($target_dir)) {
        die("Direktori gambar tidak bisa ditulisi");
    }

   
    $file = $_FILES['filenya'];
    $original_name = basename($file['name']);
    
  
    $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);
    $sanitized_name = md5(uniqid()) . '.' . $file_extension;
    $target_file = $target_dir . $sanitized_name;

    
    $error_messages = [];
    
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die("Error upload: " . $file['error']);
    }

  
    if ($file['size'] > $max_size) {
        die("Ukuran file melebihi 2MB");
    }

    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowed_types)) {
        die("Hanya file JPG, PNG, dan GIF yang diizinkan");
    }

    // Proses upload
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        echo "File berhasil diupload! Nama file: " . htmlspecialchars($sanitized_name);
    } else {
        echo "Gagal upload file. Error: " . error_get_last()['message'];
    }
} else {
    echo "Silakan pilih file melalui form upload terlebih dahulu";
}
?>