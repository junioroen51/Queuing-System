<?php

if(isset($_POST['done'])){
     
    include 'include/js/db.php'
  
   $datas['mess'] = "";
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $course_name = $_POST['course_name'];
    $cell_no = $_POST['cell_no'];
    $dept_name = $_POST['dept_name'];
    $type_name = $_POST['type_name'];

    

  {  
$sql = "INSERT INTO personal_info (fname,lname,cell_no) VALUES (:fname, :lname, :cell_no)";
$sql = "INSERT INTO dept_det (dept_name) VALUES ( , :dept_name)";
$sql = "INSERT INTO course_det (course_name) VALUES ( , :course_name, )";
$sql = "INSERT INTO user_info (username,password,type_name) VALUES (:username,:password,:type_name)";


$query = $conn->prepare($sql);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':course_name',$course_name,PDO::PARAM_STR);
$query->bindParam(':cell_no',$cell_no,PDO::PARAM_STR);
$query->bindParam(':dept_name',$dept_name,PDO::PARAM_STR);
$query->bindParam(':type_name',$type_name,PDO::PARAM_STR);

$query->execute();

 


 }
       

    echo json_encode($data);

}

  
