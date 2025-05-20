<?php
echo '<div class="admin-content">';
echo '<h2>👤 Profil Admin</h2>';
echo '<div class="profile-info">';
echo '<p><strong>Nama:</strong> Administrator</p>';
echo '<p><strong>Email:</strong> admin@example.com</p>';
echo '<p><strong>Terakhir Login:</strong> ' . date('Y-m-d H:i:s') . '</p>';
echo '</div>';
echo '<div class="update-form">';
echo '<h3>Update Profil</h3>';
echo '<form>';
echo '<input type="text" placeholder="Nama Baru">';
echo '<input type="email" placeholder="Email Baru">';
echo '<button type="submit">Simpan Perubahan</button>';
echo '</form>';
echo '</div>';
echo '</div>';
?>