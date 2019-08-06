<?php
$id = 1;
$folder='final/';
// $id=$_GET['hotel_id'];  
// $template_id=$_GET['template_id']; 
 
/*
@mkdir('../preview/'.$id); //  Creates directory that is named the hotel ID
@mkdir('../preview/'.$id.'/en/'); //  Creates en directory that is named the hotel ID
@mkdir('../preview/'.$id.'/images'); // Creates Images folder
@mkdir('../preview/'.$id.'/assets'); // Creates assets folder */


//---------------------- Load all functions ----------------//

require_once('function/config.php');  
include('function/hotelsettings.php');
include('function/gallery.php'); 
include('function/room.php'); 
include('function/facilities.php'); 
include('function/rcopy.php');



//-------------- Run files ----------------------
@mkdir($id);
@mkdir($id.'/en');
@mkdir($id.'/hotel-rooms');
@mkdir($id.'/en/hotel-rooms');
@mkdir($id."/facilities");
@mkdir($id."/en/facilities");
@mkdir($id."/gallery");
@mkdir($id."/en/gallery");
@mkdir($id."/contact-us");
@mkdir($id."/en/contact-us");

@mkdir('final');
@mkdir($folder.$id);
@mkdir($folder.$id.'/en');
@mkdir($folder.$id.'/hotel-rooms');
@mkdir($folder.$id.'/en/hotel-rooms');
@mkdir($folder.$id."/facilities");
@mkdir($folder.$id."/en/facilities");
@mkdir($folder.$id."/gallery");
@mkdir($folder.$id."/en/gallery");
@mkdir($folder.$id."/contact-us");
@mkdir($folder.$id."/en/contact-us");
@mkdir($folder.$id."/extras");
@mkdir($folder.$id."/en/extras");



 include('1.php');
 include('2.php');
 include('3.php');
 include('4.php');
 include('5.php');
 include('6.php');

 
//---------- Copy Tins ----------------------//

@copyr('extras',$folder.$id.'/extras'); 
@copyr('images',$folder.$id.'/images'); 
@copyr('assets',$folder.$id.'/assets'); 



 echo "1"; 
 exit;

/*
copyr('extras/googlee967b79b57092639.html','../../hotels/'.$id.'/googlee967b79b57092639.html');  
copyr('extras/BingSiteAuth.xml','../../hotels/'.$id.'/BingSiteAuth.xml');   */

 






?>