<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'competences');
define('DB_PASSWORD', 'Fn8vHtjRgOjRNcu9');
define('DB_DATABASE', 'competences');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $sql = "SELECT DISTINCT titledevoir,class,comment,matiere.matierename FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid where wholedevoirid ='".$_GET['d']."'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $titledevoir = $row['titledevoir'];
            $classe = $row['class'];
            $comment = $row['comment'];
            $matiere = $row['matierename'];
        }

    } else {
        echo "Echec de recuperation de classe/ pas de classe";
    }
