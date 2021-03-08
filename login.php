<?php session_start(); ?>
<?php include ("header.php"); ?>
<?php include ("nav.php"); ?>

<?php

require_once("utilities.php");
//session_unset();
//session_destroy();

if (!isset($_SESSION['active'])) {
	$_SESSION['active'] = false;
} elseif ($_SESSION['active'] == true) {
	header("Location: index.php");
}



if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $credentials = array_map('sanitize', $_POST);
  $stmt = $conn->prepare("SELECT * FROM Users WHERE username = ?");
  $stmt->bind_param("s", $credentials['username']);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  if (password_verify($credentials['password'], $row['password'])) {
  //if ($credentials['password'] == $row['password']) {
    echo "Logged in. Yay!";
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['active'] = true;
    header("Location: index.php");
  } else {
    echo "Invalid username or password. Try again.";
  }
}

?>

<body class="text-center">
    <form class="form-signin" method = "POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      Username: <input type="text" name="username" id="username" value="<?= $_POST['username'] ?? '' ?>"><br />
      <label for="inputPassword" class="sr-only">Password</label>
      Password: <input type="password" name="password" id="password" value="<?= $_POST['password'] ?? '' ?>"><br />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
