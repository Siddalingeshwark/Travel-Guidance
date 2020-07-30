<?php
$host = "localhost";
$dbusername = "root";
$password = "Mysql@3q#";
$dbname="place";

// Create connection
$conn = new mysqli($host, $dbusername, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="yes.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d49bdd984d.js" crossorigin="anonymous"></script>



    <title>info</title>
  </head>
  <body>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="project.html"><i class="fas fa-home"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  
</ul>
    <div id="info">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="height:400px; width:100%" src="https://worldoftravel.co/wp-content/uploads/MyTravel_India_56ab7400569e61c81ee96d81.jpeg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>TAJ MAHAL</h3>
              <p>Taj Mahal, Standing majestically on the banks of River Yamuna. Taj Mahal Taj Mahal is famous for Own beauty and one of the wonders of the world. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:400px; width:100%" src="https://www.indiashoppers.in/articles_img/images/best-tourist-places-in-karnataka.png" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>MYSORE PALACE</h3>
              <p>Mysore Palace is a historical palace and a royal residence at Mysore in the Indian State of Karnataka.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:400px; width:100%" src="https://worldoftravel.co/wp-content/uploads/MyTravel_India_56ab7400569e61c81ee96d81.jpeg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:400px; width:100%" src="https://upload.wikimedia.org/wikipedia/commons/8/8d/Ganga_Arti_%40_Banaras_Ghat.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Ganga Aarti</h3>
              <p>Ganga Aarti (ritual of offering prayer to the Ganges river) is held daily at dusk.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:400px; width:100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ9bUoTfTc1YVd7oAJ5IJJHaTtUcjTMfcsqIuq5TNrSbhIw01Rn" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:400px; width:100%" src="https://wallpapercave.com/wp/JwdutMk.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <h1 class="dispay-1 tx">FIND SOME MORE PLACES</h1>
    <hr>

      
     
      <div class="form">
       <form action="yes.php" method="POST">
        <input type="text" name="search" placeholder="search places">
        <input type="submit" name="sub">    
       </form>

     </div>
   

    
   




<?php

 if(isset($_POST['search']))
  {
    $searchq= $_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
      $sql = "SELECT * FROM extract WHERE name like '%$searchq%' ";
        $result = $conn->query($sql);

    
    
  
       while($row = mysqli_fetch_array($result))
       {
              ?>
              <h1 class="display-1 name"><?php echo $row['name'];?></h1>
              <?php
               echo '<img class="img" src="data:img;base64,'.base64_encode($row['img']).'" alt=""image diagram>';
               ?> <h3 class="container text"><?php echo $row['info']; ?> </h3><hr><hr>
           
               <?php 

            
          
         
        }
    
  }


$conn->close();
?>




    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>