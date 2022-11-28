

<?php 
  include "../layout/head.php";
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  ?>
  <article>
    
    <?php

  
  if(!empty($_POST)) {
    $item = $_POST['item'];
    $preview = $_POST['preview'];

    $start = date('Y-m-d');
    $user = $_SESSION['id'];

    try {
      $sql = "";
      if($preview == '') {
        $sql = "INSERT INTO borrows (item, start, user, preview) VALUES($item,'$start', $user, null)";
      }else {
        $sql = "INSERT INTO borrows (item, start, user, preview) VALUES($item,'$start', $user, '$preview')";
      }
      $res = mysqli_query($conn, $sql);
      
      $sql = "UPDATE items SET available = FALSE WHERE id = $item";
      echo 'Successfully borrowed item';
      header('Location: /dashboard.php');
    
    } catch(Exception $e) {
      echo 'Problem borrowing item. Please Try Again!';
      echo $e->getMessage();
    }
  } else {


  }

?>
    <div class="form-label">
      Borrow Item
    </div>
    <form  method="POST">
      <label for="item">
        <p>Item</p>
        <select id="item" required name="item">
          <?php
            $sql = 'SELECT * from items where available IS TRUE';
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($res)) {
              echo "<option value=". $row['id'] . ">";
              echo $row['title'];
              echo "</option>";
            }
          ?>
        </select>
      </label>
      <label for="item"> 
        <p>Devolution Date</p>
        <input type="date" name="preview">
      </label>
      
      <input type="submit" value="Save">
    </form>
  </article>
</body>
</html>