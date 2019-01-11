<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
session_start();
if($_SESSION['firstLogin'] == "1"){
  $md5mdp = md5($_POST['newpassword']);
  $sql = "UPDATE `user` SET `md5password` = '".$md5mdp."', `firstLogin` = '2' WHERE `user`.`userID` = ".$_SESSION['userID']." ";
    $result = mysqli_query($db, $sql);
  $_SESSION['firstLogin'] = "2";
  header("location: /connexion/firstConnexion/modifieMdp/success.php");
}
else {
  header("location: /");
}

 ?>
