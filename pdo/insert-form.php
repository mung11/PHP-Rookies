<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="insert.php" method="post">
      <label for="">Firstname: </label>
      <input type="text" name="firstname" value="">
      <br>

      <label for="">Lastname: </label>
      <input type="text" name="lastname" value="">
      <br>

      Status:
      <input type="radio" name="status" id="status_yes" value="1" checked>
      <label for="status_yes">Yes</label>
      &nbsp;&nbsp;
      <input type="radio" name="status" id="status_no" value="0">
      <label for="status_no">No</label>
      <br>

      <button type="submit" name="button">Save</button>
    </form>
  </body>
</html>