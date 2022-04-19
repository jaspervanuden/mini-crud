<?php
include_once "connection.php";
if(isset($_SESSION['username'])){?>
   <p><?php echo "welcome " . $_SESSION['username']; ?></p>
   <?php
}  else {
    header("location: login.php");
} 
$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql);
$stmt->execute();

//$stmt->debugDumpParams();

$result = $stmt->fetchAll();
?>
<table>

<tr>
    <th>naam</th>
    <th>prijs</th>
    <th>acties</th>
    <th>
        <a href="insert.php">toevoegen</a>
    </th>
</tr>
<?php

foreach($result as $res){ ?>
    <tr>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['price'];?></td>

        <td> 
            <a href="edit.php?id=<?php echo $res["ID"];?>">edit</a>
            <a href="delete.php?id=<?php echo $res["ID"];?>">delete</a>
        </td>
    </tr>

<?php
}
//var_dump($result);
?>
</table>