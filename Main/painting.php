<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT DISTINCT av.ArtistName FROM artworkview av 
	WHERE Form IN ('painting')";
	
	$result= mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ."<br>";
	}
?>