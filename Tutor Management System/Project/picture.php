
<!DOCTYPE html>
<html>
<body style="text-align:center;">
<table border ="1" align="center" width ="50%">
<tr>
<td><?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){?>
	<form action="upload.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
	Select image : <input type="file" name="fileToUpload" placeholder="Choose Picture">
	
<input type="submit" value="Upload" name="sbt"><br></pre>
</form>
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
 <pre>
    <a style="text-decoration: none" href="studentindex.php">Home</a>   <a style="text-decoration: none" href="logout.php">Log Out</a><br>
</pre>
</td>
</tr>
</table>
</body>
</html>
