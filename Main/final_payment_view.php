<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT av.ArtistName, av.BDate, av.ArtworkTitle, av.SaleDate,av.CustomerName, av.FinalPaymentDate FROM artworkview av 
	WHERE av.AcquisitionDate = '1995-09-12'";
	
	$result= mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ." Date of Birth : " .$row['BDate'] ." Title : " .$row['ArtworkTitle'] ." Date of sale : " .$row['SaleDate'] ." customer name : " .$row['CustomerName'] ." final payment date : " .$row['FinalPaymentDate']  ."<br>";
	}
?>