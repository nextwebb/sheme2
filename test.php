<?php


  

require_once('function/config.php');  
include('function/hotelsettings.php');
include('function/gallery.php'); 
include('function/room.php'); 
include('function/facilities.php'); 

	//print_r( gallery(1)[3][10]); //classic
	//print_r( gallery(1)[3][9]); //italian
	//print_r( gallery(1)[3][8]); //presidential
	//print_r(room(1)[7][3][2]);
	//echo gallery(1)[3][1]



//$data = ob_get_contents();  
 //ob_clean();  // clears buffer and closes buffering

 //@mkdir('testing');
 //@mkdir('1');
 //@mkdir('1/services');

//file_put_contents("testing/index.php", $data);
 

 //file_put_contents('1/services.php', $data);
 //echo $data;

echo $n = room(1)[0].'<br> ';//3 rooms
echo $a = room(1)[6][1].'<br> ';//3-pics/presidential
echo $b = room(1)[6][2].'<br> ';;//3-pics/business
echo $c = room(1)[6][3].'<br> ';//3-pics/classic
echo room(1)[1][1].'<hr>';
echo room(1)[1][2].'<hr>';
echo room(1)[1][3].'<hr>';
echo fac(1)[7][3][1]."its me";
echo fac(1)[0];
echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']."<br>";
echo getcwd()."<br>";
echo $_SERVER["DOCUMENT_ROOT"]."<br>";
echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'<br>';
echo gallery(1)[0];//10 images
echo gallery(1)[3][1]."<br>";
echo $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].'<br>';
echo $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'<br>';
echo $data1_nav_room= strtolower(str_replace(" ","-", room(1)[1][1])).".php";
$str='ASDFFF';
echo strtolower($str);
echo '<del>N</del>';

// for ($i = 1; $i <=$n ; $i++) {

		
// 	echo  "*".room(1)[1][$i].'<br>';//room name

// 	echo number_format(room(1)[2][$i]).'<br>';//room price

// 	echo room(1)[4][$i].'<br>';//room description
// 	for ($j = 1; $j <=$a ; $j++) {

// 				echo room(1)[7][$i][$j].'<hr>';//room picture
// 			}
// }


               
                    // for ($i = 1; $i <=$a; $i++) {
                    //         for ($j = 1; $j <=$a ; $j++) {
                    //         	echo $j."its me";
                    //         	break;
                    //         }
                             
                     
                    // }

?>






<!-- images/<?php //echo fac(1)[7][6][1]?> -->

<!-- <div class="col-md-4 img-fluid" style="position: relative; margin-top:20px;margin-bottom: 10px; background-image: url(images/<?php //echo fac(1)[7][6][1]?>);" title="<?php //echo fac(1)[5][6] ?>" alt="<?php //echo fac(1)[1][6] ?>" >
            <div style="position: absolute;font-size:24px; font-size: 24px;font-weight: 900;top: 50%;left: 25%; width: 100% ">
              <a href="" style="color: #fff">
                     <i class="fa fa-plus" ></i><strong style=""> &nbsp;See more</strong>
              </a>
            </div>
          </div> -->






