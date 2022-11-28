

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
      $end = date("Y-m-d");
      echo $end;
      try {
        if(isset($_GET)) {
          $id = $_GET['id'];
          $item = $_GET['item'];

          $sql = "UPDATE borrows SET 
            end = '$end'
            WHERE id=$id
          ";
          $res = mysqli_query($conn, $sql);
        

          $sql = "UPDATE items SET
            available = TRUE
            WHERE id='$item';
          ";
          $res = mysqli_query($conn, $sql);

          header("Location: /dashboard.php?borrow=1");
          
        }
      } catch( Exception $e ) {
        echo "Error: " . $e->getMessage();
      }

    ?>
  </article>
</body>
</html>