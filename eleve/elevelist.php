<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (isset($_GET['classe'])) {

    $class = $_GET['classe'];
    $sql = "SELECT eleve.eleveid,eleve.prenom,eleve.nom,class.classe FROM eleve INNER JOIN class ON class.classid=eleve.classid WHERE eleve.classid='$class' ORDER BY eleve.nom ASC";

    $result = mysqli_query($db, $sql);
    $data = array();
    $com = array("1-1","1-2","1-3","1-4","2-1","3-1","4-1","5-1");
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            if($_GET['recap']=="true")
            {
                $onerow = array($row['nom']." ".$row['prenom'],$row['classe']);
                foreach($com as $onecom)
                {
                    array_push($onerow,'<div id="' . $onecom . "e" . $row["eleveid"] .'" ></div>');
                }
            }
            else
            {
                $onerow = array($row['nom']." ".$row['prenom'], $row['classe'], '<input autocomplete="off" name="' . $_GET["com"] . "e" . $row["eleveid"] . '" class="inputs" onkeyup="check04(this)" onchange="changerecap(this)" maxlength="1" style="width:50px;text-align:center;">', '');
            }
            array_push($data, $onerow);
        }
    } else {
        echo "0 results";
    }
    $table = array(data => $data);
    echo json_encode($table);
}

// in case modify
if (isset($_GET['d'])) {
    if (isset($_GET['recap'])) {
   //      $d = $_GET['d'];
   //      $sql = "SELECT class FROM devoir WHERE wholedevoirid = '$d' limit 1";
   //
   //      $result = mysqli_query($db, $sql);
   //      $value = mysqli_fetch_assoc($result);
   //      $table = "eleve".$value['class'];
   //      $sql = " SELECT $table.elevename,$table.eleveid,devoir.class,GROUP_CONCAT(devoir.note ORDER BY devoir.comid separator '|') as 'note' FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN $table ON $table.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='$d' GROUP BY devoir.eleveid";
   // echo $sql;
   //      // a determiner si plusieur peut exister dans un devoir (11/2)??
   //      $result = mysqli_query($db, $sql);
   //      $data=array();
   //      $com = array("1-1","1-2","1-3","1-4","2-1","3-1","4-1","5-1");
   //      echo $n;
   //      if (mysqli_num_rows($result) > 0) {
   //          while ($row = mysqli_fetch_assoc($result)) {
   //              $newnote=array();
   //              $note=explode("|",$row['note']);
   //              $i = 0;
   //              foreach($note as $onenote) {
   //
   //                  array_push($newnote, '<div id="' . $com[$i] . 'e' . $row['eleveid'] . '"><div class="circle-' . $onenote . '" ></div>');
   //                  $i++;
   //
   //              }
   //
   //              $onerow = array($row['nom']." ".$row['prenom'], $row['class']);
   //              array_push($data, array_merge($onerow,$newnote));
   //          }
   //      } else {
   //          $data=array();
   //      }
   //      $table = array(data => $data);
   //      echo json_encode($table);
    }
    else
        {
            // $d=$_GET['d'];
            // $com = $_GET['com'];
            // $sql = "SELECT class FROM devoir WHERE wholedevoirid = '$d' limit 1";
            // $result = mysqli_query($db, $sql);
            // $value = mysqli_fetch_assoc($result);
            // $table = "eleve".$value['class'];
            // $sql = "SELECT devoir.titledevoir,$table.elevename,matiere.matierename,devoir.class,devoir.note FROM devoir INNER JOIN matiere ON matiere.matiereid=devoir.matiereid INNER JOIN $table ON $table.eleveid=devoir.eleveid WHERE devoir.wholedevoirid='$d' and comid='$com'";
            // $result = mysqli_query($db, $sql);
            // $data = array();
            // $com = array("1-1","1-2","1-3","1-4","2-1","3-1","4-1","5-1");
            // if (mysqli_num_rows($result) > 0) {
            //
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         if($_GET['recap']=="true")
            //         {
            //             $onerow = array($row['elevename'],$_GET['classe']);
            //             foreach($com as $onecom)
            //             {
            //                 array_push($onerow,'<div id="' . $onecom . "e" . $row["eleveid"] .'" class="circle-'.$row["note"].'"></div>');
            //             }
            //         }
            //         else
            //         {
            //             $onerow = array($row['elevename'], $value['class'], '<input autocomplete="off" name="' . $_GET["com"] . "e" . $row["eleveid"] . '" class="inputs" value="'.$row["note"].'" onkeyup="check04(this);changerecap(this)" maxlength="1" style="width:50px;text-align:center;" >', '<div class="circle-'.$row["note"].'" >');
            //
            //         }
            //
            //         array_push($data, $onerow);
            //     }
            //
            // } else {
            //     echo "0 results";
            // }
            // $table = array(data => $data);
            // echo json_encode($table);
        }

}
