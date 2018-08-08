<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$query = $db->prepare("SELECT * FROM member WHERE id = :id");
$query->execute([ "id" => $_GET['id'],]);
$row = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row->id ?>">
      <label for="">Firstname: </label>
      <input type="text" name="firstname" value="<?php echo $row->firstname ?>">
      <br>

      <label for="">Lastname: </label>
      <input type="text" name="lastname" value="<?php echo $row->lastname ?>">
      <br>

      Status:
      <input type="radio" name="status" id="status_yes" value="1"<?php if($row->status == 1) { echo " checked"; } ?>>
      <label for="status_yes">Yes</label>
      &nbsp;&nbsp;
      <input type="radio" name="status" id="status_no" value="0"<?php if($row->status == 0) { echo " checked"; } ?>>
      <label for="status_no">No</label>
      <br>

      <button type="submit" name="button">Save</button>
    </form>
  </body>
</html>