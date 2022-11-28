<?php 
  include "layout/head.php";
  include "backend/db/connect.php";
?>
<body>
  <?php 
    include "layout/header.php";
    include "layout/sidebar.php";
  ?>
  <article>
    <?php
      $acesso = $_GET['acesso'];
      if($acesso == 1) {
        echo '<p class="error">Sem permissão de acesso</p>';
      }
    ?>
    <div class="w-100 flex row jc-sb ai-c">
      <h2>Borrows</h2>
      <a href="items/borrow.php"><buttton>+ Borrow</buttton></a>
    </div>
   
    <?php
        $id = $_SESSION['id'];
        $sql = "SELECT i.title, a.name, b.preview, b.id, b.item FROM borrows as b
          LEFT JOIN accounts as a ON b.user = a.user
          LEFT JOIN items as i ON b.item = i.id
          WHERE b.user = '$id' AND b.end IS NULL;
        ";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) > 0) {
          echo "
          <p>NOTE: late borrows or borrows with no devolution date are marked in red. </p>

          <table>
          <tr>
            <th>Item</th>
            <th>User</th>
            <th>Preview</th>
            <th>Action</th>
          </tr>";

          while($row = mysqli_fetch_assoc($res)) {
            if(isset($row['preview']) && $row['preview'] >= date('Y-m-d')) {
              echo "<tr>";
            } else {
              echo "<tr class='late'>";
            }
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            
            echo "<td>" . $row['preview'] . "</td>";
            echo "<td><a href='/items/devolution.php?id=". $row['id'] . "&item=" . $row['item']  . "'><button>Return</button></a><td>";
            echo"</tr>";
          }
        } else {
          echo "No borrows for current user.";
        }
          
      ?>  
    </table>
   
  </article>
</body>
</html>