<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
if (isset($_GET['eleveid'])) {
    $eleveid = $_GET['eleveid'];
    $sql1 = 'SET @eleveid = '.$eleveid.' , @comid1 = "1-1",@comid2 = "1-2",@comid3 = "1-3",@comid4 = "1-4",@comid5 = "2-1",@comid6 = "3-1",@comid7 = "4-1",@comid8 = "5-1",@comname1 = "Langue Francaise a l\'oral et a l\'ercit",@comname2 = "Langue mathematique, scientifique et informatiques",@comname3 = "Langue etrangeres et regionales",@comname4 = "Langue du arts et du corps",@comname5 = "Methode et outils pour apprendre",@comname6 = "Formation de la personne et du citoyen", @comname7 = "Systemes naturels et systemes techniques", @comname8 = "Representation du monde et l\'actvite humaine"';
    $sql = '
    SELECT @comname1 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid1) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid1) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid1) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid1) as note4
    UNION ALL
    SELECT @comname2 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid2) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid2) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid2) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid2) as note4
    UNION ALL
    SELECT @comname3 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid3) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid3) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid3) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid3) as note4
    UNION ALL
    SELECT @comname4 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid4) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid4) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid4) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid4) as note4
    UNION ALL
    SELECT @comname5 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid5) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid5) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid5) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid5) as note4
    UNION ALL
    SELECT @comname6 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid6) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid6) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid6) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid6) as note4
    UNION ALL
    SELECT @comname7 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid7) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid7) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid7) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid7) as note4
    UNION ALL
    SELECT @comname8 as comname , note1.n1 , note2.n2 , note3.n3 ,note4.n4 FROM (SELECT COUNT(note) as n1 from devoir where note = 1 and eleveid = @eleveid and comid = @comid8) as note1 , (SELECT COUNT(note) as n2 from devoir where note = 2 and eleveid = @eleveid and comid = @comid8) as note2 ,(SELECT COUNT(note) as n3 from devoir where note = 3 and eleveid = @eleveid and comid = @comid8) as note3 ,(SELECT COUNT(note) as n4 from devoir where note = 4 and eleveid = @eleveid and comid = @comid8) as note4
    ';
    mysqli_query($db , $sql1);
    // echo $sql1;
    // echo $sql;
    $result = mysqli_query($db, $sql);
    $data=array();
    $moyarray = array();
    if($result)
    {

      while ($row = mysqli_fetch_assoc($result)) {
        if(intval($row['n1'])+intval($row['n2'])+intval($row['n3'])+intval($row['n4']) == 0){
          $moy = 0;
        }
        else {
          $moy = (intval($row['n1'])*4 + intval($row['n2'])*3 + intval($row['n3'])*2 + intval($row['n4'])*1)/(intval($row['n1'])+intval($row['n2'])+intval($row['n3'])+intval($row['n4']));
        }
        if(isset($_GET['radar']))
        {
          array_push($moyarray, $moy);
        }
        else {
          $onerow = array($row['comname'], $row['n1'], $row['n2'], $row['n3'], $row['n4']);
          array_push($data, $onerow);
        }



      }
  } else {
    $competarray = ["Langue Francaise a l'oral et a l'ercit","Langue mathematique, scientifique et informatiques","Langue etrangeres et regionales","Langue du arts et du corps","Methode et outils pour apprendre","Formation de la personne et du citoyen","Systemes naturels et systemes techniques","Representation du monde et l'actvite humaine"];
    foreach ($competarray as $onecompet) {
      array_push($data,[$onecompet,"0","0","0","0"]);
    };
  }
  if(isset($_GET['radar']))
  {
    $table = $moyarray;
  }
  else {
    $table = array(data => $data);
  }

    echo json_encode($table);
}
//  "Langue du arts et du corps",@comname5 = "Methode et outils pour apprendre",@comname6 = "Formation de la personne et du citoyen", @comname7 = "Systemes naturels et systemes techniques", @comname8 = "Representation du monde et l\'actvite humaine"';
