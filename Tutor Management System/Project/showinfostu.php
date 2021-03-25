<?php //this is for the student side ?>
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
<td><h2>Information Deatils</h2>
<a style="text-decoration: none" href="studentindex.php">Home</a><br/><br/>
<?php 

session_start();
$file=fopen("pictures/student.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	$ar=explode("-",$c);
	if($_SESSION["username"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<img src="<?php echo $proPicURL;?>" width="100px" height="100px" />
<?php
	if(isset($_REQUEST["uname"])){
		$myfile1 = fopen("studentpersonal.txt", "r") or die("Unable to open file!");
		$myfile2 = fopen("studenteducation.txt", "r") or die("Unable to open file!");
		$data1=array();
		$data2=array();
		//loads the array with file data0
		while($line1=fgets($myfile1)) {
			$line1=trim($line1);
			$ar=explode(" ",$line1);
			if($_SESSION["username"]==$ar[0]){
				$temp["stuname"]=$ar[1];
				$temp["DOB"]=$ar[2];
				$temp["address"]=$ar[3];
				$temp["phoneno"]=$ar[4];
				$temp["gender"]=$ar[5];
				$data1[0]=$temp;
			}
		}
		fclose($myfile1);
		
		echo "<h1>".$data1[0]["stuname"]."</h1><hr/>";
		echo "<h4>Date Of Birth: ".$data1[0]["DOB"]."</h4>";
		echo "<h4>Address      : ".$data1[0]["address"]."</h4>";
		echo "<h4>Phone Number : ".$data1[0]["phoneno"]."</h1>";
		echo "<h4>Gernder      : ".$data1[0]["gender"]."</h4>";
		
	
	
	
		while($line2=fgets($myfile2)) {
			$line2=trim($line2);
			$arr=explode(" ",$line2);
			if($_SESSION["uname"]==$ar[0]){
			    $_REQUEST["InstituteName"]=$arr[1];
				$tempo["class"]=$arr[2];
				$tempo["medium"]=$arr[3];
				$data2[0]=$tempo;
			}
		}
		fclose($myfile2);
		echo "<h1>Educational Information </h1><hr>";
		
		echo "<h4>Institution's Name :".$data2[0]["InstituteName"]."</h4>";
		echo "<h4>Class              : ".$data2[0]["class"]."</h4>";
		echo "<h4>Medium             : ".$data2[0]["medium"]."</h4>";
		
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