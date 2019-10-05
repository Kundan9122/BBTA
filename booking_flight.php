<?php if(!isset($_SESSION)) { session_start(); } ?>

<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,"travel");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
//<?php include('function.php'); 
 
if(isset($_GET["submit"])){
$name=$_GET["name"];
$email=$_GET["email"];
$from=$_GET["from"];
$to=$_GET["to"];
$adults=$_GET["adults"];
$children=$_GET["children"];
$class=$_GET["class"];
$departure=$_GET["departure"];
$type=$_GET["type"];
//$mobileno=$_GET["mobileno"];
}
$sql = "INSERT INTO flight_booking (`Name`,`Email`,`From`,`To`,`Adults`,`Children`,`Class`,`Departure`,`Type`)
VALUES ('$name','$email','$from','$to','$adults','$children','$class','$departure','$type')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Save');</script>";
    
    include "bill.php";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//setcookie($peraddress, 'peraddress', time() + (86400 * 30), "/");
$conn->close();
 ?>