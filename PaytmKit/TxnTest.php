<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

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
         <h2>Join US</h2>
					<form method="POST" action="pgRedirect.php">
										<div class="row100">
												<div class="col">
													<td><label>ORDER_ID::*</label></td>
														<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
																				name="ORDER_ID" autocomplete="off"
														value="<?php echo  "ORDS" . rand(10000,99999999)?>">
																			</td>
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
                <span class="text">Donate</span>
                <br>
								<td><input title="txnamount" tabindex="10"
									type="text" name="amount"
									value="">
								</td>

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



					<!-- <td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html> -->
