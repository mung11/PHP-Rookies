<?php
require_once("libs/Db.php"); 
$objDb = new Db();
$db = $objDb->database;

$query = $db->prepare("SELECT * FROM member WHERE id = :id");

$query->execute([ "id" => 1,]);

if($query->rowCount() > 0){
  $row = $query->fetch(PDO::FETCH_OBJ); 
  echo "Your name = ".$row->firstname;
}else{
  echo "Record not found.";
}

?>