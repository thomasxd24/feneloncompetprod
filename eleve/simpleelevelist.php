<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (!isset($classid)) {
  $classid = $_GET['classid'];
}
    $sql = "SELECT eleveid,prenom,nom FROM eleve where classid =".$classid ." ORDER BY eleve.nom ASC";

    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row["eleveid"]."'>".$row["nom"]." ".$row["prenom"]."</option>";
        }

    } else {
        echo "<option>Echec de recuperation de classe/ pas de classe</option>";
    }
