<?php
require_once("libs/Db.php"); 
$objDb = new Db();
$db = $objDb->database;

$query = $db->prepare("UPDATE member SET firstname = :firstname, lastname = :lastname, status = :status WHERE id = :id;");

$result = $query->execute([
  "firstname" => "Mirage",
  "lastname" => "Studio",
  "status" => 0,
  "id" => 3,
]);

if($result){
  echo "Successfully";
}else{
  echo "Save fail!";
}
?>
