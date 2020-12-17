<?php
$host = "localhost";
$dbname = "intro";
$username = "root";
$password = "";

$con = mysqli_connect($host, $username, $password, $dbname) or die(mysqli_connect_error());

#Variables
$update_id = 0;

if(isset($_POST['register'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $insert = "INSERT INTO users (firstname, lastname, email)
  VALUES ('$firstname', '$lastname', '$email')";
  echo $insert;
  echo "<br>";
  mysqli_query($con, $insert) or die(mysqli_error($con));
}
/*
foreach ($con->query('SELECT * from users') as $row) {
  echo "<pre>";
      print_r($row);
        echo "</pre>";
   }

echo "-------------------------------";
$pdo = new PDO('mysql:host=localhost;dbname=intro',$username, $password) or die("Verbindung fehlgeschlagen");
foreach ($pdo->query('SELECT * from users') as $row) {
  echo "<pre>";
      print_r($row);
        echo "</pre>";
   }
*/
if(isset($_POST['updateBtn'])){
$update_id = $_POST['updateBtn'];
}
if(isset($_POST['updateQuery'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $id = $_POST['updateQuery'];
  $insert = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id = '$id'";
  mysqli_query($con, $insert) or die(mysqli_error($con));
  $update_id = 0;
}
if(isset($_POST['delete'])){
  $id = $_POST['delete'];
  $delete = "DELETE FROM users WHERE id = '$id'";
  mysqli_query($con, $delete) or die(mysqli_error($con));
}

 ?>
<style media="screen">
  *{
    list-style-type: none;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  div{
    padding: 50px;
  }
  .setGrid{
    display: grid;
    grid-template-columns: repeat(9, 1fr);
  }
</style>
 <div>
   <form method="post">
     <input type="text" name="firstname">
     <input type="text" name="lastname">
     <input type="email" name="email">
     <input type="submit" name="register">
   </form>
 </div>
 <div>
  <?php foreach ($con->query('SELECT * from users') as $row): ?>
    <ul class="<?=$update_id !== $row['id']?'setGrid':''?>">
    <?php if($update_id !== $row['id']): ?>
      <li><?=$row['id'] ?></li>
      <li><?=$row['firstname'] ?></li>
      <li><?=$row['lastname'] ?></li>
      <li><?=$row['email'] ?></li>
    <?php else: ?>
      <form method="post" class="<?=$update_id === $row['id']?'setGrid':''?>">
        <li><?=$row['id'] ?></li>
        <li><input type="text" name="firstname" value="<?=$row['firstname']?>"></li>
        <li><input type="text" name="lastname" value="<?=$row['lastname']?>"></li>
        <li><input type="text" name="email" value="<?=$row['email']?>"></li>
      <?php endif ?>
      <li><?=$row['updated_at'] ?></li>
      <li><?=$row['created_at'] ?></li>
        <?php if($update_id !== $row['id']): ?>
      <li>
        <form method="post">
          <button type="submit" name="updateBtn" value="<?=$row['id']?>">Update</button>
        </form>
      </li>
        <?php else: ?>
          <li>
              <button type="submit" name="updateQuery" value="<?=$row['id']?>">Speichern</button>
          </li>
          <li>
            <form method="post">
              <button type="submit" name="delete" value="<?=$row['id']?>">Delete</button>
            </form>
          </li>
          </form>
        <?php endif ?>
    </ul>
  <?php endforeach ?>
 </div>
