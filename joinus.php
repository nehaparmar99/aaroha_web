<!DOCTYPE html>
<html>
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
  <style>
    
     
      .container {
          width:60%;
          padding:20px;
          margin-left:20%;
          margin-right:20%;
          background:  #26a7dd;
          margin-top: 3%;
          margin-bottom: 3%;
          
      }
      .container h2{
          width:100%;
          color:white;
          font-size: 36px;
          text-align:center;
          margin-bottom: 10px;
      }
    .container .row100
    {
        position:relative;
        width:100%;
        display:grid;
        grid-template-columns: repeat(autofit,minmax(300px,1fr));

    }
    .container .row100 .col
    {
        position: relative;
        width:100%;
        padding:0 10px;
        margin: 30px 0 10px;
        transition: 0.5s;
    }
    .container .row100 .inputbox
    {
      position: relative;
      width:100%;
      height:40px;
      color:white;
    }
    .rad{
        color:white;
    }
    .container .row100 .inputbox input
    {
        position: absolute;
        width:100%;
        height:100%;
        background: transparent;
        box-shadow: none;
        border: none;
        outline: none;
        font-size: 18px;
        padding: 0 10px;
        z-index: 1;
        color:#000;
    }
    .container .row100 .inputbox .text 
    {
        position:absolute;
        top:0;
        left:0;
        line-height: 40px;
        font-size: 18px;
        padding: 0 10px;
        display: block;
        transition: 0.5s;
        pointer-events: none;
        }
    .container .row100 .inputbox input:focus + .text,
    .container .row100 .inputbox input:valid + .text
    
    {
        top:-35px;
        left:-10px;
    } 

    .container .row100 .inputbox .line
    {
        position: absolute;
        bottom: 0;
        display:block;
        width:100%;
        height:2px;
        background: white;
        transition:0.5s;
        border-radius:2px;
        pointer-events: none;
    }
    .container .row100 .inputbox input:focus ~ .line ,
    .container .row100 .inputbox input:valid ~ .line
    {
      height:100%;
    }
    input[type="submit"]
    {
        border:none;
        padding: 7px 35px;
        cursor: pointer;
        outline: none;
        background: white;
        color:#000;
        font-size: 18px;
        border-radius: 2px;
    }

  footer {
margin: 0;
overflow: hidden;
padding: 0;
bottom: 0;
}
.footer-distributed {
background-color: #033670;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
width: 100%;
text-align: left;
font: bold 16px sans-serif;
height:300px;
padding: 55px 50px;
margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
display: inline-block;
vertical-align: top;
}

.footer-distributed .footer-left {
width: 40%;
}

.footer-distributed h3 {
color: #ffffff;
font: normal 36px "Cookie", cursive;
margin: 0;
}

.footer-distributed h3 span {
color: #5383d3;
}

.footer-distributed .footer-links {
color: #ffffff;
margin: 20px 0 12px;
padding: 0;
}

.footer-distributed .footer-links a {
display: inline-block;
line-height: 1.8;
text-decoration: none;
color: inherit;
}

.footer-distributed .footer-company-name {
color: #8f9296;
font-size: 14px;
font-weight: normal;
margin: 0;
}

.footer-distributed .footer-center {
width: 35%;
}

.footer-distributed .footer-center i {
background-color: #33383b;
color: whitesmoke;
font-size: 25px;
width: 38px;
height: 38px;
border-radius: 50%;
text-align: center;
line-height: 42px;
margin: 10px 15px;
vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
font-size: 17px;
line-height: 38px;
}

.footer-distributed .footer-center p {
display: inline-block;
color: whitesmoke;
vertical-align: middle;
margin: 0;
}

.footer-distributed .footer-center p span {
display: block;
font-weight: normal;
font-size: 14px;
line-height: 2;
}

.footer-distributed .footer-center p a {
color: #5383d3;
text-decoration: none;
}

.footer-distributed .footer-right {
width: 20%;
}

.footer-distributed .footer-company-about {
line-height: 20px;
color: #d1d1d8;
font-size: 13px;
font-weight: normal;
margin: 0;
}

.footer-distributed .footer-company-about span {
display: block;
color: whitesmoke;
font-size: 14px;
font-weight: bold;
margin-bottom: 20px;
}

.footer-distributed .footer-icons {
margin-top: 25px;
}

.footer-distributed .footer-icons a {
width: 35px;
height: 35px;
cursor: pointer;

font-size: 20px;
text-align: center;
line-height: 35px;

margin-right: 3px;
margin-bottom: 5px;
}

@media (max-width: 880px) {
.footer-distributed {
font: bold 14px sans-serif;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
display: block;
width: 100%;
margin-bottom: 40px;
text-align: center;
}

.footer-distributed .footer-center i {
margin-left: 0;
}
.main {
line-height: normal;
font-size: auto;
}
}
#joinform {
    background-color: white;
    padding-bottom: 50px;
    padding-top:50px;
}
#role1 {
  margin:10%;
}
#role2 {
  padding:10%;
  color:white;
  background-color: #033670;
}
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
<h1 style="text-align:center;padding-top:100px;"><u>JOIN US</u></h1>

    <div id="role1" > 
        <div class="row">
            <div class="col-md-6" >
                <h3>What role you’ll be playing as a volunteer ?</h3>
                <br>
                <p> Being a volunteer at Muskaan Dreams you choose to be part of the program team where you become a part of operations and planning. You can also choose fundraising vertical which ensure children get accessibility to Digital Classrooms through raising funds from corporates and community.Being a volunteer at Muskaan Dreams you choose to be part of the program team where you become a part of operations and planning. You can also choose fundraising vertical which ensure children get accessibility to Digital Classrooms through raising funds from corporates and community.</p>
            </div>
            <div class="col-md-6" style="padding-left:80px;" >
                <img style="width:400px;height:300px;" src="Picture6.jpg">
            </div> 
       </div>   
    </div>
    <div id="role2" > 
        <div class="row">
           
            <div class="col-md-6" style="padding-left:30px;" >
                <img style="width:400px;height:300px;" src="pic.jpg">
            </div> 
            <div class="col-md-6" >
                <h3>What role you’ll be playing as a donor ?</h3>
                <br>
                <p>Being a volunteer at Muskaan Dreams you choose to be part of the program team where you become a part of operations and planning. You can also choose fundraising vertical which ensure children get accessibility to Digital Classrooms through raising funds from corporates and community. Being a volunteer at Muskaan Dreams you choose to be part of the program team where you become a part of operations and planning. You can also choose fundraising vertical which ensure children get accessibility to Digital Classrooms through raising funds from corporates and community.</p>
            </div>
       </div>   
    </div>

  <div id="joinform">
    <div class="container" class="shadow-lg  p-3 mb-5  rounded">
         <h2>Join US</h2>
        <form action="joinform.php" method="POST">
         <div class="row100">
             <div class="col">
                 <div class="inputbox">
                    <input type="text" name="name" required="required">
                     <span class="text">Name</span>
                     <span class="line"></span>
                 </div>
             </div>
        </div>
         
        <div class="row100">
            <div class="col">
                <div class="inputbox">
                    <input type="text" name="email" required="required">
                    <span class="text">Email Id</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="inputbox">
                    <input type="text" name="phone" required="required">
                    <span class="text">Phone No</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

       <div class="row100">
            <div class="col">
                <span class="rad">
                    <span class="text">Gender</span>
                    <br>
                    <input type="radio" name="gender" value="Male" required="required"> Male
                    <input type="radio" name="gender" value="Female" required="required"> Female
                    <input type="radio" name="gender" value="Other" required="required"> Other 
                    
                    
                </span>
                </div>
            </div>
        

        <div class="row100">
            <div class="col">
                <div class="inputbox">
                    <input type="text" name="city" required="required">
                    <span class="text">City</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <span class="rad">
                <span class="text"> Join Us</span>
                <br>
                   <input type="radio" name="join" value="Volunteer" required="required" > As Volunteer
                    <input type="radio" name="join" value="Donor" required="required"> As Donor
                </span>  
                    
                
            </div>
        </div>

        <div class="row100">
            <div class="col">
                <div class="rad">
                <span class="text">Do you want updates on WhatsApp?</span><br>
                    <input type="radio" name="update" value="Yes" required="required" >Yes
                   <input type="radio" name="update" value="No" required="required"> No
                </div>  
                    
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <input type="submit">
                </div>
            </div>
        </form>
        </div>
    </div>
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
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>