<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,"travel");
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
else
{
 echo "created successfully!!!";
 }
 /*$create_db="CREATE DATABASE IF NOT EXISTS booking";
 $db=mysqli_query($conn,$create_db);
 //smysql_select_db("booking");
 $create_table="create table IF NOT EXISTS book(
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
from VARCHAR(30) NOT NULL,
to VARCHAR(30) NOT NULL,
adults VARCHAR(30) NOT NULL,
children VARCHAR(30) NOT NULL,
class VARCHAR(30) NOT NULL,
departure VARCHAR(50),
type VARCHAR(30) NOT NULL,
)";

$create_book=mysqli_query($conn,$create_table);
if (!$create_table)
{
    echo "error";
}
echo $create_book;*/
if($_SERVER['REQUEST METHOD']="GET") 
    /*if(isset($_GET['cname']) && isset($_GET['cnumber']) && isset($_GET['exp']) && isset($_GET['cvv'])&& isset($_GET['amt'])&& isset($_GET['fname'])&& isset($_GET['email'])&& isset($_GET['pno'])&& isset($_GET['name'])&& isset($_GET['name'])&& isset($_GET['amt1'])&& isset($_GET['upi'])&& isset($_GET['otp'])&& isset($_GET['dname'])&& isset($_GET['dnumber'])&& isset($_GET['dexp'])&& isset($_GET['dcvv'])&& isset($_GET['damt']))*/
{
    
    $email='';
    if(isset( $_GET['email']))
    {
    $email = $_GET['email']; 
    }
     
    $fname='';
    if(isset( $_GET['fname']))
    {
    $fname = $_GET['fname']; 
    }
    
    $cname='';
    if(isset( $_GET['cname']))
    {
    $cname = $_GET['cname']; 
    } 
    //$cname = $_GET["cname"];
    $cnumber='';
    if(isset($_GET['cnumber']))
    {
    $cnumber = $_GET['cnumber'];
    }
     $amt='';
    if(isset($_GET['amt']))
    {
    $amt = $_GET['amt'];
    }
    
    $exp='';
    if(isset($_GET['exp']))
    {
    $exp = $_GET['exp'];
    }
    
 $cvv='';
    if(isset($_GET['cvv']))
    {
    $cvv = $_GET['cvv'];
    }
   
    $pno='';
    if(isset($_GET['pno']))
    {
     $pno = $_GET['pno'];
    }
     $name='';
    if( isset( $_GET['name']))   
    {
     $name = $_GET['name'];
    } 
    $amt1='';
    if(isset($_GET['amt1']))
    {
    $amt1 = $_GET['amt1'];
    }
    $upi='';
    if(isset($_GET['upi']))
    {
    $upi = $_GET['upi'];
    }
    $otp='';
    if(isset($_GET['otp']))
    {
    $otp = $_GET['otp'];
    }
    
    $dname='';
    if( isset( $_GET['dname']))
    {
    $dname = $_GET['dname']; 
    } 
    //$cname = $_GET["cname"];
    $dnumber='';
    if(isset($GET['dnumber']))
    {
    $dnumber = $_GET['dnumber'];
    }
    $damt='';
    if(isset($_GET['damt']))
    {
    $damt = $_GET['damt'];
    }
    $dexp='';
    if(isset($GET['dexp']))
    {
    $dexp = $_GET['dexp'];
    }
    
 $dcvv='';
    if(isset($_GET['dcvv']))
    {
    $dcvv = $_GET['dcvv'];
    }
    
}
$sql1 = "INSERT INTO cpayment VALUES ('$email','$fname','$cname','$cnumber','$amt','$exp','$cvv')";
$sql2 = "INSERT INTO gpayment VALUES ('$pno','$name','$amt1','$upi','$otp')";
$sql3 ="INSERT INTO  dpayment VALUES ('$dname','$dnumber','$damt','$dexp','$dcvv')";

  if (mysqli_query($conn, $sql1)) 
      {
    echo "New record created successfully";
 } else 
      {
     echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
 }
    if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
        if (mysqli_query($conn, $sql3)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
//setcookie($peraddress, 'peraddress', time() + (86400 * 30), "/");
$conn->close();
 ?>
