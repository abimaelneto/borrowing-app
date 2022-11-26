<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>As</title>
</head>
<body>
<?php
    if(isset($_GET['erro'])){
      echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
    }
    
    if(isset($_GET['autentica'])){
      echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
    }
			
			?>
  <form action="backend/auth/login.php" method="post">
    <input name="email" type="email" />
    <input name="password" type="password" />
    <button type="submit" >submit</button>
  </form>
  <?php	

  include "backend/db/connect.php";


  $sql = "SELECT * FROM teste";

  // //Envia a consulta para obter dados 
  $result = mysqli_query($conn, $sql);
  // echo $res;
  // echo "no";
// // //Armazena os dados obtidos
if ($result) {
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    // do something with the $row
    echo json_encode($row);
  }

}
?>

</body>
</html>