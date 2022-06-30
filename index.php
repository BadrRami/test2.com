<?php
include './db.php';
$firstName =  $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
if (isset($_POST['submit'])){
    //echo $firstName . ' ' . $lastName . ' ' . $email; 
    $sql = "INSERT INTO users(firstName, lastName, email) 
           VALUES ('$firstName', '$lastName', '$email')";
    mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName">
        <input type="text" name="lastName" id="lastName">
        <input type="text" name="email" id="email">
        <input type="submit" name="submit" value="send">
    </form> 
</body>
</html>