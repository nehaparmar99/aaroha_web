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



$sql ="SELECT * FROM event ";

$event =  mysqli_query($con,$sql);

?>

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="footer, address, phone, icons" />
  <link rel="stylesheet" href="event.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
      <title>Hello, world!</title>
  
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
      
      <style>
    .navbar{
  width: 100%;
}
.nav-item{
  padding-left: 5px;
  padding-right: 5px;
  color: #262626;
}
.dropdown-item{
background-color: white !important;
text-align: center;
  color: black;
}
.collapse {
  
text-align: center;
  padding: 3px;
  margin-right: 15px;
}
.bg-dark{
  transition: 200ms ease;
  background: transparent !important;
}
.bg-dark.scrolled{
  background:white !important;
}
#me{
  color:black;
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
      <h1>Our Events</h1>
      <span class="border"></span>
    </div>
      
    <div class="container mb-100" id="event" >
      <div class="row" >
      <?php while($ev = mysqli_fetch_assoc($event)) : ?> 
       <?php if($ev['Id']%2!=0){ ?>
          <div class="col-12 mb-30">
              <div >
                  <div class="row" >
                      <div class="col-lg-4 col-sm-12" >
                          <img style="padding-top:50px ;" data-anijs="if: scroll,on: window, do: fadeInLeft animated, before: scrollReveal"  src="<?php echo $ev['Image'] ?>"
                              alt="Card image">
                      </div>
                      <div data-anijs="if: scroll,on: window, do: fadeInRight animated, before: scrollReveal" class="col-lg-8 col-sm-12 py-3 px-5">
                          <h3 class="text-black"><strong><?php echo $ev['Event_Name'] ?></strong></h3>
                          <p class="lead text-black"><?php echo $ev['Description'] ?>
                            </p>
                          
                      </div>
                  </div>
              </div>
          </div>
       <?php }else { ?>
      
          <div class="col-12 mb-30">
              <div>
                  <div class="row">
                      <div data-anijs="if: scroll,on: window, do: fadeInLeft animated, before: scrollReveal" class="col-lg-8 col-sm-12 py-3 px-5">
                          <h3 class="text-black"><strong><?php echo $ev['Event_Name'] ?></strong></h3>
                          <p class="lead text-black"><?php echo $ev['Description'] ?></p>
                         
                      </div>
                      <div class="col-lg-4 col-sm-12">
                          <img style="padding-top:50px ;" data-anijs="if: scroll,on: window, do: fadeInRight animated, before: scrollReveal"  src="<?php echo $ev['Image'] ?>"
                              alt="Card image">
                      </div>
                  </div>
              </div>
          </div>
       <?php } ?>
       <?php endwhile; ?>   
      </div>
  </div>
   
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


<script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
  
<!-- Include to use $addClass, $toggleClass or $removeClass -->
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>


<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>     

  </body>
  </html>
  