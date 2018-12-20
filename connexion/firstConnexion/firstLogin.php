<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
session_start();
if($_SESSION['firstLogin'] == "1"){
  $sql = "UPDATE `user` SET `firstLogin` = '2' WHERE `user`.`userID` = ".$_SESSION['userID'];
    $result = mysqli_query($db, $sql);
  $_SESSION['firstLogin'] = "2";
}
header("location: /");
 ?>
