<?php
  ob_start();
  ?>
<!doctype html>
<head>
    <title><?php echo room(1)[1][3]?> from <?php echo number_format(room(1)[2][3]) ?> at <?php echo settings(1)['hotel_name'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" Best hotel room price in ikeja from  <?php echo number_format(room(1)[2][3]) ?> at <?php echo settings(1)['hotel_name'] ?>">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="assets/css/404.css" />
  
 



  </head>
    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
  <script type="application/ld+json">
        {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "<?php echo room(1)[1][3]?> from <?php echo number_format(room(1)[2][3]) ?> at <?php echo settings(1)['hotel_name'] ?>",
      "image": 
        "images/<?php echo room(1)[7][1][3] ?>",
      "brand": {
        "@type": "Thing",
        "name": "<?php settings(1)['hotel_name'] ?>"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.4",
        "ratingCount": "89"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "<?php echo room(1)[2][3] ?>",
        "highPrice": "<?php echo room(1)[2][1] ?>",
        "priceCurrency": "NGN"
      }
    }
  
</script>
  <body>
    
    <header role="banner">
     
       <?php 
  
       include("includes/navbar.php");

    ?>
    </header>
    <!-- END header -->



    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings(1)['main_img']; ?>);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate" style="margin-top:55px">
              <h1>Our Rooms</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

            <div class="row justify-content-center" >
              <div class="col-md-auto">
                <nav class=" breadcrumb_white text-center">
                  <ol class="breadcrumb justify-content-center" itemscope itemtype="https://schema.org/BreadcrumbList" >
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.php" itemtype="https://schema.org/Thing"
       itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                      
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="hotel-rooms" itemtype="https://schema.org/Thing"
       itemprop="item">&<span itemprop="name">&nbsp;Rooms &nbsp;<span></a>
                        <meta itemprop="position" content="2" />
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

    
<div class="container">
  
    <!-- Control the column width, and how they should appear on different devices -->
    <?php 

          $n = room(1)[0];
          $a = room(1)[6][1];

          for ($i = 1; $i <=$n ; $i++) { 
          echo ' <div class="row "> '?>
                    <div class="col-sm-4 mb-4 mt-4">
                        <div class="container_all_rooms">
                          <a href="<?php echo strtolower(str_replace(" ","-", room(1)[1][$i]))  ?>/index.php">
                              <img src="images/<?php 
                                      for ($j = 1; $j <=$a ; $j++) {
         
                                            echo room(1)[7][$i][$j];
                                            break;
                                        }
                              ?>" alt=" <?php echo room(1)[4][$i] ?>" title="<?php echo room(1)[1][$i] ?>" style="width:100%;">
                              <div class="content_all_rooms">
                                 <span style="margin-left: 10px; font-size: 24px;font-weight: 900">
                                    <strong style="font-size: 24px;font-weight: 900;"> <?php echo room(1)[1][$i] ?></strong>
                                    
                                    </span>
                                    
                                </span>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="col-sm-8 mb-4" style="margin-top: 30px; text-align: left;">
                      <h2><?php echo room(1)[1][$i] ?></h2>
                            <i class="fa fa-star" aria-hidden="true" style="font-size: 15px"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size: 15px"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size: 15px"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size: 15px"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size: 15px"></i>
                                        <del>N</del><?php echo number_format(room(1)[2][$i])?>;
                        <p>
                          <?php echo room(1)[4][$i]?>
                        </p>
                      <ul>
                          <a href="room2.html">
                            <li class="icon_list_type" ><span class="ion-ios-people-outline" style="font-size:20px;color:#EDD97E "></span><strong> 2 Guests</strong></li>
                          </a>
                          <a href="">
                            <li class="icon_list_type"><span class="ion-ios-crop" style="font-size:20px;color:#EDD97E "></span> <strong>22 ft <sup>2</sup></strong></li>
                          </a>
                          <a href="#">
                            <li class="icon_list_type"><i class="fa fa-bed" aria-hidden="true" style="font-size:20px;color:#EDD97E "></i> &nbsp;<strong>Beds</strong></li>
                          </a>
                            <a href="#">
                              <li class="icon_list_type"><i class="fa fa-wifi" style="font-size:20px;color:#EDD97E"></i> <strong >Free Wifi</strong> </li>
                            </a>
                            <a href="#">
                              <li class="icon_list_type"><i class="fa fa-television" aria-hidden="true" style="font-size:20px;color: #EDD97E "> </i><strong>Television</strong></li>
                            </a>
                            <a href="#">
                              <li class="icon_list_type"><i class="fa fa-coffee" aria-hidden="true"  style="font-size:20px;color:#EDD97E"></i><strong>Breakfast</strong></li>
                            </a>
                      </ul>

                    </div>      
            <?php echo '</div>'?>
       
    <?php }?>
  </div>


<?php include('includes/footer.php'); ?>

<?php
  
  $data = ob_get_contents();  

  ob_clean();  // clears buffer and closes buffering

  @mkdir(1);
  @mkdir("1/hotel-rooms");
  $data1 =str_replace("assets/", "../assets/", $data);

  $data1 =str_replace("images/", "../images/", $data1);

  $data1 =str_replace("opt/lampp/htdocs/", "", $data1);

  file_put_contents("1/hotel-rooms/index.php", $data1);
   //echo $data;
  ?>
   
   

    
   
   