<?php
session_start();
unset($_SESSION['var_session1']);
unset($_SESSION['var_session2']);
session_destroy();
echo "Session telah dihancurkan.";
?>