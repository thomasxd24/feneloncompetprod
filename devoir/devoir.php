<?php
//SELECT devoir.titledevoir,eleve3D.elevename,eleve3D.eleveid,matiere.matierename,devoir.class,devoir.comid,devoir.note FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN eleve3D ON eleve3D.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='5880e91f386c6'
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (isset($_GET['d'])) {
    $d = $_GET['d'];
    $sql = " SELECT eleve.eleveid,eleve.nom,eleve.prenom,eleve.classe,GROUP_CONCAT(devoir.note ORDER BY devoir.comid separator '|') as 'note' FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN eleve ON eleve.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='$d' GROUP BY eleve.eleveid ORDER BY eleve.nom ASC";
   //echo $sql;
    // a determiner si plusieur peut exister dans un devoir (11/2)??

    $result = mysqli_query($db, $sql);
    $data=array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $newnote=array();
            $note=explode("|",$row['note']);
//            print_r($note);
            foreach ($note as $com)
            {
                array_push($newnote,'<div class="circle-'.$com.'"></div>');
            }
//            print_r($newnote);
            $onerow = array($row['nom']." ".$row['prenom'], $row['class']);
            array_push($data, array_merge($onerow,$newnote));
        }
    } else {
        echo mysqli_error($db);
        $data=array();
    }
    $table = array(data => $data);
    echo json_encode($table);
}
