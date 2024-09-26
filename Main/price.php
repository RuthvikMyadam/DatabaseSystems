<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT DISTINCT av.ArtistName, av.ArtworkTitle, av.ArtworkPrice FROM artworkview av 
	WHERE av.ArtworkPrice > 215 and av.ArtworkPrice < 15000";
	
	$result= mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ."  Artwork Title: " .$row['ArtworkTitle'] ."  Price: " .$row['ArtworkPrice'] ."<br>";
	}
?>