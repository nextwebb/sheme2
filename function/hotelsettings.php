<?php
	include('config.php');
	
	function settings($id){
		global $conn ;
	$sql = "SELECT * FROM `hotels` WHERE `id`=$id";
	$query = $conn->prepare($sql);
	$query->execute();
	while($row = $query->fetch(PDO::FETCH_ASSOC))
	{
		$hotel = $row;
	}
	// echo ($hotel['hotelname']);
	return $hotel;	
	}	   
  
?>


	