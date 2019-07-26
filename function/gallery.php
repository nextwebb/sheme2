
<?php

	include('config.php');

	function gallery($id){
	   
	global $conn ;
	$sql = "SELECT * FROM gals WHERE hotel_id=$id ";
	$query = $conn->prepare($sql);
	$query->execute();

	$n = $query->rowCount(); 
 
	$x=1;
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$uid[$x]=$row['id']; 
			$title[$x]=$row['title']; 
			$desp[$x]=$row['description']; 
			$img[$x]=$row['img']; 


		++$x;
	}
	 	
	
	return array($n, $title, $desp, $img);

	}	
	
/**********************************************s************/
//echo var_dump(fac(2));	

?>
