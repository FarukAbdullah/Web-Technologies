<!DOCTYPE html>
<html>
<body style="text-align:center;">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
$file=fopen("pictures/student.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	$ar=explode(" ",$c);
	if($_COOKIE["email"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}

?>
	<img src="<?php echo $proPicURL;?>" width="100px" height="100px" />
		<h1>Welcome <?php echo " ".$_COOKIE["email"]; ?></h1><hr>

<a style="text-decoration: none" href="studentperinfo.php">Persional Information</a><br><br>
<a style="text-decoration: none" href="picture.php">Upload Profile Picture</a><br><br>
<a style="text-decoration: none" href="studentedu.php">Educational Information</a><br><br>
<a style="text-decoration: none" href="searchtutor.php">Search Tutor</a><br><br>
<a style="text-decoration: none" href="sprofile.php">View Profile</a><br><br>
<a style="text-decoration: none" href="changeinfo.php">update Password</a><br><br>
<a style="text-decoration: none" href="requestlistshow.php">My Request List</a><br><br>
<a style="text-decoration: none" href="reply.php">Reply From Tutor</a><br><br>
<pre>
          <a style="text-decoration: none" style="text-decoration: none" href="delete.php">Delete Account</a>           <a style="text-decoration: none" style="text-decoration: none" href="logout.php">Log Out</a><br>
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