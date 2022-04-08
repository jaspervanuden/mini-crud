<?php
include_once "connection.php";
if(isset($_SESSION['username'])){
    echo "welcome " . $_SESSION['username'];
}  else {
    header("location: login.php");
} 
$sql = "SELECT * FROM album";
$stmt = $conn->prepare($sql);
$stmt->execute();

//$stmt->debugDumpParams();

$result = $stmt->fetchAll();
var_dump($result);
?>

