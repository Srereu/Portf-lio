<?php
session_start();
session_destroy();
header('Location:../frontend/loginht.php');
exit();
?>
