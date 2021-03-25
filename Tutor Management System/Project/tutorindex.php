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
$file=fopen("pictures/tutor.txt","r") or die("file error");
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

<a style="text-decoration: none" href="tutorbasicinfo.php">Basic Information</a><br><br>
<a style="text-decoration: none" href="tutorotherinfo.php">Other Information</a><br><br>
<a style="text-decoration: none" href="tpicture.php">Upload Profile Picture</a><br><br>
<a style="text-decoration: none" href="tutoredu.php">Educational Information</a><br><br>
<a style="text-decoration: none" href="tchangeinfo.php">Update Password</a><br><br>
<a style="text-decoration: none" href="tprofile.php">View Profile</a><br><br>
<a style="text-decoration: none" href="replylistshow.php">My Reply List</a><br><br>
<a style="text-decoration: none" href="request.php">Request from Student</a><br><br>
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