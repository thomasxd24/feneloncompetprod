<?php
session_start();
$version = "1.0.2 Beta";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (!isset($_SESSION['username'])) {
    header("Location: connexion");
//    TODO change /competence when offical
}
// else if ($_SESSION['firstLogin'] == "1")
// {
//   header("Location: /connexion/firstConnexion");
// }
  else {
    $user_check = $_SESSION['name'];
    $username = $_SESSION['username'];
    $userID = $_SESSION['userID'];
    $profid = $_SESSION['profid'];

}
