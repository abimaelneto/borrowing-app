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
    <h2>Users</h2>
    <table>
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Birth</th>
        <th>City</th>
        <th>State</th>
        <th>Phone</th>
      </tr>
      <?php
        $sql = "SELECT * FROM accounts LEFT JOIN users ON accounts.user = users.id";
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
          echo "<tr>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['birth'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
          echo"</tr>";
        }

      ?>  
    </table>
  </article>
</body>
</html>