<<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$query = $db->prepare("SELECT * FROM member WHERE id = :id");
$query->execute([ "id" => $_GET['id'],]);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($query->rowCount() > 0){
      $row = $query->fetch(PDO::FETCH_OBJ);
      echo "Your firstname = ".$row->firstname;
      echo "<br>";
      echo "Your lastname = ".$row->lastname;
      echo "<br>";
      echo "Your status = ".$row->status;
      echo "<br>";
    }else{
      echo "Record not found.";
    }
    ?>
  </body>
</html>