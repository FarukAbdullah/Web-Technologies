<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
		
		//$data=array();

		if(isset($_POST['valid'])){

		$sql="UPDATE `login` SET `status`='active' WHERE email='".$_REQUEST["email"]."'";
		ExecuteQuery($sql);
		header("Location:pendingstudent.php");
		
		}
		if(isset($_POST['del']))
		{
		    $sql1="DELETE FROM `stueducationinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql2="DELETE FROM `stupersonalinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql3="DELETE FROM `login` WHERE email='".$_REQUEST["email"]."'";			
		    ExecuteQuery($sql1);
		    ExecuteQuery($sql2);
		    ExecuteQuery($sql3);
		    header("Location:adminindex.php");
		}		
	}	
	else 
	{
		echo "<h1 style='color:red'>Session time out</h1>";?>
		<h2> You want to Login again?&nbsp;&nbsp;<a style="text-decoration: none" href="login.html">Login</a></h2>
		<?php		
	}
}
else
{
	header("Location:logout.php");
}
?>
<!DOCTYPE>
<html>
<body style="text-align:center;">
<table style="background-color:cyan;text-align:center;" border ="1" align="center" width ="50%">
<tr>
<td>
 <form method="post" action="#">
<h1><a style="text-decoration: none" href="adminindex.php">Home</a></h1>
<h2><?php echo " ".$_REQUEST["email"]; ?></h2>
<br><br><br>

<input type="submit" name="valid" value="Active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="del" value="Delete">


<br><br><br><br>
<br><br><br>
<br><br>
</form>
</td>
</tr>
</table>
</body>
</html>