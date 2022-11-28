<?php
	$admin = $_SESSION['admin'] == 1;
?>

<aside>
	<nav>
		<ul id="menu">
			<li><a href="/dashboard.php" class="active">Home</a></li>
			<li><a href="/users/account.php" >Account</a></li>
			<li><a href="/items/borrow.php">Borrow Item</a></li>
			<?php
				if($admin) {
					echo "<li><a href='/users/index.php'>List Users</a></li>";
					echo "<li><a href='/users/new.php'>New User</a></li>";
					echo "<li><a href='/items/index.php'>List Items</a></li>";
					echo "<li><a href='/items/new.php'>New Item</a></li>";
					echo "<li><a href='/items/report.php'>Items Report</a></li>";
				}
			?>
			<li><a href="/backend/auth/logout.php">Logout</a></li>

		</ul>
	</nav>
</aside>