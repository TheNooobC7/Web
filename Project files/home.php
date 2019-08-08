<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> <!--unicode -->
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- fit the screen -->
	<title>Serene Island</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="css/fixed.css">

</head>

 <body>
 


  <div class="cont">
    <?php if(isset($_SESSION['success'])): ?>
      <div><h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success'])  ?>
      </h3>
    </div>
      <?php endif ?>

      <?php if(isset($_SESSION['username'])): ?>
        <p>Welcome<?php echo $_SESSION['username']; ?></p>
      <?php endif ?>
      </div>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><h2>Serene Island</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinations</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="Destinations.html#1">Anuradhapura</a>
              <a class="dropdown-item" href="Destinations.html#2">Kandy</a>
              <a class="dropdown-item" href="Destinations.html#3">Adams Peak</a>
              <a class="dropdown-item" href="Destinations.html#4">Ella</a>
              <a class="dropdown-item" href="Destinations.html#5">Kitulgala</a>
              <a class="dropdown-item" href="Destinations.html#6">Haputale</a>
              <a class="dropdown-item" href="Destinations.html#7">Hikkaduwa Beach</a>
              <a class="dropdown-item" href="Destinations.html#8">Bentota Beach</a>
              <a class="dropdown-item" href="Destinations.html#9">Trincomalee Beach</a>
              <a class="dropdown-item" href="Destinations.html#10">Mirissa Beach</a>
              <a class="dropdown-item" href="Destinations.html#11">Kumana National Park</a>
              <a class="dropdown-item" href="Destinations.html#12">Udawalawe National Park</a>
              <a class="dropdown-item" href="Destinations.html#13">Yala</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#">TravelMap</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#about">AboutUs</a>
          </li>

        </ul>
        
 <a href="index.php?logout ='1'"><button class="btn-danger">logout</button></a>
      </div>
    </nav>






<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/wel2.jpg')">
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/A2.jpg') "><a href="Destinations.html"></a>
        <div class="carousel-caption d-none d-md-block">
          <a href="Destinations.html" style="text-decoration:none;"><h2 class="display-4" style="color:white" >Ancient</h2>
          <p class="lead" style="color:white">The Ancient History Of SriLanka.</p></a>
        </div>
      </div>
      </a>
      
       
      <div class="carousel-item" style="background-image: url('img/n1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <a href="Destinations.html#gg2" style="text-decoration:none;"><h2 class="display-4" style="color:white">Nature</h2></a>
          <p class="lead" style="color:white">The Mother-Nature</p>
        </div>
      </div>
    

     
      <div class="carousel-item" style="background-image: url('img/b2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <a href="Destinations.html#gg3" style="text-decoration:none;"><h2 class="display-4" style="color:white">Beach</h2>
          <p class="lead" style="color:white">Leisure Vacations.</p></a>
        </div>
      </div>
    

     
      <div class="carousel-item" style="background-image: url('img/W3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <a href="Destinations.html#gg4" style="text-decoration:none;"><h2 class="display-4" style="color:white">Wild-Life</h2>
          <p class="lead" style="color:white">Rare Creatures.</p></a>
        </div>
      </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<div class="container">
  
<p><br><br><br><br><br></p>
  <div class="jumbotron text-center">
  <div class="col-12">
  <div class="block">
      <div class="row">
        <div class="span4">
          <img class="img-left" src="img/wel1.png"/>
          <div class="content-heading"><h3>Experience &nbsp </h3></div>
          <p>Sri Lanka has a huge amount to offer visitors in search of unique encounters, ranging from breathtakingly scenic routes, ancient sites with rich history, stunning wildlife, spectacular festivals and a huge variety of outdoor activities. At the end of a hectic day touring the country, you can savor the deliciously spicy cuisine, relax with rejuvenating Ayurveda spa, or simply soak up a scintillating sunset.

          </p>
          <p>The most unforgettable and scenic way to travel around Sri Lanka is no doubt by railway. The train trip through the hill country is one of the most beautiful in the world . The rail network was originally built by the British to transport tea, and opens a window to the cultural, historic and scenic sides of Sri Lanka. Passing deep green tea plantations, remote villages and mountain paths, the train journey from Kandy up into the highest corners of the hills often stands out as an experience to treasure forever..</p>
        </div>
     </div>
     <br/>
      <div class="row">
        <div class="span4">
          <img class="img-right" src="img/map1.jpg"/>
          <div class="content-heading"><h3>Location </h3></div>
          <p>Sri Lanka, formerly Ceylon, island country lying in the Indian Ocean and separated from peninsular India by the Palk Strait. It is located between latitudes 5°55′ and 9°51′ N and longitudes 79°41′ and 81°53′ E and has a maximum length of 268 miles (432 km) and a maximum width of 139 miles (224 km)..</p>
          <p>The island's strategic location in the Indian Ocean, intersecting with the major air and sea routes between Europe and the Far East, gives it an strategic advantage as a global logistics hub..</p>
        </div>
     </div>
    </div>
    
</div>
</div>
</div>


<footer id=about>
  <div class="jumbotron text-center">
  <div class="col-12">
  <div class="container">
<h3>About Us</h3>
    <hr />
        <div class="text-center center-block">

          <p>We are two NSBM green university Plymouth Software Engineering students who are in the 18.2 batch ..</p>  <p>Tel no-<br>Ishan Bandara -0762429404 <br>Mahela Chandrasoma </p>
            
            <br />
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
              <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
              <a href="https://plus.google.com"><i class="fab fa-google-plus-g"></i></a>
              <a href="gmail.com"><i class="fas fa-envelope-open-text"></i></a>
</div>
    <hr />
</div>
</div>
</div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script><!-- required to run bootstrap -->
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script><!-- required to run bootstrap -->
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
</html>




