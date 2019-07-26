<?php

require_once('function/config.php');  
include('function/hotelsettings.php');
include('function/gallery.php'); 
include('function/room.php'); 
include('function/facilities.php'); 
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Statement hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="assets/css/404.css"/>
  <style type="text/css">
    

  </style>

   <script type="application/ld+json">
{
   "@context" : "http://schema.org",
   "aggregateRating" : {
      "@type" : "AggregateRating",
      "bestRating" : 5,
      "reviewCount" : 184,
      "ratingValue" : 4.5
   },
   "name" : "The Statement Hotel",
   "priceRange" : "N18,000 - N90,000",
   "url" : "http://statementhotel.com",
   "hasMap" : "",
   "image" : "http://statementhotel.com/images/pool/66.jpg",
   "description" : "",
   "@type" : "Hotel",
   "address" : {
      "streetAddress" : "Plot 1002 1st Avenue, By Shehu Shagari Way, Beside Federal High Court Headquaters",
      "postalCode" : "",
      "addressRegion" : "Central Business District",
      "addressLocality" : "Abuja",
      "@type" : "PostalAddress",
      "addressCountry" : "Nigeria",
      "telephone" : "+234.0706-815-1023"
   }
}
</script>    <!-- Global site tag (gtag.js) - Google Analytics -->


  </head>
  <body>

    <header role="banner">

      
    </header>
    <!-- END header -->
    <?php 
  
      include("includes/navbar.php");

    ?>


   
 <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings(1)['main_img']; ?>);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate" style="margin-top:50px">
              <h1>Our Rooms</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>
            <div class="row justify-content-center" >
              <div class="col-md-auto">
                <nav class=" breadcrumb_white text-center">
                  <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.html" itemtype="https://schema.org/Thing"
       itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                        <meta  itemprop="position" content="1"/>
                    </li>
                      
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="rooms.html" itemtype="https://schema.org/Thing"
       itemprop="item">&<span  itemprop="name">&nbsp;Rooms &nbsp;</span></a>
                        <meta  itemprop="position" content="2"/>
                    </li>
                      
                    <li class=" breadcrumb_for_list_Items" class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon'  href="room2.html" itemtype="https://schema.org/Thing"
       itemprop="item">&<span itemprop="name">&nbsp;<?php echo room(1)[1][1] ?></span></a>
                          <meta  itemprop="position" content="3"/>
                      
                    </li>
                  </ol>
                </nav>
              </div>
            </div>

          </div>

        </div>
      </div>


    </section>
    <!-- END section -->


    <section class="site-section" style="padding-bottom: 10px; padding-top: 10px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" style="padding:10px; ">

            <div class="mb-3 element-animate">
              <span class="h1">Our <?php echo room(1)[1][1]?></span>
               
            </div>
            

          </div>

          <div class="col-md-7 mb-4 mt-1" style="margin-top:10px ">

              <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <?php
                    $a = room(1)[6][1]; //3
                    for ($i = 2; $i <=$a; $i++) {
                            for ($j = 1; $j <=$a ; $j++) {
                               echo '<li data-target="#demo" data-slide-to="'.$j.'"></li>';
                               break;
                            }
                     
                    } ?>
                   
                    
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner" style="border-radius: 10px">
                    <div class="carousel-item active">
                      <img class='center_room_image' src="images/<?php echo room(1)[7][1][3]?>" alt="<?php echo room(1)[4][1]  ?>" title="<?php echo room(1)[1][1] ?>">
                    </div>
                     <?php for ($i = 1; $i <$a ; $i++) {
                         echo '<div class="carousel-item"> '?>
                      <img class='center_room_image' src="images/<?php echo room(1)[7][1][$i]  ?>" alt="<?php echo room(1)[4][1]  ?>" title="<?php echo room(1)[1][1]  ?>">
                    <?php echo '</div>'?>
                       
                     <?php }?>
                    
                    
                  </div>
              </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>

                  <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                  </a>

            </div>





        
        <div class="col-md-5 mb-4">

            <span class="pricing-from clearfix">
                    <h4 class='float-right ' style="color: #c9ac87"><del>N</del><?php echo number_format(room(1)[2][1])  ?></h4>
                  </span>
          
            <p class="text-justify">
              
              <?php echo room(1)[4][1]  ?>
            </p>
            <section>
            <div class="container">
             <div class="row ">
                              <div class="col-md-2 d-flex justify-content-center">

                                <span class='icon' style="margin: 5px"><i class="fa fa-users" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >2 Guests</small>
                                </span>
                              </div>
                              <div class="col-md-2 d-flex justify-content-center" >
                                <span class='icon' style="margin: 5px"><i class="fa fa-bed" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >Beds</small>
                                </span>
                              </div>
                              <div class="col-md-2 d-flex justify-content-center">

                                <span class='icon' style="margin: 5px"><i class="fa fa-wifi" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >Free Wifi</small>
                                </span>
                              </div>
                              <div class="col-md-2 d-flex justify-content-center">
                                <span class='icon' style="margin: 5px"><i class="fa fa-coffee" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >Breakfast</small>
                                </span>
                              </div>
                              <div class="col-md-2 d-flex justify-content-center">
                                <span class='icon' style="margin: 5px"><i class="fa fa-television" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >Tv</small>
                                </span>
                              </div>
                              <div class="col-md-2 d-flex justify-content-center">
                                <span class='icon' style="margin: 5px"><i class="fa fa-shower" aria-hidden="true" style="font-size: 30px;"></i><br>
                                  <small class="icon_title"  >Shower</small>
                                </span>
                              </div>

                        </div>
            </div>
            </section>
            <div class="row justify-content-center" style="text-align: center;">

                <div class="col-md-auto">
                  <p><a href="" class="btn btn-primary btn-sm">Check Availability</a></p>
                </div>
            </div>

      </div>




</div>
</div>
    </section>


    

    <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-start ">

            <div class="mb-3 element-animate">
              <h1 style="margin-bottom: 5px; border-bottom: 2px solid #c9ac87">Other Rooms</h1>
            </div>

          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
             
            <div class="post-entry mh-100 d-inline-block p-2" style="background-color: #fff";>
              <a href="1/hotel-rooms/<?php echo strtolower(str_replace(" ","-", room(1)[1][2]))  ?>/index.php"><img src="images/<?php echo room(1)[7][2][1]; ?>" alt="<?php echo room(1)[4][2]  ?>" title="<?php echo room(1)[1][2]  ?>"></a>
              <div class="body-text" style="height: 100px; padding: 0px;">
                 
                    <div class="category" style="color: #000"><?php echo room(1)[1][2]  ?></div>
                <div class="row justify-content-md-center mt-4" >
                    <div class="col-md-auto">
                        <p><a href="room3.html" class="btn btn-primary btn-sm">Learn More</a></p>
                    </div>
              </div>

              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
             
            <div class="post-entry mh-100 d-inline-block p-2" style="background-color: #fff";>
              <a href="1/hotel-rooms/<?php echo strtolower(str_replace(" ","-", room(1)[1][3]))  ?>/index.php"><img src="images/<?php echo room(1)[7][3][1]; ?>" alt="<?php echo room(1)[4][3]  ?>" title="<?php echo room(1)[1][3]  ?>"></a>
              <div class="body-text" style="height: 100px; padding: 0px;">
                 
                    <div class="category" style="color: #000"><?php echo room(1)[1][3]  ?></div>
                <div class="row justify-content-md-center mt-4" >
                    <div class="col-md-auto">
                        <p><a href="room3.html" class="btn btn-primary btn-sm">Learn More</a></p>
                    </div>
              </div>

              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            
            <div class="post-entry mh-100 d-inline-block p-2" style="background-color: #fff";>
              <a href="1/hotel-rooms/<?php echo strtolower(str_replace(" ","-", room(1)[1][2]))  ?>/index.php"><img src="images/<?php echo room(1)[7][3][2]; ?>" alt="<?php echo room(1)[4][3]  ?>" title="<?php echo room(1)[1][3]  ?>"></a>
              <div class="body-text" style="height: 100px; padding: 0px;">
                 
                       <div class="category" style="color: #000"><?php echo room(1)[1][3]  ?></div>
                <div class="row justify-content-md-center mt-4" >
                    <div class="col-md-auto">
                        <p><a href="room3.html" class="btn btn-primary btn-sm">Learn More</a></p>
                    </div>
              </div>

              </div>
            </div>
          </div>
          
            </div>
          </div>
    </section>



     <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="widget widget-address">
                                <h5 class="footer-widget-title decorator">Address</h5>
                                <div class="address">
                                    <p> <i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>&nbsp; Plot 1002 1st Avenue, By Shehu Shagari Way, Central Business District, Abuja</p>
                                </div>
                                 <div>
                                    <p><i class="fa fa-book" aria-hidden="true"></i> <a href="mailto:booking@statementhotel.com">&nbsp; booking@statementhotel.com</a></p>
                                </div>
                                <div>
                                    <p>Reservations:<br /><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+234.0706-815-1023">&nbsp; +234.0706-815-1023</a></p>
                                </div>

            </div>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="p-3"><i class="fab fa-twitter"></i></i></a>
              <a href="#" class="p-3"><i class="fa fa-instagram" aria-hidden="true"></i>
</a>
              <a href="#" class="p-3"><i class="fab fa-linkedin-in"></i></a>
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </p>
          </div>
          <div class="col-md-2">
            <h3>Connect With Us</h3>
            <p>Get Updates</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><i class="fas fa-arrow-right"></i></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>

            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">

            <p class="copyright-text">Designed and Managed by <a href="http://www.primeroyalhospitality.com?source="statementhotel.com >Prime Royal Hospitality Services Ltd. </a></p>

          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/magnific-popup-options.js"></script>

    <script src="assets/js/main.js"></script>
    

  </body>
</html>