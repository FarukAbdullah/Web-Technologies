
<!DOCTYPE html>
<html>
<body style="text-align:center;">

<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td><h2>Tutor Information</h2><hr>
<a style="text-decoration: none" href="adminindex.php">Home</a><br/><br/>
<?php 
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["uname"])){
		$myfile = fopen("tutorinfo.txt", "r") or die("Unable to open file!");
		$data=array();
		//loads the array with file data0
		while($line=fgets($myfile)) {
			$line=trim($line);
			$ar=explode("-",$line);
			if($_REQUEST["uname"]==$ar[0]){
				$temp["uname"]=$ar[0];
				$temp["gender"]=$ar[1];
				$temp["email"]=$ar[2];
				$temp["phone"]=$ar[3];
				$temp["school"]=$ar[4];
				$temp["year"]=$ar[5];
				$temp["board"]=$ar[6];
				$temp["result"]=$ar[7];
				$data[0]=$temp;
			}
		}
		fclose($myfile);
		//print_r\($data);
		echo "<h1>".$data[0]["uname"]."</h1><hr/>";
		echo "<h4>Gender: ".$data[0]["gender"]."</h4>";
		echo "<h4>Email: ".$data[0]["email"]."</h4>";
		echo "<h4>Phone: ".$data[0]["phone"]."</h4>";
		echo "<h1>SSC Information </h1>";
		echo "<h4>School: ".$data[0]["school"]."</h4>";
		echo "<h4>Year: ".$data[0]["year"]."</h4>";
		echo "<h4>Board: ".$data[0]["board"]."</h4>";
		echo "<h4>Result: ".$data[0]["result"]."</h4>";
	}
}
?>
<br>
</td>
</tr>
</table>
</body>
</html>
