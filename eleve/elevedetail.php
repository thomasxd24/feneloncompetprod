<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");

    $sql = "SELECT DISTINCT class.classe,eleve.prenom,eleve.nom,eleve.classid FROM eleve INNER JOIN class ON class.classid=eleve.classid where eleveid ='".$_GET['eleveid']."' ORDER BY eleve.nom ASC";

    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $classe = $row['classe'];
            $elevename = $row['nom']." ".$row['prenom'];
            $classid = $row['classid'];
            $sqlde = "SELECT COUNT(DISTINCT wholedevoirid) FROM devoir where eleveid ='".$_GET['eleveid']."'";
            $deresult = mysqli_fetch_assoc(mysqli_query($db, $sqlde));
            $devoirdone = $deresult["COUNT(DISTINCT wholedevoirid)"];
        }

    } else {
        echo "<option>Echec de recuperation de classe/ pas de classe</option>";
    }
