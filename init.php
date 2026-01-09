<?php
session_start();

if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {

  $token = $_COOKIE['remember_token'];

  $q = mysqli_query($conn, "
    SELECT * FROM users
    WHERE remember_token='$token'
      AND is_active=1
      AND deleted_at IS NULL
    LIMIT 1
  ");

  if (mysqli_num_rows($q) === 1) {
    $user = mysqli_fetch_assoc($q);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
  } else {
    // token invalid
    setcookie('remember_token', '', time() - 3600, '/');
  }
}
?>