

<?php 
  include "../layout/head.php";
?>
<body>
  <?php 
    include "../layout/header.php";
    include "../layout/sidebar.php";
  ?>
  <article>

    <table>
      <tr>
        <td>Email</td>
        <td>Name</td>
        <td>Birth</td>
        <td>City</td>
        <td>State</td>
        <td>Phone</td>
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