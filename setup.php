<?php
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
//include('function/rcopy.php');



//-------------- Run files ----------------------

 include('1.php');
 include('2.php');
 include('3.php');
 include('4.php');
 include('5.php');
include('6.php');
 
//---------- Copy Tins ----------------------//
/*
@copyr('extras/','../preview/'.$id); 
@copyr('scheme'.$template_id.'/images/','../preview/'.$id.'/images/'); 
@copyr('scheme'.$template_id.'/assets/','../preview/'.$id.'/assets/'); 



echo "1"; 
exit;*/

/*
copyr('extras/googlee967b79b57092639.html','../../hotels/'.$id.'/googlee967b79b57092639.html');  
copyr('extras/BingSiteAuth.xml','../../hotels/'.$id.'/BingSiteAuth.xml');   */

 
/*
@mkdir('../../hotels/'.$id); //  Creates directory that is named the hotel ID
@mkdir('../../hotels/'.$id."/en"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/images"); //  Creates image folder
@mkdir('../../hotels/'.$id."/en/rooms-and-suites"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/rooms-and-suites"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/en/hotel-services"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/hotel-services"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/en/pictures-and-gallery"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/pictures-and-gallery"); //  Creates directory that is named the en folder

@mkdir('../../hotels/'.$id."/en/deals-and-discounts"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/deals-and-discounts"); //  Creates directory that is named the en folder

@mkdir('../../hotels/'.$id."/en/contact-us"); //  Creates directory that is named the en folder
@mkdir('../../hotels/'.$id."/contact-us"); //  Creates directory that is named the en folder
*/
exit();
require_once('function/config.php');  
include('function/hotelsettings.php');
//include('function/gallery.php'); 
//include('function/room.php'); 
//include('function/facilities.php'); 
//include('function/rcopy.php');
//include('../../functions/calender.php');

create_table($conn, $id);
populate($id, $conn);

@include('extras/copyImage.php');
imgcopy($id);

// Copy Suplementary pages
copyr('pictures','../../hotels/'.$id.'/pictures'); 
copyr('css','../../hotels/'.$id.'/css'); 
copyr('fonts','../../hotels/'.$id.'/fonts');
copyr('js','../../hotels/'.$id.'/js');
copyr('extras/sitemap.php','../../hotels/'.$id.'/sitemap.php'); 
copyr('extras/googlec386c5cdb132dee2.html','../../hotels/'.$id.'/googlec386c5cdb132dee2.html'); 
copyr('extras/googlee967b79b57092639.html','../../hotels/'.$id.'/googlee967b79b57092639.html');  
copyr('extras/BingSiteAuth.xml','../../hotels/'.$id.'/BingSiteAuth.xml');   

// include('index.php');
// include('rooms-and-suites/index.php'); 
// include('hotel-services/index.php'); 
// include('pictures-and-gallery/index.php'); 
// include('deals-and-discounts/index.php'); 
// include('contact-us/index.php'); 

 
echo "1";  
?>