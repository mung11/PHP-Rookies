<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$query = $db->prepare("DELETE FROM member WHERE id = :id");
$result = $query->execute([
  "id" => $_GET['id'],
]);
if($result){
  echo "Deleted";
}else{
  echo "Delete fail!";
}
?>