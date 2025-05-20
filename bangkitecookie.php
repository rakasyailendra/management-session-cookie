<?php
// Cookie tanpa usia
setcookie("nama", "M Rakha Syailendra");
// Cookie dengan usia 3600 detik
setcookie("nama2", "raka", time() + 3600);
echo "Cookie berhasil dibuat.";
?>