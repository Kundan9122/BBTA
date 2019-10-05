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

 if($_SERVER['REQUEST METHOD']="GET"){
$fname=$_GET["fname"];
$lname=$_GET["lname"];
$email=$_GET["email"];
$type=$_GET["type"];
$guests=$_GET["guests"];
$date=$_GET["date"];
$time=$_GET["time"];
$date2=$_GET["date2"];
$time2=$_GET["time2"];
//$type=$_GET["type"];
//$mobileno=$_GET["mobileno"];
}
$sql = "INSERT INTO hotel_booking
VALUES ('$fname','$lname','$email','$type','$guests','$date','$time','$date2','$time2')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record save');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//setcookie($peraddress, 'peraddress', time() + (86400 * 30), "/");
$conn->close();
 ?>