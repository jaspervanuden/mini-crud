<?php 
include_once "connection.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if(count($result) > 0){
        $_SESSION["username"] = $_POST['username'];
        header('Location: admin.php');
    exit();
        
    } else {
        echo "username niet gevonden";
    }
} 
?>
 
<form action="login.php" method="post">
    username <input type="text" name="username" value="" /><br />
    password <input type="text" name="password" value=""><br />
    <input type="submit" value="login"/>
</form>
    