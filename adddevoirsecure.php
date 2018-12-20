<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("check.php");
if (isset($_POST['checkexist'])) {
    $sql = "SELECT eleveid,class.classe FROM eleve INNER JOIN class ON class.classid=eleve.classid WHERE eleve.classid=".$_POST['classid'];

    $result = mysqli_query($db, $sql);
    $com = array("1-1", "1-2", "1-3", "1-4", "2-1", "3-1", "4-1", "5-1");
//    array_unshift($com, "");
//    unset($com[0]);
    $classcom = array();
    $key = uniqid();
//$com est a changer si au futur il y a une changement de competence
    while($row = mysqli_fetch_assoc($result))
    {
        foreach ($com as $value) {
            array_push($classcom," ('".
                $key
                ."','".
                $_POST['titledevoir']
                ."','".
                $row['classe']
                ."', ".
                $row['eleveid']
                .", '".
                $_SESSION['profid']
                ."','".
                date('Y-m-d')
                ."',".$_POST['matiere']."

                ,'".
                $_POST['datedevoir']
                ."'
                ,'".
                $_POST['comment']
                ."','".
                $value
                ."','".
                $_POST[$value . 'e' . $row["eleveid"]]
                ."')");

        }

    }
//    devoirid	titledevoir	classid	eleveid	profid	datecreated	matiereid	datedevoir	note
    $sql = "INSERT INTO devoir (wholedevoirid, titledevoir, class, eleveid, profid, datecreated, matiereid, datedevoir,comment, comid,note) VALUES".implode(",", $classcom);
    if (mysqli_query($db, $sql)) {
        header("Location: /devoir/?d=".$key."&created=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
