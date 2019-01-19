<?php

include 'db.php';

if(isset($_POST['done'])){
    
    
    $query = $conn->prepare("SELECT * FROM users");
    $query->execute();
    $result = array();
    while($row = $query->fetchAll()){
        
        $result = $row;
    }
    echo json_encode($result);
}