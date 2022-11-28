

<?php 
  include "../layout/head.php";
  include "../backend/auth/admin.php"
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  ?>
  <article>

  <?php
  
  if(!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['name'];

    $time = strtotime($birth);

    $newformat = date('Y-m-d',$time);
    try {
      $sql = "INSERT INTO users (email, password) VALUES('$email','$password')";
      $res = mysqli_query($conn, $sql);
      
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $res = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($res);
      $user_id = intval($user['id']);
      if(isset($time)) {

        $sql = "INSERT INTO accounts (name, birth, city, state, phone, user) VALUES(
            '$name',
            '$newformat',
            '$city',
            '$state',
            '$phone',
            $user_id
          )
        ";
        $res = mysqli_query($conn, $sql);

        echo 'Successfully created user';
      } 
    } catch(Exception $e) {
      echo 'Problem creating user. Please Try Again!';
      // echo $e->getMessage();
    }
  }

?>
    <form  method="POST">
      <div class="form-label">
        Create User
      </div>
      <?php 
        echo buildInput('email', 'Email',[], 'email');
        echo buildInput('password', 'Password',[], 'password');
        echo buildInput('name', 'Name');
        echo buildInput('birth', 'Birth',[] , 'date', true);
        echo buildInput('city', 'City');
        echo buildInput('state', 'State');
        echo buildInput('phone', 'Phone');
      ?>
      
      <input type="submit" value="Save">
    </form>
  </article>
</body>
</html>