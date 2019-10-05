<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body>


<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id02" class="modal">
 <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" class="modal-content animate">
     
   <div class="imgcontainer">
     <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h2 align="center"><u><caption><b>Registration form</b></caption></u></h2>
     <img src="C:\Users\KUNDAN\Desktop\c.jpg" alt="Avatar" class="avatar">
   </div>

   <div class="container">
     <label for="uname"><b>First name</b></label>
     <input type="text" placeholder="Enter First name" name="name" id="name" required>
        <label for="uname"><b>Last name</b></label>
     <input type="text" placeholder="Enter Last name" name="uname" required>

     <label for="pwd"><b>Password</b></label>
     <input type="password" placeholder="Enter password" name="login" id="login" required>
         <label for="cpsw"><b>Confirm Password</b></label>
     <input type="password" placeholder="password should be same" name="pass" id="pass" required>
       
        <label for="uname"><b>Enter your Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
     <input type="text" placeholder=" Abc123@gmail.com" name="email" id="email" required><br><br>
       
         <label for="num"><b>Enter your Mobile</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="number" placeholder=" 10 digit number" name="num" required><br><br>
       
       <label><b> Select your Gender</b></label>&nbsp;&nbsp;&nbsp;
       male<input type="radio" name="g" value="m"/>
       female<input type="radio" name="g" value="f"/><br><br>

       <label type="date"><b>Select your DOB</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;<input type="date"><br><br>
       
        <label type="file"><b>Upload your pic</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;<input type="file"><br>
      
     <button type="submit">Save Data</button>
       
     

   <div class="container" style="background-color:#f1f1f1">
     <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     <span class="psw">Forgot <a href="#">password?</a></span> 
   </div>
 </form>
 <script>
// Get the modal
var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
   if (event.target == modal) {
       modal.style.display = "none";
   }
}
</script>
   </div>
<!--<div class="floating-box">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <label for=""pwd"> User Id</label>
   <input type="text" id="name" name="user_id"><br><br>
   <label for=""pwd">Password</label>
   <input type="password" id="login" name="login"><br><br>
     
   <label for=""pwd"> Confirm   </label>
   <input type="password" id="pass" name="pass"><br><br>
   <label for="uname">Name</label>
   <input type="text" id="name" name="name"><br><br>
       
   
   <label for="uname">Email id</label>
   <input type="text" id="email" name="email"><br><br>
    
   <input type="submit" name="submit" value="Signup">-->
	<p>Already Register <a href="index.php"Login here></a></p>
                              

</form>
</div>
</body>
</html>