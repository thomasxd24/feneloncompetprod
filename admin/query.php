<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("../check.php");


function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
$result = mysqli_query($db,$_GET['query']);
    if(!$result)
    {
        echo mysqli_error($db);
    }
    else{
        $hi= resultToArray($result);
        var_dump($hi);
    }