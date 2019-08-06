<?php

  ob_start();

    $main = 4;
?>


    <!doctype html>
    <html lang="en">
      <head>
        <title><?php echo settings($id)['hotel_name']; ?> has a rich list of facilities & guest services offered.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta name="description" content="Here is an overview of minimum facilities found in the hotel followed by a list of our <?php 
          $t=fac($id)[0];
          for ($v = 1; $v <= $t; $v++) {
              echo fac($id)[1][$v].',';

          }
            echo '....';

         ?> ">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
         <link rel="canonical" href="<?php echo 'https://'.settings($id)['domain']?>/en/facilities/index.php" />
 


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
       "name" : "<?php echo settings($id)['hotel_name'] ?>",
       "priceRange" : "<?php echo "₦". number_format(room($id)[2][3]) ?> - <?php echo "₦". number_format(room($id)[2][1]) ?>",
       "url" : "<?php echo settings($id)['domain'] ?>",
       "hasMap" : "",
       "image" : "images/<?php echo fac($id)[7][3][1] ?>",
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
    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "LocalBusiness",
      "name" : "<?php echo settings($id)['hotel_name'] ?>",
      "image" : "images/<?php echo settings($id)['logo'] ?>",
      "telephone" : "<?php echo settings($id)['hotline']  ?>",
      "email" : "<?php echo settings($id)['frontoffice_mail']  ?>",
      "priceRange" : "<?php echo "₦". number_format(room($id)[2][3]) ?> - <?php echo "₦". number_format(room($id)[2][1]) ?>",
      "address" : {
        "@type" : "PostalAddress",
        "streetAddress" : "<?php echo settings($id)['address1']  ?>",
        "addressLocality" : "<?php echo settings($id)['address1']  ?>",
        "addressRegion" : "<?php echo settings($id)['address1']  ?>"
      },
      "aggregateRating" : {
        "@type" : "AggregateRating",
        "ratingValue" : "4",
        "bestRating" : "5",
        "worstRating" : "3",
        "ratingCount" : "74"
      }
      
    }
    </script>

      </head>
      <body>

        <header role="banner">
            <?php 
      
          include("includes/navbar2.php");

        ?>
                
        </header>
        <!-- END header -->
        


        <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings($id)['main_img']; ?>); " >
          <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
              <div class="col-md-12 text-center">

                <div class="mb-5 element-animate" style="margin-top:50px">
                  <h1>Our Facilities</h1>
                  <p>Discover our world's #1 Luxury Room For VIP.</p>
                </div>
                <div class="row justify-content-center" >
                  <div class="col-md-auto">
                    <nav class=" breadcrumb_white text-center">
                      <ol class="breadcrumb justify-content-center" itemscope itemtype="https://schema.org/BreadcrumbList" >
                        <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="../index.php" itemtype="https://schema.org/Thing"
           itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                          
                        <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.php" itemtype="https://schema.org/Thing"
           itemprop="item">&<span itemprop="name">&nbsp;Facilities &nbsp;<span></a>
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


        <section class="site-section bg-light">
          <div class="container">
            <div class="row mb-0">
              <div class="col-md-12  text-center">
                <h2 class="heading">Facilities And Amenities</h2>
              </div>
            </div>
           
            
            <div class="row ">

              <?php 
                $a= fac($id)[0];//6
              for ($i = 1; $i <=$a; $i++) {
                
               echo  '<div class="col-md-6">'?>
                    <div class="row mt-4" style="padding: 10px">
                     
                    <div>
                      <div  style="position: relative;"><img class="img-fluid" src="images/<?php 


                          for ($j = 1; $j <=$a ; $j++) {
             
                                                echo fac($id)[7][$i][$j];
                                                break;
                                            }          

                      ?>

                        " alt="<?php echo fac($id)[5][$i]  ?>" title="<?php echo fac($id)[1][$i]  ?>">  <div class="text-block"> 
                      <h4><?php echo fac($id)[1][$i]  ?></h4>
                    </div>
                      </div>
                        <p class="text-justify " style="padding: 15px"><?php echo fac($id)[5][$i]  ?></p>
                      </div>

                    </div>
                
              <?php echo  '</div>' ?>
             <?php }  ?>
              
            </div>

              
          </div>
          
        </section>

    <?php include('includes/footer.php'); ?>

      <?php
      
       $data = ob_get_contents();  

      ob_clean();  // clears buffer and closes buffering


      $data1 =str_replace("assets/", "../assets/", $data);

      $data1 =str_replace("images/", "../images/", $data1);


      $data_en =str_replace("../images/", "../../images/", $data1);
      file_put_contents($id."/facilities/index.php", $data1);
      file_put_contents($folder.$id."/facilities/index.php", $data1);


      $data_en =str_replace("../assets/", "../../assets/", $data_en);
      file_put_contents($id."/en/facilities/index.php", $data_en);
      file_put_contents($folder.$id."/en/facilities/index.php", $data_en);

      


      //final
      

      
       // echo $data;
  ?>



     