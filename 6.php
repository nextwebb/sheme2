
<?php
  ob_start();

  $main=6;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>The <?php echo settings($id)['hotel_name'] ?> | Finding us is easy, just click here</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find us easily. Call <?php echo settings($id)['hotline'] ?> for directions. Please always book ahead, 
    so we can secure your room. Early cancellation is FREE! Its now easier to book a hotel in Central Business District - <?php echo settings($id)['city'] ?>" />

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="canonical" href="<?php echo 'https://'.settings($id)['domain']?>/en/contact-us/index.php" />


    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="assets/css/404.css"/>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "<?php echo settings($id)['hotel_name'] ?>",
  "image" : "images/<?php echo settings($id)['logo'] ?>",
  "telephone" : "<?php echo settings($id)['hotline']  ?>",
  "email" : "<?php echo settings($id)['frontoffice_mail']?>",
  "priceRange" : "<?php echo '₦'. number_format(room($id)[2][3]) ?> -<?php echo "₦".number_format(room($id)[2][1]) ?>",
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
  

  <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "<?php echo settings($id)['domain'] ?>",
  "logo": "images/<?php echo settings($id)['logo'] ?>",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "<?php echo settings($id)['hotline']  ?>",
    "contactType": "customer service"
  }]


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
       "priceRange" : "N<?php echo number_format(room($id)[2][3]) ?> - N<?php echo number_format(room($id)[2][1]) ?>",
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
  

  </head>
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
              <h1>Contact Us</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>
            <div class="row justify-content-center" >
              <div class="col-md-auto">
                <nav class=" breadcrumb_white text-center">
                  <ol class="breadcrumb justify-content-center"  itemscope itemtype="https://schema.org/BreadcrumbList" >
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="../index.php" itemtype="https://schema.org/Thing"
       itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                
                    <li class="breadcrumb_for_list_Items" lass="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.php" itemtype="https://schema.org/Thing"
       itemprop="item">&<span itemprop="name">&nbsp;Contact Us&nbsp;</span></a>
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

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 d-flex justify-content-start ">

            <div class="mb-3 element-animate">
              <h2 style="margin-bottom: 5px; border-bottom: 2px solid #c9ac87">Contact</h2>
            </div>

          </div>
                    <div class="widget widget-address " style=" padding: 5px;color: #8F6B41 ">
                                
                                <div class="address">
                                    <p> <i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>&nbsp; <?php echo settings($id)['address1']  ?></p>
                                </div>
                                 <div>
                                    <p><i class="fa fa-book" aria-hidden="true"></i> <a href="mailto:booking@statementhotel.com">&nbsp; <?php echo settings($id)['frontoffice_mail']  ?></a></p>
                                </div>
                                <div>
                                    <p>Reservations:<br /><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+234.0706-815-1023">&nbsp; <?php echo settings($id)['hotline']  ?></a></p>
                                </div>

            </div>
              </div>
              <div class="col-md-12  justify-content-right">
                <div class="col-md-12 d-flex justify-content-start ">

            <div class="mb-3 element-animate">
              <h2 style="margin-bottom: 5px; border-bottom: 2px solid #c9ac87">Directions</h2>
            </div>

          </div>
                <div class="mapouter" ><div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=statement%20hotel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.maps-erstellen.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>

              </div>
        </div>
      </div>
    </section>
    <!-- END section -->


   <?php include('includes/footer.php'); ?>

  <?php
  
   $data = ob_get_contents();  

  ob_clean();  // clears buffer and closes buffering


  $data1 =str_replace("assets/", "../assets/", $data);

  $data1 =str_replace("images/", "../images/", $data1);

  $data_en =str_replace("../images/", "../../images/", $data1);

  $data_en =str_replace("../assets/", "../../assets/", $data_en);


  file_put_contents($id."/en/contact-us/index.php", $data_en);  

  file_put_contents("$id/contact-us/index.php", $data1);

 // echo $data;
  ?>
   
