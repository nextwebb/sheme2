<?php

	include('config.php');

	function room($id){
	   
	global $conn ;
	$sql = "SELECT * FROM rooms WHERE hotel_id=$id ORDER BY promo_rate DESC";
	$query = $conn->prepare($sql);
	$query->execute();

	$n = $query->rowCount(); 
 
	$x=1;
	while($row = $query->fetch(PDO::FETCH_ASSOC)){

			$name[$x]=$row['room_name'];
			$rate[$x]=$row['rate'];
			$prate[$x]=$row['promo_rate'];	 
			$desc[$x]=$row['room_description']; 
			$uid[$x]=$row['id'];
			 
			 

	$sql1 = "SELECT * FROM `photos` WHERE `photoable_id`=$uid[$x]";

	$query1 = $conn->prepare($sql1);
	$query1->execute();
	
	//echo $query1->rowCount(); 
	
		$y=0;

		while($pixrow = $query1->fetch(PDO::FETCH_ASSOC)){
		    
		    if($pixrow['photoable_type']=="App\Room"){
    			++$y;
    			$pix[$x][$y]=$pixrow['path'];
		    }
			 
		}
			$pixno[$x]=$y;
		++$x;
	}
	 	
	
	return array($n, $name, $rate, $prate, $desc, $uid, $pixno, $pix );

	}	
	
/**********************************************************/
//echo room(12)[7][1][4];	

?>

