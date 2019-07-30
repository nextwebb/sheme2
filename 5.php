<?php 
    ob_start();
    $main=5;
    
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo 'The '. settings($id)['hotel_name'] .' Gallery'. ' | Luxury hotels in '.settings($id)['city'] .' | Book today and cancel free.'?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="All pictures on this page are live pictures with NO editing. Our luxury environment is the best in <?php echo settings($id)['city'] ?>. Remember to book 
    ahead. Call <?php echo settings($id)['hotline'] ?>. We've got a special promo for you if you stay long." />


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="canonical" href="<?php echo 'https://'.settings($id)['domain']?>/en/gallery/index.php" />


    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="assets/css/404.css"/>

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
              <h1>Our Picture Story</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>
            <div class="row justify-content-center" >
              <div class="col-md-auto">
                <nav class=" breadcrumb_white text-center">
                  <ol class="breadcrumb justify-content-center"  itemscope itemtype="https://schema.org/BreadcrumbList"  >
                    <li class="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="../index.php" itemtype="https://schema.org/Thing"
       itemprop="item"><span itemprop="name">&nbsp;Home &nbsp;</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                
                    <li class="breadcrumb_for_list_Items" lass="breadcrumb_for_list_Items" itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a class='breadcrumb_icon' href="index.php" itemtype="https://schema.org/Thing"
       itemprop="item">&<span itemprop="name">&nbsp;Gallery &nbsp;</span></a>
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
            <div class="col-md-6 mt-4 ">
                  
                    <img class="img-fluid imageresource" src="images/<?php echo gallery($id)[3][1] ?>" alt="<?php echo gallery($id)[2][1] ?>" title="<?php echo gallery($id)[1][1] ?>">
                  
            </div>
            <div class="col-md-6">
              <div class="row">

                 <?php 

                    $a=gallery($id)[0];//10

                    for ($i = 2; $i <=5 ; $i++) {
                      echo '<div class="col-md-6 mt-4 " >'?>
                          
                    <img class="img-fluid imageresource"  alt="<?php echo gallery($id)[2][$i] ?>" title="<?php echo gallery($id)[1][$i] ?>" src="images/<?php echo gallery($id)[3][$i] ?>">

                       <?php echo '</div>' ?>

                    <?php } ?>
                    
                     
                  
                  </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            
            <div class="col-md-6">
              <div class="row">

                 <?php 

                    $a=gallery($id)[0];//10

                    for ($i = 6; $i <=9 ; $i++) {
                      echo '<div class="col-md-6 mt-4 " >'?>
                          
                    <img class="img-fluid imageresource"  alt="<?php echo gallery($id)[2][$i] ?>" title="<?php echo gallery($id)[1][$i] ?>" src="images/<?php echo gallery($id)[3][$i] ?>">

                       <?php echo '</div>' ?>

                    <?php } ?>
                    
                     
                  
                  </div>
            </div>
            <div class="col-md-6 mt-4 ">
                  
                    <img class="img-fluid imageresource" src="images/<?php echo gallery($id)[3][10] ?>" alt="<?php echo gallery($id)[2][10] ?>" title="<?php echo gallery($id)[1][10] ?>">
                  
            </div>
          </div>
        </div>
              

        <div class="container">
          <div class="row">
            <div class="col-md-6 mt-4 ">
                  
                    <img class="img-fluid imageresource" src="images/<?php echo gallery($id)[3][2] ?>" alt="<?php echo gallery($id)[2][2] ?>" title="<?php echo gallery($id)[1][2] ?>">
                  
            </div>
            <div class="col-md-6">
              <div class="row" style="padding: 0,0,0,0">

                 <?php 

                    $a=gallery($id)[0];//10

                    for ($i = 3; $i <=6 ; $i++) {
                      echo '<div class="col-md-6 mt-4 " >'?>
                          
                    <img class="img-fluid imageresource"  alt="<?php echo gallery($id)[2][$i] ?>" title="<?php echo gallery($id)[1][$i] ?>" src="images/<?php echo gallery($id)[3][$i] ?>">

                       <?php echo '</div>' ?>

                    <?php } ?>
                    
                     
                  
                  </div>
            </div>
          </div>
        </div>
              
            
    
      </section>

              <!-- The Modal -->
          

<div class="modal fade imagemodal" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        
      
        <div style="position: relative;">
          <img src="" class="imagepreview" style="width:; height: 264px;" >
          <div style="position: absolute; top: 0;right: 0;width: 100%;padding: 20px;"  >
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 40px; color: #fff">&times;</span><span class="sr-only">Close</span></button>
          </div>
        </div>
      
      
    </div>
  </div>
</div>




 
<script type="text/javascript">
  $(".imageresource").on("click", function() {
    var newSrc = this.src;
   $('.imagepreview').attr('src', newSrc); // here asign the image to the modal when the user click the enlarge link
   $('.imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>

<?php include('includes/footer.php'); ?>

  <?php
  
   $data = ob_get_contents();  

  ob_clean();  // clears buffer and closes buffering


  $data1 =str_replace("assets/", "../assets/", $data);

  $data1 =str_replace("images/", "../images/", $data1);


  $data_en =str_replace("../images/", "../../images/", $data1);

  $data_en =str_replace("../assets/", "../../assets/", $data_en);


  file_put_contents($id."/en/gallery/index.php", $data_en);


  file_put_contents($id."/gallery/index.php", $data1);

    //echo $data;
  ?>