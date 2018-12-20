<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (isset($_GET['d']) and isset($_GET['c'])) {
    $c = $_GET['c'];
    $d = $_GET['d'];
    $sql = "SELECT class FROM devoir WHERE wholedevoirid = '$d' limit 1";
    $result = mysqli_query($db, $sql);
    $value = mysqli_fetch_assoc($result);
    $table = "eleve".$value['class'];
    $sql = "SELECT devoir.titledevoir,$table.elevename,matiere.matierename,devoir.class,devoir.note FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN $table ON $table.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='$d'";
    $result = mysqli_query($db, $sql);
    $data=array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $newnote=array();
            $note = json_decode($row['note'],true);
            foreach ($note as $com)
            {
                array_push($newnote,'<div class="circle-'.$com.'"></div>');
            }
            $onerow = array($row['elevename'], $row['class']);
            array_push($data, array_merge($onerow,$newnote));
        }
    } else {
        echo array();
    }
    $table = array(data => $data);
    echo json_encode($table);
}
