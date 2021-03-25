<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
?>
<!DOCTYPE html>
<html>
<body style="text-align:center;">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>

<h1>Welcome To The Admin Pannel  </h1><hr><br><br>
<a style="text-decoration: none" href="pendingtutor.php">Show pending Tutors</a><br><br>
<a style="text-decoration: none" href="pendingstudent.php">Show pending Students</a><br><br>
<a style="text-decoration: none" href="tutorshow.php">Show valid Tutors</a><br><br>
<a style="text-decoration: none" href="studentshow.php">Show valid Students</a><br>
<pre>


                         <b><a style="text-decoration: none" href="logout.php">Log Out</a></b><br><br><br><br><br><br>
</pre>
</td>
</tr>
</table>
</body>
</html>
<?php
	}
	else 
	{
		echo "<h1 style='color:red'>Session time out</h1>";?>
		<h2> You want to Login again?&nbsp;&nbsp;
		<a style="text-decoration: none" href="login.php">Login</a></h2>
		<?php
		
	}
}
else{
	header("Location:logout.php");
}
?>