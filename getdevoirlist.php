<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (isset($_GET['profid'])) {
    $profid = $_GET['profid'];
    $sql = "SELECT DISTINCT devoir.titledevoir,user.name,matiere.matierename,devoir.datedevoir, devoir.class, devoir.wholedevoirid FROM devoir INNER JOIN user ON user.profid=devoir.profid INNER JOIN matiere ON matiere.matiereid=devoir.matiereid WHERE devoir.profid='$profid' ORDER BY devoir.wholedevoirid DESC ";
  
    $result = mysqli_query($db, $sql);
    $data=array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $onerow = array($row['titledevoir'], $row['class'], $row['name'], $row['matierename'], $row['datedevoir'],'<div class="btn-group"><a type="button" href="/devoir?d='.$row["wholedevoirid"].'" class="btn btn-sm btn-info">Détail</a><a type="button" href="/devoir/deletedevoir.php?d='.$row["wholedevoirid"].'" onclick=\'return confirm("Etes-vous sûr(e) de vouloir supprimer cette devoir? \nCette action est irréversible!");\' class="btn btn-sm btn-danger">Supprimer</button></div>');
            array_push($data, $onerow);
        }
    } else {
        array_push($data,array("-","-","-","-","-","-")) ;
    }
    $table = array(data => $data);
    echo json_encode($table);
}
else {
  $sql = "SELECT DISTINCT devoir.titledevoir,user.name,matiere.matierename,devoir.datedevoir, devoir.class, devoir.wholedevoirid FROM devoir INNER JOIN user ON user.profid=devoir.profid INNER JOIN matiere ON matiere.matiereid=devoir.matiereid ORDER BY devoir.wholedevoirid DESC ";

  $result = mysqli_query($db, $sql);
  $data=array();
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $onerow = array($row['titledevoir'], $row['class'], $row['name'], $row['matierename'], $row['datedevoir'],'<div class="btn-group"><a type="button" href="/devoir?d='.$row["wholedevoirid"].'" class="btn btn-sm btn-info">Détail</a></div>');
          array_push($data, $onerow);
      }
  } else {
      array_push($data,array("-","-","-","-","-","-")) ;
  }
  $table = array(data => $data);
  echo json_encode($table);
}
