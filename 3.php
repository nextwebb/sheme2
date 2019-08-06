



<?php

 ob_start();
   $main = 2;

$n = room(1)[0];//total room 3


 for ($i = 1; $i <=$n ; $i++) {

   echo '<!doctype html>'; ?> 
 
 

          <head>
              <title><?php echo room($id)[1][$i]?> from ₦<?php echo number_format(room($id)[2][$i]) ?> at <?php echo settings($id)['hotel_name']." in ".settings($id)['city'].' , '.settings($id)['country']  ?></title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content=" Best hotel room price in ikeja from  <?php echo number_format(room($id)[2][$i]) ?> at <?php echo settings($id)['hotel_name'] ?>">

              <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:250,400,700" rel="stylesheet">

              <link rel="stylesheet" href="assets/css/bootstrap.css">
              <link rel="stylesheet" href="assets/css/animate.css">
              <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

              <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
              <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
              <link rel="stylesheet" href="assets/css/magnific-popup.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="canonical" href="<?php echo "https://".settings($id)['domain'].'/hotel-rooms/'.strtolower(str_replace(" ", "-", room($id)[1][$i]))?>/index.php" />
 
           

              <!-- Theme Style -->
              <link rel="stylesheet" href="assets/css/style.css">
              <!-- Google font -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

            <!-- Custom stlylesheet -->
            <link type="text/css" rel="stylesheet" href="assets/css/404.css" />
            
           



            </head>

            <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo room($id)[1][$i] ?>",
            "image":"images/<?php echo room($id)[7][$i][1] ?>",
            "description": "<?php echo room($id)[4][$i] ?>",
            "sku": "0446310786",
            "mpn": "925872",
            "brand": {
              "@type": "Thing",
              "name": "<?php echo settings($id)['hotel_name'] ?>"
            },
            "review": {
              "@type": "Review",
              "reviewRating": {
                "@type": "Rating",
                "ratingValue": "4",
                "bestRating": "5"
              },
              "author": {
                "@type": "Person",
                "name": "<?php echo settings($id)['hotel_name'] ?> "
              }
            },
            "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "4.4",
              "reviewCount": "89"
            },
            "offers": {
              "@type": "Offer",
              "url": "<?php echo settings($id)['domain'] ?>",
              "priceCurrency": "NGN",
              "price": "<?php echo room($id)[2][$i] ?>",
              "priceValidUntil": "2019",
              "availability": "https://schema.org/InStock",
              "seller": {
                "@type": "Organization",
                "name": "<?php echo settings($id)['hotel_name'] ?>"
              }
            }
          }
          </script>
          <script type="application/ld+json">
              {
                 "@context" : "http://schema.org",
                 "aggregateRating" : {
                    "@type" : "AggregateRating",
                    "bestRating" : 5,
                    "reviewCount" : 184,
                    "ratingValue" : 4.5
                 },"name" : "<?php echo settings($id)['hotel_name'] ?>",
                 "priceRange" : "<?php echo "₦". number_format(room($id)[2][3]) ?> - <?php echo "₦". number_format(room($id)[2][1]) ?>",
                 "url" : "<?php echo settings($id)['domain'] ?>",
                 "hasMap" : "",
                  "image" : "images/<?php echo settings($id)['logo'] ?>",
                 "description" : "",
                 "@type" : "Hotel",
                 "address" : {
                    "streetAddress" : "<?php echo settings($id)['address1']  ?>",
                    "postalCode" : "",
                    "addressRegion" : "<?php echo settings($id)['address1']  ?>",
                    "addressLocality" : "<?php echo settings($id)['address1']  ?>",
                    "@type" : "PostalAddress",
                    "addressCountry" : "Nigeria",
                    "telephone" : "<?php echo settings($id)['hotline']  ?>"
                 }
              }
          </script>    <!-- Global site tag (gtag.js) - Google Analytics -->
            <body>

              <header role="banner">
                  <?php 
            
                     include("includes/navbar2.php");

                  ?>
                
              </header>
              <!-- END header -->


              <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings($id)['main_img']; ?>);">
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
                              <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="../index.php" itemtype="https://schema.org/Thing"
                 itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                                  <meta  itemprop="position" content="1"/>
                              </li>
                                
                              <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.php" itemtype="https://schema.org/Thing"
                 itemprop="item">&<span  itemprop="name">&nbsp;Rooms &nbsp;</span></a>
                                  <meta  itemprop="position" content="2"/>
                              </li>
                                
                              <li class=" breadcrumb_for_list_Items" class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon'  href="<?php echo strtolower(str_replace(" ", "-", room($id)[1][$i])).".php"  ?>" itemtype="https://schema.org/Thing"
                 itemprop="item">&<span itemprop="name">&nbsp;<?php echo room($id)[1][$i] ?></span></a>
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
                        <span class="h1">Our <?php echo room($id)[1][$i]?></span>
                         
                      </div>
                      

                    </div>

                    <div class="col-md-7 mb-4 mt-1" style="margin-top:10px ">

                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <?php
                              // $a = room($id)[6][1]; //3
                              for ($d = 2; $d <=$n; $d++) {
                                      for ($j = 1; $j <=$n ; $j++) {
                                         echo '<li data-target="#demo" data-slide-to="'.$j.'"></li>';
                                         break;
                                      }
                               
                              } ?>
                             
                              
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner" style="border-radius: 10px">
                              <div class="carousel-item active">
                                <img class='center_room_image' src="images/<?php echo room($id)[7][$i][3]?>" alt="<?php echo room($id)[4][$i]  ?>" title="<?php echo room($id)[1][$i] ?>">
                              </div>
                               <?php for ($b = 1; $b <=$n ; $b++) {
                                   echo '<div class="carousel-item"> '?>
                                <img class='center_room_image' src="images/<?php echo room($id)[7][1][$i]  ?>" alt="<?php echo room($id)[4][1]  ?>" title="<?php echo room($id)[1][$b]  ?>">
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
                              <h4 class='float-right ' style="color: #c9ac87"><?php echo '₦'.number_format(room($id)[2][$i])  ?></h4>
                            </span>
                    
                      <p class="text-justify">
                        
                        <?php echo room($id)[4][$i]  ?>
                      </p>
                      <section>
                      <div class="container">
                         <div class="row ">
                                          <div class="col-md-2 d-flex justify-content-center">

                                            <span class='icon' style="margin: 5px"><i class="fa fa-users" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              2<small   >&nbsp;Guests</small>
                                            </span>
                                          </div>
                                          <div class="col-md-2 d-flex justify-content-center" >
                                            <span class='icon' style="margin: 5px"><i class="fa fa-bed" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              <small   >Beds</small>
                                            </span>
                                          </div>
                                          <div class="col-md-2 d-flex justify-content-center">

                                            <span class='icon' style="margin: 5px"><i class="fa fa-wifi" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              <small> Wifi</small>
                                            </span>
                                          </div>
                                          <div class="col-md-2 d-flex justify-content-center">
                                            <span class='icon' style="margin: 5px"><i class="fa fa-coffee" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              <small   >Breakfast</small>
                                            </span>
                                          </div>
                                          <div class="col-md-2 d-flex justify-content-center">
                                            <span class='icon' style="margin: 5px"><i class="fa fa-television" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              <small   >Tv</small>
                                            </span>
                                          </div>
                                          <div class="col-md-2 d-flex justify-content-center">
                                            <span class='icon' style="margin: 5px"><i class="fa fa-shower" aria-hidden="true" style="font-size: 25px;"></i><br>
                                              <small   >Shower</small>
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
                        <h1 style="margin-bottom: 5px; border-bottom: 2px solid #c9ac87">Other Suites</h1>
                      </div>

                    </div>
                    <?php  
                            //loop the other rooms
                            //exclude just one of the rooms
                        for ($c = 2; $c <=$n ; $c++) {
                          
                      
                        echo '<div class="col-md-4" style="margin-bottom: 10px;">' ?>
                           
                          <div class="post-entry mh-100 d-inline-block p-2" style="background-color: #fff";>
                            <a href="<?php echo strtolower(str_replace(" ","-", room($id)[1][$c]))  ?>.php"><img src="images/<?php echo room($id)[7][$c][1]; ?>" alt="<?php echo room($id)[4][$c]  ?>" title="<?php echo room($id)[1][$c]  ?>"></a>
                            <div class="body-text" style="height: 100px; padding: 0px;">
                               
                                  <div class="category" style="color: #000"><?php echo room($id)[1][$c]  ?></div>
                              <div class="row justify-content-md-center mt-4" >
                                  <div class="col-md-auto">
                                      <p><a href="" class="btn btn-primary btn-sm">Learn More</a></p>
                                  </div>
                            </div>

                            </div>
                          </div>
                       <?php echo '</div>' ?>

                         <?php }?>
                    
                      </div>
                    </div>
             <?php echo '</section>';



            include('includes/footer.php'); 
            
            $data = ob_get_contents();  

            ob_clean();  // clears buffer and closes buffering

           
           
            $subdir=strtolower(str_replace(" ","-", room($id)[1][$i]));
            @mkdir($id."/hotel-rooms");
            $data1 =str_replace("assets/", "../assets/", $data);

            $data1 =str_replace("images/", "../images/", $data1);
            file_put_contents($id."/hotel-rooms/$subdir.php", $data1);
            file_put_contents($folder.$id."/hotel-rooms/$subdir.php", $data1);



            $data_en =str_replace("../images/", "../../images/", $data1);
            $data_en =str_replace("../assets/", "../../assets/", $data_en);
            file_put_contents($id."/en/hotel-rooms/$subdir.php", $data_en);
            file_put_contents($folder.$id."/en/hotel-rooms/$subdir.php", $data_en);
            
            //final

           

            
            //echo $data;
             //break;
                  }?>