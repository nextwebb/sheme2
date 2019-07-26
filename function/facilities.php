
<?php

	include('config.php');

	function fac($id){
	   
	global $conn ;
	$sql = "SELECT * FROM facilities WHERE hotel_id=$id ";
	$query = $conn->prepare($sql);
	$query->execute();

	$n = $query->rowCount(); 
 
	$x=1;
	while($row = $query->fetch(PDO::FETCH_ASSOC)){

			$name[$x]=$row['name'];
			$rate[$x]=$row['rate'];
			$guest_rate[$x]=$row['guest_rate'];	  
			$video[$x]=$row['video'];
			$desp[$x]=$row['description'];
			$rules[$x]=$row['rules'];
			$uid[$x]=$row['id'];
			 
			 

	$sql1 = "SELECT * FROM `photos` WHERE `photoable_id`=$uid[$x]";

	$query1 = $conn->prepare($sql1);
	$query1->execute();
	
	//echo $query1->rowCount(); 
	
		$y=0;

		while($pixrow = $query1->fetch(PDO::FETCH_ASSOC)){
		    
		    if($pixrow['photoable_type']=="App\Facility"){
    			++$y;
    			$pix[$x][$y]=$pixrow['path'];
		    }
			 
		}
			$pixno[$x]=$y;
		++$x;
	}
	 	
	
	return array($n, $name, $rate, $guest_rate, $video, $desp, $pixno, $pix );

	}	
	
/**********************************************s************/
//echo var_dump(fac(2));	

?>
