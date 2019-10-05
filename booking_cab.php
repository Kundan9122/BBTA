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
$name=$_GET["name"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$date=$_GET["date"];
$time=$_GET["time"];
$date2=$_GET["date2"];
$time2=$_GET["time2"];
$pickadd=$_GET["pickadd"];
$destadd=$_GET["destadd"];
$type=$_GET["type"];
}
$sql = "INSERT INTO cab_booking
VALUES ('$name','$email','$phone','$date','$time','$date2','$time2','$pickadd','$destadd','$type')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record save');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//setcookie($peraddress, 'peraddress', time() + (86400 * 30), "/");
$conn->close();
 ?>