<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT av.ArtistName, COUNT(av.ArtworkTitle) as NumberOfPiecesSold  FROM artworkview av 
	WHERE av.FinalPaymentDate is NOT null 
	GROUP BY av.ArtistName";
	
	$result= mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ."  Number of Pieces Sold " .$row['NumberOfPiecesSold'] ."<br>";
	}
?>