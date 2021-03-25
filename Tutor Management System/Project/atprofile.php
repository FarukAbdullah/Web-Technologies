<?php
$data=array();
$data1=array();
$data2=array();
$data3=array();
$data4=array();
$data5=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from tssc where email='".$_REQUEST["email"]."'";	
		loadFromMySQL($sql);

		$sql1="select * from thsc where email='".$_REQUEST["email"]."'";
		loadFromMySQL1($sql1);

		$sql2="select * from tbsc where email='".$_REQUEST["email"]."'";
		loadFromMySQL2($sql2);

		$sql3="select * from tmsc where email='".$_REQUEST["email"]."'";
		loadFromMySQL3($sql3);

		$sql4="select * from tutorpersonalinfo where email='".$_REQUEST["email"]."'";
		loadFromMySQL4($sql4);

		$sql5="select * from tutorotherinfo where email='".$_REQUEST["email"]."'";
		loadFromMySQL5($sql5);
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
<!DOCTYPE html>
<html>
<style>
table,th,tr,td{
 border: 1px solid black;"
}
</style>
<body style="text-align:center;">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<?php
$file=fopen("pictures/tutor.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	$ar=explode(" ",$c);
	if($_REQUEST["email"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}

?>
<h3><a style="text-decoration: none" href="tutorshow.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="adminindex.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="logout.php">Log out</a></h3>
<table style="background-color:cyan;"  align="center" width ="100%">
	<tr>
		<td colspan="4">
			<h1>Profile</h1>
		</td>
	</tr>
	<tr >
		<td style="text-align:left">
          <img src="<?php echo $proPicURL;?>" width="130px" height="160px" />
       </td>
       <td colspan="3" style="text-align:center;"><h2><?php echo $data4[0]["name"];  ?></h2><h3>Contact:<?php echo " ". $data[0]["email"];  ?><br>Phone:<?php echo " " .$data4[0]["phoneno"];  ?></h3>
       </td>
       
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>Basic Information</h2></th>
    </tr>
    <tr>
    	<td>Name</td>
    	<td colspan="3"><?php echo  $data4[0]["name"];  ?></td>
    </tr>
    <tr>
    	<td>DOB</td>
    	<td colspan="3"><?php echo  $data4[0]["dob"];  ?></td>
    </tr>
    <tr>
    	<td>Location</td>
    	<td colspan="3"><?php echo  $data4[0]["location"];  ?></td>
    </tr>
    <tr>
    	<td>Gender</td>
    	<td colspan="3"><?php echo  $data4[0]["gender"];  ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>SSC Information</h2></th>
    </tr>
    <tr>
    	<td>Institution Name</td>
    	<td colspan="3"><?php echo $data[0]["insname"]; ?></td>
    </tr>
    <tr>
    	<td>Passing Year</td>
    	<td colspan="3"><?php echo $data[0]["passingyear"]; ?></td>
    </tr>
    <tr>
    	<td>Board</td>
    	<td colspan="3"><?php echo $data[0]["board"]; ?></td>
    </tr>
    <tr >
    	<td>Result</td>
    	<td colspan="3"><?php echo $data[0]["result"]; ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>HSC Information</h2></th>
    </tr>
    <tr>
    	<td>Institution Name</td>
    	<td colspan="3"><?php echo $data1[0]["insname"]; ?></td>
    </tr>
    <tr>
    	<td>Passing Year</td>
    	<td colspan="3"><?php echo $data1[0]["passingyear"]; ?></td>
    </tr>
    <tr>
    	<td>Board</td>
    	<td colspan="3"><?php echo $data1[0]["board"]; ?></td>
    </tr>
    <tr>
    	<td>Fourth Subject</td>
    	<td colspan="3"><?php echo  $data1[0]["fourthsub"];  ?></td>
    </tr>
    <tr >
    	<td>Result</td>
    	<td colspan="3"><?php echo $data1[0]["result"]; ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>BSC Information</h2></th>
    </tr>
    <tr>
    	<td>Institution Name</td>
    	<td colspan="3"><?php echo $data2[0]["insname"]; ?></td>
    </tr>
    <tr>
    	<td>Passing Year</td>
    	<td colspan="3"><?php echo $data2[0]["passingyear"]; ?></td>
    </tr>
    <tr>
    	<td>Department</td>
    	<td colspan="3"><?php echo $data2[0]["dept"]; ?></td>
    </tr>
    <tr >
    	<td>Result</td>
    	<td colspan="3"><?php echo $data2[0]["result"]; ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>MSC Information</h2></th>
    </tr>
    <tr>
    	<td>Institution Name</td>
    	<td colspan="3"><?php echo $data3[0]["insname"]; ?></td>
    </tr>
    <tr>
    	<td>Passing Year</td>
    	<td colspan="3"><?php echo $data3[0]["passingyear"]; ?></td>
    </tr>
    <tr>
    	<td>Department</td>
    	<td colspan="3"><?php echo $data3[0]["dept"]; ?></td>
    </tr>
    <tr>
    	<td>Subject</td>
    	<td colspan="3"><?php echo  $data3[0]["subject"];  ?></td>
    </tr>
    <tr >
    	<td>Result</td>
    	<td colspan="3"><?php echo $data3[0]["result"]; ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>Other Information</h2></th>
    </tr>
    <tr>
    	<td>Interested Teaching Medium</td>
    	<td colspan="3"><?php echo  $data5[0]["medium"];  ?></td>
    </tr>
    <tr>
    	<td>Interested Subjects</td>
    	<td colspan="3"><?php echo  $data5[0]["subject"];  ?></td>
    </tr>
    <tr>
        <td>Expected Salary </td>
        <td colspan="3"><?php echo  $data5[0]["salary"];  ?></td>
    </tr>
    <tr>
    	<td>Available Status </td>
    	<td colspan="3"><?php echo  $data5[0]["status"];  ?></td>
    </tr>
    <tr>
        <td colspan="4" style="text-align:center;">
<h3><a style="text-decoration: none" href="adelete.php?email=<?php echo $_REQUEST["email"];?>"><?php echo "Delete Tutor" ?></a></h3>
</td></tr>
    <br><br>
       
</table>
</td>
</tr>

</table>
</body>
</html>
