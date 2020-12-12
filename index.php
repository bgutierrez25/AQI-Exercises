<?php session_start(); ?>
<?php include ("header.php"); ?>
<?php include ("nav.php"); ?>
<?php
require_once("utilities.php");

if (!isset($_SESSION['active'])) {
	$_SESSION['active'] 	 = false;
}

if ($_SESSION['active'] == true) {
	echo "<h1>Hello, {$_SESSION['username']}!</h1>";
} else {
	echo "<h1>Hello, guest!</h1>";
}

?>
<div class = "jumbotron text-center">

	<li><a href="index.php">Home</a></li>
	<?php if ($_SESSION['active'] !== true): ?>
		<li><a href="login.php">Login</a></li>
	<?php else: ?>
		<li><a href="logout.php">Logout</a></li
	<?php endif; ?>

</div>
