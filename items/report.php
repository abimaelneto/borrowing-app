

<?php 
  include "../layout/head.php";
  $admin = $_SESSION['admin'];
  if ($admin != 1) {
    header("Location: /dashboard.php?acesso=1");
  }
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  ?>
  <article>
    <h2>Borrowed Items</h2>
    <table>
      <tr>
        <th>Title</th>
        <th>Borrowed on</th>
        <th>Preview</th>
        <th>User Email</th>
      </tr>
      <?php
        $sql = "SELECT i.title, b.start, b.preview, u.email FROM borrows as b
          LEFT JOIN items as i ON i.id = b.item
          LEFT JOIN users as u ON u.id = b.user
          WHERE end IS NULL
        ";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
          echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['start'] . "</td>";
            echo "<td>" . $row['preview'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            
          echo"</tr>";
        }
        
      ?>  
    </table>
   
  </article>
</body>
</html>