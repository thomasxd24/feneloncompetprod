<?php
include($_SERVER['DOCUMENT_ROOT']."/connection.php");
// include("../../check.php");
$sql = "SELECT classid,classe FROM class" ;
$result = mysqli_query($db, $sql);
$classArray = array();
while($row = mysqli_fetch_assoc($result))
{
    $classArray[$row["classe"]] = $row["classid"];
}
    if ( isset($_FILES["file"])) {
 
             //if there was an error uploading the file
         if ($_FILES["file"]["error"] > 0) {
             echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
 
         }
         else {
              if (file_exists("upload/" . $_FILES["file"]["name"])) {
             echo $_FILES["file"]["name"] . " already exists. ";
              }
              else {
                     //Store file in directory "upload" with the name of "uploaded_file.txt"
             $storagename = "temp.csv";
             move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
             $csv = array_map('str_getcsv', file('upload/temp.csv'));
             array_shift($csv);
             $lines = count($csv);
             for ($i=0; $i < $lines; $i++) { 
                 $sqlinsert = "INSERT INTO eleve(nom,prenom,classid) VALUE(\"{$csv[$i][0]}\",\"{$csv[$i][1]}\",{$csv[$i][2]})";
                 echo $sqlinsert;
                 $result = mysqli_query($db,$sqlinsert);
                 var_dump($result);
                 echo mysql_error();
             }
             }

         }
      } else {
              echo "No file selected <br />";
      }

?>  