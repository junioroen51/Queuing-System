<?php

include "user.php";

session_start();
if(isset($_POST['submit'])){
$conn = new PDO('mysql:host=localhost;dbname=registration','root'); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $conn->prepare("SELECT username, password FROM users WHERE username = :username AND password = :password");
$query->bindParam(':username', $username);
$query->bindParam(':password', $password);



$username = $_POST['username'];
$password = $_POST['password'];
$query->execute();

$datas = [];

while($row = $query->fetchAll()){
    
    $datas = $row;
}

if(empty($datas)){
	header("Location: index.php?login=0");
}

else{
	$_SESSION['username'] = $_POST['username'];
	header("Location: product.php");
}

}

