

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
    $title = $_POST['title'];
    try {
      $sql = "INSERT INTO items (title, available) VALUES('$title',TRUE)";
      $res = mysqli_query($conn, $sql);
      
      if(!mysqli_error($conn)) {
        echo 'Successfully created item';
        header('Location: /items/index.php');
      }
    
    } catch(Exception $e) {
      echo 'Problem creating user. Please Try Again!';
      // echo $e->getMessage();
    }
  }

?>
   <div class="form-label">
        Create Item
      </div>
    <form  method="POST">
     
      <?php 
        echo buildInput('title', 'Title',[]);
      ?>
      <input type="submit" value="Save">
    </form>
  </article>
</body>
</html>