<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="aaroha";

// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql ="SELECT * FROM management_team ";

$management =  mysqli_query($con,$sql);

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <link
    rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  />
  <link
    href="http://fonts.googleapis.com/css?family=Cookie"
    rel="stylesheet"
    type="text/css"
  />
  <link rel="stylesheet" href="team.css">
<style>
   .bg-dark{
      transition: 200ms ease;
      background: transparent !important;
    }
    .team-section{
   overflow: hidden;
   text-align: center;
   background:#043c7c ;
   padding:100px;
 }
 #me{
      color:black;
      font-weight: bold;
      font-size: 20px;
    }
    </style>
<script>
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop() > 400);
  });
    </script>

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
<img src="logo.png" width="50%" height="50%" alt="">
</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="nav-link"  id="me">Home</a></li>
        
          
          <font color="red"><li class="nav-item"><a href="#" class="nav-link" id="me">About</a></li></font>

        <li class="nav-item"><a href="event.php" class="nav-link" id="me">Events</a></li>
            <li class="nav-item"><a href="project.html" class="nav-link" id="me">Project</a></li>
            <li class="nav-item dropdown" >
              <a id="me" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Chapters
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" id="me" href="nitb.html">NIT-B</a>
                <a class="dropdown-item" id="me" href="#eve">IHM-B</a>
              </div>
            </li>
            <li class="nav-item"><a href="gallery.php" class="nav-link" id="me">Gallery</a></li>
            <li class="nav-item"><a href="team.php" class="nav-link" id="me">Team</a></li>
            <li class="nav-item"><a href="joinus.php" class="nav-link" id="me">Join</a></li>
            <li class="nav-item"><a href="#" class="nav-link" id="me">Contact </a></li>
            <li class="nav-item">
                <button type="button" class="btn btn-primary btn-rounded">
                    DONATE
                </button>
            </li>
        </ul>
      </div>
    </nav>
 <div class="team-section">
  <span class="border"></span>
   <h1>Our Founder</h1>
   <span class="border"></span>
   <div class="ps">
     
     <a href="#p2"><img src="team/shreesir.jpg"></a>
     
   </div>
<!--
   <div class="section" id="p1">
     <span class="name">Aditi Khandelwal</span>
     <span class="border"></span>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
   </div>
   -->
   <div class="section" id="p2">
    <span class="name">Shreenivas </span>
    <span class="border"></span>
 <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.r the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>
  </div>
  <!--
  <div class="section" id="p3">
    <span class="name">Prakriti Shrivastava</span>
    <span class="border"></span>
    <p>ver since the 1500s, when an unknown t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.y unchanged.</p>
  </div>
-->

 </div>









  <div  id="manage" class="shadow-lg bg-white p-3 mb-5  rounded">
    <br>
    <h1>Management Team</h1>
    <br>
    <br>
    <div id ="manage1" class="card-deck">
    <?php while($manage = mysqli_fetch_assoc($management)) : ?>    
      <div class="card">
        <img  src="<?php echo $manage['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
         <a style="color: black;" href="<?php echo $manage['facebook_link'] ?>"> <h5 class="card-title"><?php echo $manage['name'] ?></h5></a>
          <h6><?php echo $manage['designation'] ?></h6>
        </div>
      </div>
      <?php endwhile; ?> 
      
    </div>
</div>

 <!--
    <div id="founder" class="shadow-lg p-3 mb-5  rounded">
        <h1>Founders</h1>
        <div class="card-deck">
            <div style="margin-left: 300px;margin-right: 50px;" class="card" style="width: 18rem;">
                <img  src=".." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
              </div>
              </div>

              <div style="margin-right: 300px;" class="card" style="width: 18rem;">
                <img  src=".." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                  
                </div>
              </div>
      
       </div> 
    </div>

-->
<!--
    <div id="core" class="shadow-lg p-5 mb-6 ">
      <br>
      <br>
      <h1>Alumini</h1>
      <br>
      <br>
      <div id="try2" class="container" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="shreesir.jpg" style="float: left; margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="shrutika.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="teamm.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="abhishek.jpeg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
            </div>
            <div class="carousel-item">
              <img src="shreesir.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="shrutika.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="teamm2.jpeg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="abhishek.jpeg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
            </div>
            <div class="carousel-item">
              <img src="shreesir.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="ashish.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="shrutika.jpg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
              <img src="teamm2.jpeg" style="float: left;margin-right: 1%;margin-left: 1%;" class="d-block w-23" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
        
    </div>
    -->

    
<!--
    <div id="alumini" class="shadow-lg bg-white p-5 mb-5  rounded">
      <br>
        <h1>Core Team</h1>
        <br>
        <br>
        <div id="try3" class="row row-cols-1 row-cols-md-5">
            <div class="col mb-4">
            <div class="card">
              <img src="shreesir.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                
              </div>
            </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                  <img src="shreesir.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    
                  </div>
                </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                      <img src="shreesir.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        
                      </div>
                    </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                          <img src="shreesir.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            
                          </div>
                        </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                              <img src="shreesir.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                
                              </div>
                            </div>
                            </div>  
                            <div class="col mb-4">
                                <div class="card">
                                  <img src="aa.jpg" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    
                                  </div>
                                </div>
                                </div> 
                                <div class="col mb-4">
                                    <div class="card">
                                      <img src="aa.jpg" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        
                                      </div>
                                    </div>
                                    </div> 
                                    <div class="col mb-4">
                                        <div class="card">
                                          <img src="aa.jpg" class="card-img-top" alt="...">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            
                                          </div>
                                        </div>
                                        </div> 
                                        <div class="col mb-4">
                                            <div class="card">
                                              <img src="aa.jpg" class="card-img-top" alt="...">
                                              <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                
                                              </div>
                                            </div>
                                            </div> 
                                            <div class="col mb-4">
                                                <div class="card">
                                                  <img src="aa.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    
                                                  </div>
                                                </div>
                                                </div> 
                                               
       </div>         
    </div>

    <div id="heads" class="shadow-lg p-5 mb-5  ">
      <br>
      <br>
      <h1>Heads</h1>
      <br>
      <br>
        <div id ="try1" class="card-deck">
          
            <div class="card">
              <img src="shreesir.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                
              </div>
            </div>
            <div class="card">
              <img src="shreesir.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                
              </div>
            </div>
            <div class="card">
              <img src="shreesir.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                
              </div>
            </div>
            <div class="card">
                <img src="shreesir.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
              <div class="card">
                <img src="shreesir.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
          </div>
    </div>
-->
<footer class="footer-distributed">
  <div class="footer-left">
    <h3>Aa<span>ro</span>ha</h3>

    <p class="footer-links">
      <a href="#">Home</a>
      ·
      <a href="#">About Us</a>
      ·
      <a href="#">Blog</a>
      ·
      <a href="#">Events</a>
      ·
      <a href="#">Projects</a>
      ·
      <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">&copy; 2020</p>
  </div>

  <div class="footer-center">
    <!-- <div>
      <i class="fa fa-map-marker"></i>
      <p>
        <span>Anna Nagar slums,Rachna Nagar,Bhopal</span> Madhya Pradesh,
        India
      </p>
    </div> -->

    <div>
      <i class="fa fa-phone"></i>
      <p>+91 75663 09722</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p>
        <a href="#" style="color: #2C8AF6;">aaroha.youthorg@gmail.com</a>
      </p>
    </div>
  </div>

  <div class="footer-right">
    <p class="footer-company-about">
      <span>About Us</span>
      Aaroha is a youth organization which works for the upliftment of the
      underprivileged children.
    </p>

    <div class="footer-icons">
      <a href="https://www.facebook.com/aaroha.youthorg/">
        <img src="https://img.icons8.com/nolan/40/facebook-new.png"
      /></a>
      <a href="#"
        ><img src="https://img.icons8.com/nolan/40/twitter.png"
      /></a>
      <a href="https://www.facebook.com/aaroha.youthorg/"
        ><img src="https://img.icons8.com/nolan/40/instagram-new.png"
      /></a>
    </div>
  </div>
</footer>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>