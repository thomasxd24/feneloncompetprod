<?php
//SELECT devoir.titledevoir,eleve3D.elevename,eleve3D.eleveid,matiere.matierename,devoir.class,devoir.comid,devoir.note FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN eleve3D ON eleve3D.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='5880e91f386c6'
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include($_SERVER['DOCUMENT_ROOT']."/check.php");
if (isset($_GET['d'])) {
    $d = $_GET['d'];
    $sql = "DELETE FROM devoir WHERE devoir.wholedevoirid='$d' and devoir.profid='$profid'";
   // echo $sql;

    $result = mysqli_query($db, $sql);

    if (mysqli_affected_rows($db) > 0) {
        header("location: /?deleted=true");
    } else {
        header("location: /?deleted=false");
    }


}
