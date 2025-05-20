<?php
// Hapus cookie dengan mengatur waktu kadaluarsa ke masa lalu
setcookie("nama", "", time() - 3600);
setcookie("nama2", "", time() - 3600);
echo "Cookie telah dihapus.";
?>