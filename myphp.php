<?php
	include('connection.php');

	if(isset($_POST['action'])){
		$action = $_POST['action'];



		if($action == 'update'){
			$id = $_POST['id'];
			global $connection;
			
			$query = mysqli_query($connection,"SELECT name, tail FROM program where id = '$id' ");
			$data = mysqli_fetch_array($query);
			
			if($data['tail'] > 500){
				$query = mysqli_query($connection,"UPDATE program SET tail = 0, cycle = (cycle+1) WHERE id= '$id'");
			}

	 		$query = mysqli_query($connection,"UPDATE program SET tail = (tail + 1) WHERE id= '$id' ");

	 		$query = mysqli_query($connection,"SELECT name, tail FROM program where id = '$id' ");
			$data = mysqli_fetch_array($query);
			echo json_encode($data);
		}

		if($action == 'reset'){
			global $connection;
	 		$query = mysqli_query($connection,"UPDATE program SET tail = 0, current = 0, cycle = 1 ");
		}

		if($action == 'serving'){
			$id = $_POST['id'];
			global $connection;

			$query = mysqli_query($connection,"SELECT * FROM program where id = '$id' ");
			$data = mysqli_fetch_array($query);
			
			if($data['current'] > 1000){
				$query = mysqli_query($connection,"UPDATE program SET current = 0, cycle = (cycle-1) WHERE id= '$id' ");
			}

			if($data['cycle'] == 1){
				$query = mysqli_query($connection,"UPDATE program SET current = (current + 1) WHERE id= '$id' AND ((current +1) BETWEEN 0 and tail)  ");	
			}
			if($data['cycle'] > 1){
	 			$query = mysqli_query($connection,"UPDATE program SET current = (current + 1) WHERE id= '$id'  ");
	 		}

	 		$query = mysqli_query($connection,"SELECT name, current FROM program where id = '$id' ");
			$data = mysqli_fetch_array($query);
			echo json_encode($data);
		}

		if($action == 'display'){
			global $connection;
			$data = array();
			$query = mysqli_query($connection,"SELECT * FROM program ");
			
			while($row = mysqli_fetch_array($query)){
				array_push($data,$row);
			}
			echo json_encode($data);
		}
	}
?>