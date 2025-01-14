<?php
session_start();

if (! $_SESSION['user_ok'])
{
    header("Location: login.php");
    exit;
}
?>