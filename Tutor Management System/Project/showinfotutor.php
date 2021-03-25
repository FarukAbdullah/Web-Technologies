<?php // this is for the admin side ?>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
?>
<<!DOCTYPE html>
<html>
<body style="text-align:center;">

<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td><h2>Tutor Information Details</h2>
<a href="adminindex.php">Home</a><br><br>
<?php 
session_start();
$data=$_SESSION["username"];
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["uname"])){
		$myfile1 = fopen("basicinfotutor.txt", "r") or die("Unable to open file!");
		$myfile2 = fopen("edssc.txt", "r") or die("Unable to open file!");
		$myfile3 = fopen("edhsc.txt", "r") or die("Unable to open file!");
		$myfile4 = fopen("edbsc.txt", "r") or die("Unable to open file!");
		$myfile5 = fopen("edmsc.txt", "r") or die("Unable to open file!");
		$data1=array();
		$data2=array();
		$data3=array();
		$data4=array();
		//loads the array with file data0
		//PERSONAL INFORMATION
		while($line=fgets($myfile1)) {
			$line1=trim($line1);
			$ar1=explode(" ",$line1);
			if($_SESSION["uname"]==$ar1[0]){
				$temp1["name"]=$ar1[1];
				$temp1["dob"]=$ar1[2];
				$temp1["location"]=$ar1[3];
				$temp1["phoneno"]=$ar1[4];
				$temp1["gender"]=$ar1[5];
				$temp1["medium"]=$ar1[6];
				$temp1["subject"]=$ar1[7];
				$data1[0]=$temp1;
			}
		}
		fclose($myfile1);
		//print_r\($data);
		echo "<h1>".$data1[0]["name"]."</h1><hr/>";
		echo "<h4>Gender: ".$data1[0]["dob"]."</h4>";
		echo "<h4>Email: ".$data1[0]["location"]."</h4>";
		echo "<h4>Phone: ".$data1[0]["phoneno"]."</h4>";
		echo "<h4>Phone: ".$data1[0]["gender"]."</h4>";
		echo "<h4>College: ".$data1[0]["medium"]."</h4>";
		echo "<h4>University: ".$data1[0]["subject"]."</h4>";
		
		//SSC INFORMATION
		while($line2=fgets($myfile2)) {
			$line2=trim($line2);
			$ar2=explode(" ",$line2);
			if($_SESSION["uname"]==$ar2[0]){
				$temp2["InstituteName"]=$ar2[1];
				$temp2["PassingYear"]=$ar2[2];
				$temp2["Department"]=$ar2[3];
				$temp2["Result"]=$ar[4];
				$data2[0]=$temp2;
			}
		} ?>
		
		
		<h2>SSC Information</h2> <?php
		fclose($myfile2);
		//print_r\($data);
		echo "<h4>".$data2[0]["InstituteName"]."</h1><hr/>";
		echo "<h4>Gender: ".$data2[0]["PassingYear"]."</h4>";
		echo "<h4>Email: ".$data2[0]["Department"]."</h4>";
		echo "<h4>Phone: ".$data2[0]["Result"]."</h4>";
		
		//HSC INFORMATION
		while($line3=fgets($myfile3)) {
			$line3=trim($line3);
			$ar3=explode(" ",$line3);
			if($_REQUEST["uname"]==$ar[0]){
				$temp3["InstituteName"]=$ar[1];
				$temp3["PassingYear"]=$ar[2];
				$temp3["Department"]=$ar[3];
				$temp3["fourthsub"]=$ar[4];
				$temp3["Result"]=$ar[5];
				$data3[0]=$temp3;
			}
		} ?>
		
	
	
		<h2>HSC Information</h2>		<?php
		
		fclose($myfile3);
		//print_r\($data);
		echo "<h4>Institute Name: ".$data3[0]["InstituteName"]."</h1><hr/>";
		echo "<h4>Passing Year: ".$data3[0]["PassingYear"]."</h4>";
		echo "<h4>Department: ".$data3[0]["Department"]."</h4>";
		echo "<h4>Fourth Subject: ".$data3[0]["fourthsub"]."</h4>";
		echo "<h4>Result: ".$data3[0]["Result"]."</h4>";
		
		//BSC INFORMATION
		while($line4=fgets($myfile4)) {
			$line4=trim($line4);
			$ar4=explode(" ",$line4);
			if($_SESSION["uname"]==$ar4[0]){
				$temp4["InstituteName"]=$ar4[1];
				$temp4["PassingYear"]=$ar4[2];
				$temp4["Department"]=$ar4[3];
				$temp4["Result"]=$ar4[4];
				$data4[0]=$temp4;
			}
		} ?>
		
		<h2>BSC Information</h2>
		<?php
		fclose($myfile4);
		//print_r\($data);
		echo "<h4>Institute Name: ".$data4[0]["InstituteName"]."</h1><hr/>";
		echo "<h4>Passing Year: ".$data4[0]["PassingYear"]."</h4>";
		echo "<h4>Department: ".$data4[0]["Department"]."</h4>";
		echo "<h4>Result: ".$data4[0]["Result"]."</h4>";
		
		
		//MSC INFORMATION
		while($line5=fgets($myfile5)) {
			$line5=trim($line5);
			$ar5=explode(" ",$line5);
			if($_SESSION["uname"]==$ar5[0]){
				$temp5["InstituteName"]=$ar5[1];
				$temp5["PassingYear"]=$ar5[2];
				$temp5["Department"]=$ar5[3];
				$temp5["Subject"]=$ar5[4];
				$temp5["Result"]=$ar5[5];
				$data5[0]=$temp5;
			}
		} ?>
		
		<h2>MSC Information</h2>
		
		<?php
		fclose($myfile5);
		//print_r\($data);
		echo "<h4>Institute Name: ".$data5[0]["InstituteName"]."</h1><hr/>";
		echo "<h4>Passing Year: ".$data5[0]["PassingYear"]."</h4>";
		echo "<h4>Department: ".$data5[0]["Department"]."</h4>";
		echo "<h4>Subject: ".$data5[0]["Subject"]."</h4>";
		echo "<h4>Result: ".$data5[0]["Result"]."</h4>";
		
		
	}
}
?>
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