<?php
    session_start();
    include '../components/input.php';

    include '../backend/db/connect.php'
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/index.css">
  <title>Account</title>
</head>


<body>
  account
  
  <?php


    $id = $_SESSION['id'];

    if(isset($_POST)) {
      $name = $_POST['name'];
      $birth = $_POST['birth'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $phone = $_POST['name'];

      $sql = "UPDATE accounts SET
        name='$name',
          birth='$birth',
          city='$city',
          state='$state',
          phone='$phone'
          WHERE user=$id
      ";

      $res = mysqli_query($conn, $sql);
    }

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM accounts WHERE user = $id";

    $res = mysqli_query($conn, $sql);
    
    $account = mysqli_fetch_assoc($res);


  ?>

    <form  method="POST">
      <div class="form-label">
        Edit account
      </div>
      <?php 
        echo buildInput('name', 'Name',$account);
        echo buildInput('birth', 'Birth',$account);
        echo buildInput('city', 'City',$account);
        echo buildInput('state', 'State',$account);
        echo buildInput('phone', 'Phone',$account);
      ?>
      
      <input type="submit" value="Save">
    </form>
</body>
</html>