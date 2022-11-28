<?php
  $admin = $_SESSION['admin'];
  if ($admin != 1) {
    header("Location: /dashboard.php?acesso=1");
  }
?>