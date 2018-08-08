<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$query = $db->prepare("UPDATE member
  SET firstname = :firstname, lastname = :lastname, status = :status
  WHERE id = :id;"
);
$result = $query->execute([
  "firstname" => $_POST['firstname'],
  "lastname" => $_POST['lastname'],
  "status" => $_POST['status'],
  "id" => $_POST['id'],
]);
if($result){
  echo "Successfully";
}else{
  echo "Save fail!";
}
?>