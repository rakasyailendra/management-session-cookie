<?php
session_start();
$_SESSION['var_session1'] = 'Masukkan Nama Anda';
$_SESSION['var_session2'] = 'Masukkan No HP Anda';

if (isset($_SESSION['var_session1']) && isset($_SESSION['var_session2'])) {
    echo "Session Baru Saja Dibuat";
}
?>