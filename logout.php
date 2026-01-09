<?php
session_start();
include 'dashboard/config/config.php';

if (isset($_SESSION['user_id'])) {
  mysqli_query($conn, "
    UPDATE users
    SET remember_token=NULL
    WHERE id='{$_SESSION['user_id']}'
  ");
}

session_destroy();

setcookie('remember_token', '', time() - 3600, '/');

header("Location: login.php");
exit;

