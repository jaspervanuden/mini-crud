<?php
include_once "connection.php";
if(isset($_SESSION['username'])){?>
   <p><?php echo "welcome " . $_SESSION['username']; ?></p>
   <?php
}  else {
    header("location: login.php");
}

//var_dump($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM menu WHERE ID = :id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if(isset($_POST["toevoegen"])){
    $sql = "UPDATE menu SET
                name = :name,
                price = :price,
                img = :img
                WHERE ID = :id
                ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':price', $_POST['price']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':id', $data['ID']);
        $stmt->execute();
        header("location: admin.php");

}

?>

<form action="" method="post"> 
    titel <input type="text" name="name" id="" value="<?php echo $data['name']?>"><br />
    prijs <input type="text" name="price" id="" value="<?php echo $data['price']?>"><br />
    img <input type="text" name="img" id="" value="<?php echo $data['img']?>"><br />
    <input type="submit" value="toevoegen" name="toevoegen">
</form>
