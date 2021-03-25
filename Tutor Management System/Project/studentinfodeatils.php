<!DOCTYPE html>
<html>
<body style="text-align:center;">

<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td><h2>Student Information Deatils</h2><hr>
<a style="text-decoration: none" href="adminindex.php">Home</a><br/><br/>
<?php 
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
		$data=array();
		
		
		$conn = mysqli_connect("localhost", "root", "","cred");
		$sql="select * from  where email='".$_COOKIE["email"]."'";
		//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		while($row = mysqli_fetch_assoc($result)) {
			//echo $row["uname"];echo "<br/>";
			//print_r($row);
			$data[]=$row;
		}
		
		//print_r\($data);
		echo "<h1>".$data[0]["uname"]."</h1><hr/>";
		echo "<h4>Gender: ".$data[0]["gender"]."</h4>";
		echo "<h4>Class: ".$data[0]["class"]."</h4>";
		echo "<h4>School: ".$data[0]["school"]."</h1>";
		echo "<h4>Medium: ".$data[0]["medium"]."</h4>";
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
</td>
</tr>
</table>
</body>
</html>