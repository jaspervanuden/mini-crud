<?php
include_once "connection.php";
if(isset($_SESSION['username'])){?>
   <p><?php echo "welcome " . $_SESSION['username']; ?></p>
   <?php
}  else {
    header("location: login.php");
}

if(isset($_POST["menu"])){
$sql = "INSERT INTO menu
          (name, price, img)
          VALUES
          (:name, :price, :img)
  ";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':price', $_POST['price']);
  $stmt->bindParam(':img', $_POST['img']);
  $stmt->execute();
  header("Location: admin.php");
}
?>
<form action="" method="post">
naam<input type="text" name="name" id=""><br />
prijs<input type="text" name="price" id=""><br />
img <input type="text" name="img" id="" ><br />
<input type="submit" value="toevoegen" name="menu">
</form>