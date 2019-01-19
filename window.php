<?php
session_start();

if($_POST['pro']==1){
	$window = 'window'. $_POST['window'];
		$_SESSION[$window] = $window;
		echo $_SESSION[$window];
}
if($_POST['pro']==2){

	$data= (Object)array("window1"=>"","window2"=>"","window3"=>"","window4"=>"");

	if(isset($_SESSION['window1'])){
		$window1= $_SESSION['window1'];
		$data->window1 = $window1;
	}
	if(isset($_SESSION['window2'])){
		$window2= $_SESSION['window2'];
		$data->window2 = $window2;
	}

	if(isset($_SESSION['window3'])){
		$window3= $_SESSION['window3'];
		$data->window3 = $window3;
	}

	if(isset($_SESSION['window4'])){
		$window4= $_SESSION['window4'];
		$data->window4 = $window4;
	}


	echo json_encode($data);
}

if($_POST['pro']=="tell1"){
	$_SESSION['window1']= "";
}
if($_POST['pro']=="tell2"){
	$_SESSION['window2']= "";
}
if($_POST['pro']=="tell3"){
	$_SESSION['window3']= "";
}
if($_POST['pro']=="tell4"){
	$_SESSION['window4']= "";
}
