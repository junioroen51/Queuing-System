<?php
	session_start();
	$msg = '';
	
	if (isset($_GET['login'])) {
		if ($_GET['login'] == 0) {
			$msg = 'Invalid Log in';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Webpage2</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="include/css/style.css" type="text/css">
</head>
<style>
  select[name]{
            background-color: white;
            margin: 20px;
            height: 30px;
            width: 185px;
        }
</style>
<body>
    <b id="ireset">
<div align="center">
    <div class="well" align="center" style="border: 2px solid black;">
    <h1 style="color:black;"> CSU Queuing System  </h1>
   <form method="POST" action="login.php">
    <b>Username:</b>
    <input type="text" name="username" required><br><br>
    <b>Password :</b>
    <input type="password" name="password" required><br>

      


                  <b> Select Org:</b>
                  <select name="type" id="type_name"  ><br>
                  <option value="Student">Student</option>
                  <option value="Teller">Teller</option>
                  <option value="Admin">Admin</option>
                  </select>

               
</center>
    <center><h3 style="color:red;background-color:yellow;"><?php echo $msg ?></h3></center><br>
    <input id="boton" type="submit" name="submit">
   
  </form>
    </div>


</body>
</html>


