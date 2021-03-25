<!DOCTYPE html>
<html>
<body style="text-align:center;">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2>Pending List of Tutors</h2><hr>
<h3><a style="text-decoration: none" href="adminindex.php">Home</a></h3><br/>
<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$_SESSION["type"]="Tutor";
		$data=array();		

		$jsonData= getJSONFromDB("select email from login where type='Tutor' and status='inactive'");
		$data=json_decode($jsonData);

	    if(sizeof($data)>0){
		foreach($data as $v){?>
	    <a style="text-decoration: none" href="tvalid.php?email=<?php echo $v->email;?>"><?php echo $v->email;?></a><br/>
	<?php
	}
	}
else
{
	echo "<h3> No Pending Tutor Found</h3>";
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