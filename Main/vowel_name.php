<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT DISTINCT av.ArtistName, av.CustomerName FROM artworkview av	
	WHERE LEFT(av.ArtistName,1) IN ('a','e','i','o','u') AND 
	LEFT(av.CustomerName,1) IN ('a','e','i','o','u')";
	
	$result= mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ." customer Name : " .$row['CustomerName'] ."<br>";
	}
?>