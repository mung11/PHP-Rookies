<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$query = $db->prepare("INSERT INTO member (id, firstname, lastname, status) VALUES (NULL, :firstname, :lastname, :status);");
$result = $query->execute([
"firstname" => $_POST['firstname'],
"lastname" => $_POST['lastname'],
"status" => $_POST['status'],
]);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($result){
      echo "Successfully";
    }else{
      echo "Save fail!";
    }
    ?>
  </body>
</html>