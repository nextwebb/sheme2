
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
              <a class="navbar-brand" href="index.html">
              <img src="images/<?php echo settings(1)['logo'] ?>" width="200" height="120" class="d-inline-block align-top" alt="<?php echo settings(1)['hotel_name']  ?>" title="<?php echo settings(1)['hotel_name'] ?>">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/'?>index.php" style="color:#f4e181">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="hotel-rooms/index.php" id="rooms-categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="hotel-rooms" style="color:#f4e181">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="rooms-categories">
                  <a class="dropdown-item" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/hotel-rooms/'?>index.php" style="color:#f4e181;">All Rooms</a>
                  <a class="dropdown-item" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/hotel-rooms/'.urlencode(strtolower(str_replace(" ","-", room(1)[1][1]))) ?>/index.php" style="color:#f4e181;">Presidential Suite</a>
                  <a class="dropdown-item" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/hotel-rooms/'. urlencode(strtolower(str_replace(" ","-", room(1)[1][2]))) ?>/index.php" style="color:#f4e181;">Business Suite</a>
                  <a class="dropdown-item" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/hotel-rooms/'. urlencode(strtolower(str_replace(" ","-", room(1)[1][3]))) ?>/index.php" style="color:#f4e181;">Classic Room</a>
                  
                </div>
              </li>
              <li class="nav-item">

                <a class="nav-link " href="<?php echo'http://' . $_SERVER['HTTP_HOST'].getcwd();?>/1/facilities/index.php" style="color:#f4e181" >Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/'?>gallery/index.php" style="color:#f4e181;">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo 'http://' . $_SERVER['HTTP_HOST'].getcwd().'/1/'?> contact-us/index.php" style="color:#f4e181;">Contact</a>
              </li>
               
            </ul>
            
          </div>
        </div>
      </nav>
   
    