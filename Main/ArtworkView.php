<?php
	$conn = mysqli_connect("localhost", "root", "","gallery");
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$create_view_query = "CREATE VIEW ArtworkView AS 
	SELECT a.name as ArtistName, a.birthDate as BDate, art.title as ArtworkTitle, art.form as Form, b.saleDate as SaleDate, art.price as ArtworkPrice, c.name as CustomerName, p.finalDate as FinalPaymentDate, art.acquisitionDate as AcquisitionDate
	FROM artist a, artwork art, customer c, bought b, payments p
	WHERE a.aID = art.aID AND art.artID = p.artID 
	AND art.artID = b.artID AND b.cID = c.cID
	ORDER BY a.name";
	
	mysqli_query($conn, $create_view_query);
	
	$fetchQuery = "SELECT * FROM ArtworkView";
	
	$result= mysqli_query($conn, $fetchQuery);
	while($row = mysqli_fetch_array($result)){
      echo "Artist Name: " .$row['ArtistName'] ."Date Of Birth : " .$row['BDate'] ." title of artwork : " .$row['ArtworkTitle'] ." art form : " .$row['Form'] ." sale Date : " .$row['SaleDate'] ." price : " .$row['ArtworkPrice'] ." customer Name : " .$row['CustomerName'] ." final payment Date : " .$row['FinalPaymentDate'] ." acquisition Date : " .$row['AcquisitionDate'] ."<br>";
	}
?>