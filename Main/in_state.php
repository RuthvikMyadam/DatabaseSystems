<?php
	$conn = mysqli_connect("localhost", "root", "","arlington art gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stateName = $_POST['stateName'];
	$stateAb = $_POST['stateAb'];

	if(!empty($stateName) && !empty($stateAb)){
		$query = "INSERT INTO state values('$stateAb','$stateName')";
	}
	else{
		echo "Enter values";
	}
	$result= mysqli_query($conn, $query);
	echo " values " .$stateAb ." " .$stateName ."Successfully";
?>