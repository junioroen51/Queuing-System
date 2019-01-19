<?php
$conn = new PDO('mysql:host=localhost;dbname=q','root'); 

if($conn){
	echo 'Successful';
}