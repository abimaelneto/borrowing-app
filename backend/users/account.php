<?php
  session_start();
	include "../db/connect.php";
  
  $sql = "SELECT * FROM accounts WHERE user = 1";
  var_dump($sql);

  $id = $_GET['id'];
    
  var_dump($_GET);
  $res = mysqli_query($conn, $sql);
  
  var_dump($res);
  
  ?>