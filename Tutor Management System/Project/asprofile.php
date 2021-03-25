<?php
$data=array();
$data1=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from stupersonalinfo where email='".$_REQUEST["email"]."'";
		loadFromMySQL($sql);

		$sql1="select * from stueducationinfo where email='".$_REQUEST["email"]."'";
		loadFromMySQL1($sql1);

		
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
$file=fopen("pictures/student.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	$ar=explode(" ",$c);
	if($_REQUEST["email"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}

?>
<h3><a style="text-decoration: none" href="studentshow.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="adminindex.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="logout.php">Log out</a></h3>
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
       <td colspan="3" style="text-align:center;"><h2><?php echo $data[0]["name"];  ?></h2><h3>Contact:<?php echo " ". $data[0]["email"];  ?><br>Phone:<?php echo " " .$data[0]["phoneno"];  ?></h3>
       </td>
       
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>Personal Information</h2></th>
    </tr>
    <tr>
    	<td>Name</td>
    	<td colspan="3"><?php echo  $data[0]["name"];  ?></td>
    </tr>
    <tr>
    	<td>DOB</td>
    	<td colspan="3"><?php echo  $data[0]["dob"];  ?></td>
    </tr>
    <tr>
    	<td>Address</td>
    	<td colspan="3"><?php echo  $data[0]["address"];  ?></td>
    </tr>
    <tr>
    	<td>Gender</td>
    	<td colspan="3"><?php echo  $data[0]["gender"];  ?></td>
    </tr>
    <tr>
    	<th colspan="4" style="text-align:center;"><h2>Educational Information</h2></th>
    </tr>
    <tr>
    	<td>Institution Name</td>
    	<td colspan="3"><?php echo $data1[0]["insname"]; ?></td>
    </tr>
    <tr>
    	<td>Class</td>
    	<td colspan="3"><?php echo $data1[0]["class"]; ?></td>
    </tr>
    <tr>
    	<td>Medium</td>
    	<td colspan="3"><?php echo $data1[0]["medium"]; ?></td>
    </tr>
    <tr>
        <td colspan="4" style="text-align:center;">
<h3><a style="text-decoration: none" href="adelete.php?email=<?php echo $_REQUEST["email"];?>"><?php echo "Delete Student" ?></a></h3>
</td></tr>
    <br><br>
     
</table>
</td>
</tr>

</table>
</body>
</html>
