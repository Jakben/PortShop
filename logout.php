<?php
session_start();
echo "You've logged out!";
session_destroy();
header('Refresh: 1; URL=home.php');
?>