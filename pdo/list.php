<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
$sql = "SELECT * FROM member";
$search = '';
if(isset($_GET['search'])){
  $search = $_GET['search'];
  $sql .= " WHERE firstname LIKE '%".$search."%' OR lastname LIKE '%".$search."%'";
}
$query = $db->prepare($sql);
$query->execute();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="insert-form.php">เพิ่มข้อมูล</a>
    <form class="" action="list.php" method="get">
      <input type="text" name="search" value="<?php echo $search ?>">
      <button type="submit">Search</button>
    </form>
    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $query->fetch(PDO::FETCH_OBJ)){ ?>
        <tr>
          <td><?php echo $row->id ?></td>
          <td><?php echo $row->firstname ?></td>
          <td><?php echo $row->lastname ?></td>
          <td><?php echo $row->status ?></td>
          <td>
            <a href="view.php?id=<?php echo $row->id ?>">view</a> |
            <a href="edit-form.php?id=<?php echo $row->id ?>">edit</a> | 
            <a href="delete.php?id=<?php echo $row->id ?>" onclick="if(!confirm('กรุณายืนยันการลบข้อมูล')) { return false; }">delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
