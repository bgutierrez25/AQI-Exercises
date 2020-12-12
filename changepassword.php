<?php session_start(); ?>
<?php include ("header.php"); ?>
<?php include ("nav.php"); ?>
<?php
require_once("utilities.php");





if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['newpassword'])) {
  $credentials = array_map('sanitize', $_POST);
  $stmt = $conn->prepare("SELECT * FROM Users WHERE username = ?");
  $stmt->bind_param("s", $credentials['username']);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  if ($credentials['password'] == $row['password']) {
    $newpassword['password'] = $_POST['newpassword'];
    $stmt = $conn->prepare("UPDATE Users SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $newpassword['password'], $credentials['username']);
    $stmt->execute();
    echo "Password Changed Successfully";
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
      <label for="inputPassword" class="sr-only">New Password</label>
      New Password: <input type="password" name="newpassword" id="newpassword" value="<?= $_POST['newpassword'] ?? '' ?>"><br />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
