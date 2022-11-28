<?php
  include 'layout/head.php';
?>
<body>
  <?php
    if(isset($_GET['erro'])){
      echo '<p style="text-align:center;color:red">Wrong credentials!</p>';
    }
    
    if(isset($_GET['autentica'])){
      echo '<p style="text-align:center;color:red">You don\'t have the required permissions.</p>';
    }	
  ?>

    <div class="login">
      <h1>Welcome!</h1>
      
      <form action="backend/auth/login.php" method="post">
        <div class="form-label">Please provide your login credentials.</div>
        <label for="email">
          <p>Email</p>
          <input id ="email" name="email" type="email" />
        </label>
        <label for="password">
          <p>Password</p>
          <input id ="password" name="password" type="password" />
        </label>
        
        <input type="submit" value="Login" / >
      </form>
    </div>
  

</body>
</html>