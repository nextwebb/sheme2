<?php
ob_start();
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
   "name" : "<?php echo settings(1)['hotel_name'] ?>",
   "priceRange" : "N<?php echo number_format(room(1)[2][3]) ?> - N<?php echo number_format(room(1)[2][1]) ?>",
   "url" : "<?php echo settings(1)['domain'] ?>",
   "hasMap" : "",
   "image" : "images/<?php echo fac(1)[7][3][1] ?>",
   "description" : "",
   "@type" : "Hotel",
   "address" : {
      "streetAddress" : "<?php echo settings(1)['address1']  ?>",
      "postalCode" : "",
      "addressRegion" : "<?php echo settings(1)['address1']  ?>",
      "addressLocality" : "<?php echo settings(1)['address1']  ?>",
      "@type" : "PostalAddress",
      "addressCountry" : "Nigeria",
      "telephone" : "<?php echo settings(1)['hotline']  ?>"
   }
}
</script>    <!-- Global site tag (gtag.js) - Google Analytics -->


  </head>
  <body>

    <header role="banner">
        <?php 
  
      include("includes/navbar.php");

    ?>
            
    </header>
    <!-- END header -->
    


    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo settings(1)['main_img']; ?>); " >
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
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.html" itemtype="https://schema.org/Thing"
       itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                      
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="facilitiesy.html" itemtype="https://schema.org/Thing"
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
            $a= fac(1)[0];//6
          for ($i = 1; $i <=$a; $i++) {
            
           echo  '<div class="col-md-6">'?>
                <div class="row mt-4" style="padding: 10px">
                 
                <div>
                  <div  style="position: relative;"><img class="img-fluid" src="images/<?php 


                      for ($j = 1; $j <=$a ; $j++) {
         
                                            echo fac(1)[7][$i][$j];
                                            break;
                                        }          

                  ?>

                    " alt="<?php echo fac(1)[5][$i]  ?>" title="<?php echo fac(1)[1][$i]  ?>">  <div class="text-block"> 
                  <h4><?php echo fac(1)[1][$i]  ?></h4>
                </div>
                  </div>
                    <p class="text-justify " style="padding: 15px"><?php echo fac(1)[5][$i]  ?></p>
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

  @mkdir(1);

  @mkdir("1/facilities");
  $data1 =str_replace("assets/", "../assets/", $data);

  $data1 =str_replace("images/", "../images/", $data1);

  $data1 =str_replace("opt/lampp/htdocs/", "", $data1);
  

  file_put_contents("1/facilities/index.php", $data1);

   echo $data;
  ?>



     