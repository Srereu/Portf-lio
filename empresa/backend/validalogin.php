<?php
ob_start();
if((!$_SESSION['email']) || (!$_SESSION['senha']))
{
    header('Location:../frontend/loginht.php');
    exit();
}

