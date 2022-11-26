

<?php 
  include "../layout/head.php";
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  ?>
  <article>
    <h2>Items</h2>
    <table>
      <tr>
        <th>Title</th>
        <th>Available</th>
      </tr>
      <?php
        $sql = "SELECT * FROM items";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
          echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['available'] . "</td>";
            
          echo"</tr>";
        }
        
      ?>  
    </table>
   
  </article>
</body>
</html>