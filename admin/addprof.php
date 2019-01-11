<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("../check.php");
    
//    devoirid	titledevoir	classid	eleveid	profid	datecreated	matiereid	datedevoir	note
    $sql = "INSERT INTO user (wholedevoirid, titledevoir, class, eleveid, profid, datecreated, matiereid, datedevoir,comment, comid,note) VALUES".implode(",", $classcom);
    // if (mysqli_query($db, $sql)) {
    //     header("Location: /devoir/?d=".$key."&created=true");
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($db);
    // }

    $result = mysql_query($db,$_GET['query']);
$row = mysql_fetch_array($result);
var_dump($row);
