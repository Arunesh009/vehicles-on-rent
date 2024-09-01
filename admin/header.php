<?php
session_start();
error_reporting(E_ALL);
?>
<header>
	<div class="wrapper">
		<h1 class="logo"> Vehicle Rental System</h1>
		<a href="#" class="hamburger"></a>
		<nav>
			<?php
			if (!isset ($_SESSION['email']) && !isset ($_SESSION['pass'])) {
				?>
				<ul>
					<li><a href="index.php">Home</a></li>

					<li><a href="About.php">About</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
				<a href="account.php">Client Login</a>
				<a href="login.php">Admin Login</a>
				<?php
			} else {
				?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="status.php">View Status</a></li>
					<li><a href="message_admin.php">Message Admin</a></li>
				</ul>
				<a href="admin/logout.php">Logout</a>
				<?php
			}
			?>
		</nav>
	</div>
</header>