<?php
echo '<div class="admin-content">';
echo '<h2>🖥️ Beranda Admin</h2>';
echo '<div class="dashboard-card">';
echo '<h3>Statistik Sistem</h3>';
echo '<p>Jumlah Pengguna: 125</p>';
echo '<p>Total Postingan: 42</p>';
echo '<p>Pengunjung Hari Ini: 89</p>';
echo '</div>';
echo '<div class="quick-links">';
echo '<h3>Aksi Cepat:</h3>';
echo '<a href="?page=profil" class="btn">Edit Profil</a>';
echo '<a href="?page=galeri" class="btn">Kelola Galeri</a>';
echo '</div>';
echo '</div>';

// Tambahkan styling inline untuk contoh
echo '<style>
.admin-content {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.dashboard-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.quick-links {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
}

.btn {
    display: inline-block;
    background: #3498db;
    color: white;
    padding: 10px 15px;
    margin: 5px;
    border-radius: 5px;
    text-decoration: none;
}
</style>';
?>