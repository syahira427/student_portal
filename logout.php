<?php
session_start();

// buang semua session user
session_unset();
session_destroy();

// redirect balik ke login page
header("Location: index.php");
exit();
?>