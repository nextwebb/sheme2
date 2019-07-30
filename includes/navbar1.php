
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
              <a class="navbar-brand" href="../index.php">
              <img src="images/<?php echo settings($id)['logo'] ?>" width="200" height="120" class="d-inline-block align-top" alt="<?php echo settings($id)['hotel_name']  ?>" title="<?php echo settings($id)['hotel_name'] ?>">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item " style=""> 
                <a class="nav-link active" href="index.php" style="color:#f4e181;<?php if($main=1)   { echo 'color: #fff; font-weight: bold'; } ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="hotel-rooms/index.php" id="rooms-categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="hotel-rooms" style="color:#f4e181">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="rooms-categories">
                  <a class="dropdown-item" href="hotel-rooms/index.php" style="color:#f4e181;">All Rooms</a>
                  <?php 
                          $n = room(1)[0];//3
                        for ($d = 1; $d <=$n ; $d++) {
                              echo ' <a class="dropdown-item" href="hotel-rooms/'?><?php echo strtolower(str_replace(" ","-", room($id)[1][$d])).".php" ?>" style="color:#f4e181;"> <?php echo room($id)[1][$d]?>
                              <?php echo '</a>' ?>
                        <?php } ?>
                                    
                </div>
              </li>
              <li class="nav-item">

                <a class="nav-link " href="facilities/index.php" style="color:#f4e181" >Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="gallery/index.php" style="color:#f4e181;">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact-us/index.php" style="color:#f4e181;">Contact</a>
              </li>
               
            </ul>
            
          </div>
        </div>
      </nav>
   
    