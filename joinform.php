<?php
$servername = "localhost";
$username = "id13223972_aditi";
$password = "Aarohawebsite1@";
$dbname="id13223972_aaroha";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$join = $_POST['join'];
$update = $_POST['update'];


// Create connection
$conn =  mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
echo "Connected successfully";

mysql_select_db($dbname,$conn);
$query ="INSERT INTO info(UserName,Email,Phone,Gender,City,JoinUs,UpdateYN) VALUES('$name','$email','$phone','$gender','$city','$join','$update')";
if(!mysql_query($query,$conn))
{
    die('Error in inserting records'.mysql_error());
}else{
    echo "Data Inserted";
}
?>