<?php
// Mulai session
session_start();

// Hancurkan session
session_destroy();

// Redirect ke halaman login (login.php)
header("Location: login.php");
exit();
?>
