<?php

//if request was sent through ajax
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {

  include "includes/config.php";
  include "includes/classes/User.php";
  include "includes/classes/Artist.php";
  include "includes/classes/Album.php";
  include "includes/classes/Song.php";
  include "includes/classes/Playlist.php";

  if (isset($_GET['userLoggedIn'])) {
    $userLoggedIn = new User($connection, $_GET['userLoggedIn']);
  } else {
    echo "Username var was not passed into page. Check the openPage JS func.";
    exit();
  }
} else {

  include "includes/header.php";
  include "includes/footer.php";

  $url = $_SERVER['REQUEST_URI'];

  echo "<script>openPage('$url');</script>";
  exit();
}
