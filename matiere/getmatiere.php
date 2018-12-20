<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'competences');
define('DB_PASSWORD', 'Fn8vHtjRgOjRNcu9');
define('DB_DATABASE', 'competences');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $sql = "SELECT matiereid,matierename FROM matiere";
    
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row["matiereid"]."'>".$row["matierename"]."</option>";
        }

    } else {
        echo "<option>Echec de recuperation de classe/ pas de classe</option>";
    }
