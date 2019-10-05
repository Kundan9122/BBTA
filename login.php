<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	echo"clicked";
	$rs=mysqli_query($conn,"select * from admin where user_id='$Admin_ID' and pass='$A_pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> 
<div id="id01" class="modal">
  
  <form class="modal-content animate" action=" ">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h2 align ="center"><u><caption><b>Login form</b></caption></u></h2> 
      <img src="C:\Users\KUNDAN\Desktop\c.jpg" alt="Image" class="avatar">
    </div>

    <div class="container">
      <label for="Admin_ID"><b>Username</b></label>
      <input type="text" placeholder="Enter UserId" name="Admin_ID" required>

      <label for="A_pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="A_pass" required>
        
       <button type="submit" value="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
	  
	&nbsp;&nbsp;&nbsp;New User <a href="signup.php">Register Here</a>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
		  }
		  ?>
		  </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	 
	  <span class="psw">Forgot <a href="#">password?</a></span><br>
	</div>
	
  </form>

</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it 
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  
    </div>


</form>
</body>
</html>