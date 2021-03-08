<?php session_start(); ?>
<?php include ("header.php"); ?>
<?php include ("nav.php"); ?>
<?php 
require_once("utilities.php");
require_once "connect.php";

if (!isset($_SESSION['active'])) {
	$_SESSION['active'] = false;
} elseif ($_SESSION['active'] == true) {
	header("Location: home.php");
}


if ($_POST['username'] !== "" && $_POST['password'] !== "") {
  $credentials = array_map('sanitize', $_POST);
  $credentials['password'] = $_POST['password'];
  $stmt = $conn->prepare("INSERT INTO Users(username, password) VALUES(?, ?)");
  //$stmt->bind_param("ss", $credentials['username'], $credentials['password']);
  $stmt->bind_param("ss", $credentials['username'], password_hash($credentials['password'], PASSWORD_DEFAULT));
  $stmt->execute();
  
  			if ($stmt->execute()) {
				$_SESSION['active'] = true;
				$_SESSION['user'] = $credentials['username'];
				header("Location: home.php");
			}
}

?>

<form method="POST">
<body class="text-center">
    <form class="form-signin" method = "POST">
      <h1 class="h3 mb-3 font-weight-normal">Enter Info</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      Username: <input type="text" name="username" id="username" value="<?= $_POST['username'] ?? '' ?>"><br />
      <label for="inputPassword" class="sr-only">Password</label>
      Password: <input type="password" name="password" id="password" value="<?= $_POST['password'] ?? '' ?>"><br />     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</form>
