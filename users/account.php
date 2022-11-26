

<?php 
  include "../layout/head.php";
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  

  $id = $_SESSION['id'];

  if(isset($_POST)) {
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];

    $time = strtotime($birth);

    $newformat = date('Y-m-d',$time);
    
    try {
      if($time) {
        $sql = "UPDATE accounts SET
          name='$name',
          birth='$newformat',
          city='$city',
          state='$state',
          phone='$phone'
          WHERE user=$id
        ";
        $res = mysqli_query($conn, $sql);
      } 
    } catch(Exception $e) {
      echo $e->getMessage();
    }
  }

  $sql = "SELECT * FROM accounts WHERE user = $id";

  $res = mysqli_query($conn, $sql);
  
  $account = mysqli_fetch_assoc($res);

?>
  <article>
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
  </article>
</body>
</html>