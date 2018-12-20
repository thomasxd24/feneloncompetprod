<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
    $sql = "SELECT classid,classe FROM class ORDER BY classe DESC";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row["classid"]."'>".$row["classe"]."</option>";
        }

    } else {
        echo "<option>Echec de recuperation de classe/ pas de classe</option>";
    }
