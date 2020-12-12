<?php
  session_start();
  require_once("utilities.php");

  $result = $conn->query("SELECT id, username FROM Users");
  $users = $result->fetch_all(MYSQLI_ASSOC);
  $result->free();

  //echo "<pre>";
  //var_dump($users);
  //echo "</pre>";

?>

<?php foreach ($users as $user): ?>
<p><a href="profile.php?id=<?= $user['id']; ?>"><?= $user['username'] ?></p>
<?php endforeach; ?>
