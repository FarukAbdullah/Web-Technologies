<!DOCTYPE>
<html>
<body style="text-align:center;">
<table style="background-color:cyan;text-align:center;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2> List of  Valid Student</h2><hr>
<h3><a style="text-decoration: none" href="adminindex.php">Home</a></h3><br>
<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$_SESSION["type"]="Student";
		$data=array();		

		$jsonData= getJSONFromDB("select email from login where type='Student' and status='active'");
		$data=json_decode($jsonData);
		
	if(sizeof($data)>0){
		foreach($data as $v){?>
	    <a style="text-decoration: none" href="asprofile.php?email=<?php echo $v->email;?>"><?php echo $v->email;?></a><br/>
	<?php
	}
}
else
{
	echo "<h3> No valid Student Found</h3>";
}

		
	}
	else 
	{
		echo "<h1 style='color:red'>Session time out</h1>";?>
		<h2> You want to Login again?&nbsp;&nbsp;<a style="text-decoration: none" href="login.html">Login</a></h2>
		<?php
		
	}
}
else{
	header("Location:logout.php");
}
?>
<br><br><br><br><br><br><br><br><br>
</td>
</tr>
</table>
</body>
</html>