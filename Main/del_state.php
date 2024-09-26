<?php
	$conn = mysqli_connect("localhost", "root", "","arlington art gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stateName = $_POST['stateName'];

	if(!empty($stateName)){
		$query = "DELETE FROM state WHERE stateName = '$stateName'";
	}
	else{
		echo "Enter value to delete";
	}
	$result= mysqli_query($conn, $query);
	echo "state " .$stateName ." Removed fields";
?>