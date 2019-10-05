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
$route=$_GET["route"];
$pass=$_GET["pass"];
//$adults=$_GET["adults"];
$days=$_GET["day"];
$from=$_GET["from"];
$to=$_GET["to"];
//$type=$_GET["type"];
//$mobileno=$_GET["mobileno"];
}
$sql = "INSERT INTO train_booking
VALUES ('$name','$email','$route','$pass','$days','$from','$to')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record save');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//setcookie($peraddress, 'peraddress', time() + (86400 * 30), "/");
$conn->close();
 ?>