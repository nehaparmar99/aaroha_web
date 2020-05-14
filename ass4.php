
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration</title>

    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <style>

      * {
          margin:0;
          padding:0;
          box-sizing:border-box;
          font-family: 'Poppins', sans-serif;
      }
      body{
          display:flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;

      }
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




      </style>
</head>
<body>





     <div class="container" class="shadow-lg  p-3 mb-5  rounded">
         <h2>Registration portal</h2>
					<form action="register.php" method="POST" >
                       <div class="row100">
             <div class="col">
                 <div class="inputbox">
                    <input type="text" name="number" required="required">
                     <span class="text">Scholar number</span>
                     <span class="line"></span>
                 </div>
             </div>
        </div>
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
                <span class="rad">
                    <span class="text">Department</span>
                    <br>
                    <input type="radio" name="dept" value="cse" required="required">CSE
                    <input type="radio" name="dept" value="ece" required="required"> ECE
                    <input type="radio" name="dept" value="mech" required="required"> MECH
             <input type="radio" name="dept" value="electrical" required="required"> ELECTRICAL
              <input type="radio" name="dept" value="msme" required="required">MSME
             

                </span>
                </div>
            </div>
<div class="row100">
            <div class="col">
                <span class="rad">
                    <span class="text">Course</span>
                    <br>
                    <input type="radio" name="course" value="btech" required="required"> B.Tech
                    <input type="radio" name="course" value="mtech" required="required"> M.Tech
                    <input type="radio" name="course" value="phd" required="required"> Phd.


                </span>
                </div>
            </div>
<div class="row100">
            <div class="col">
                <span class="rad">
                    <span class="text">Semester</span>
                    <br>
                    <input type="radio" name="sem" value="1" required="required"> 1
                    <input type="radio" name="sem" value="2" required="required"> 2
                    <input type="radio" name="sem" value="3" required="required"> 3
  <input type="radio" name="sem" value="4" required="required"> 4
                    <input type="radio" name="sem" value="5" required="required"> 5
                    <input type="radio" name="sem" value="6" required="required"> 6

                </span>
                </div>
            </div>
            <div class="row100">
                <div class="col">
							<input value="CheckOut" type="submit"	onclick="">
                </div>
            </div>
        </form>
        </div>
<!-- AniJS core library -->
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



			
