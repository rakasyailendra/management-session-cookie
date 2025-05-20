<?php
if (isset($_COOKIE['nama']) && isset($_COOKIE['nama2'])) {
    echo "Nama Anda: " . $_COOKIE['nama'] . "<br>";
    echo "Nama Teman Anda: " . $_COOKIE['nama2'];
} else {
    echo "Cookie Kosong";
}
?>