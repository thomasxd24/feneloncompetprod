<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("../check.php");
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
    
//    devoirid	titledevoir	classid	eleveid	profid	datecreated	matiereid	datedevoir	note
    $sql = "select * from user";
    // if (mysqli_query($db, $sql)) {
    //     header("Location: /devoir/?d=".$key."&created=true");
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($db);
    // }
echo $_GET['query'];

$result = mysqli_query($db,$_GET['query']);
$hi= resultToArray($result);
var_dump($hi);

