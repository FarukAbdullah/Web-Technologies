<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from stueducationinfo where email='".$_COOKIE["email"]."'";	
		loadFromMySQL($sql);
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
<head>
<body >
<form action="checkstudentedu.php" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<pre>
<h1 style="text-align:center">Educational Information </h1><hr>
              Institution's Name  : <select name="insname">
              <option value><?php echo $data[0]["insname"]; ?></option>
              <option value="South Point School and College">South Point School and College</option>
              <option value="HURDCO International School">HURDCO International School</option>
              <option value="Ebenzer International School">Ebenzer International School</option>
              <option value="Sunflower School And College">Sunflower School And College</option>
              <option value="International School Dhaka">International School Dhaka</option>
              <option value="Bangladesh Grammar School">Bangladesh Grammar School</option>
              <option value="Ideal Public School And College">Ideal Public School And College</option>
              <option value="Notredam College">Notredam College</option>
              <option value="Viqarunisa Noon School & College">Viqarunisa Noon School & College</option>
              <option value="Rajuk Uttara Model College">Rajuk Uttara Model College</option>
              <option value="Dhaka Imperial College">Dhaka Imperial College</option>
              <option value="Milestone School and College">Milestone College</option>
              <option value="Bir Srestha Munshi Abdur Rouf Public College">Bir Srestha Munshi Abdur Rouf Public College </option>
              <option value="Bir Srestha Noor Mohammad Public College">Bir Srestha Noor Mohammad Public College</option>
              <option value="Dhaka City College">Dhaka City College</option>
              <option value="BAF Shaheen School And College">BAF Shaheen School And College</option>
              </select>
              <br><br>
              Class               : <select name="classs">
              <option value=><?php echo $data[0]["class"]; ?></option>
              <option value="One">One</option>
              <option value="Two">Two</option>
              <option value="Three">Three</option>
              <option value="Four">Four</option>
              <option value="Five">Five</option>
              <option value="Six">Six </option>
              <option value="Seven">Seven</option>
              <option value="Eight">Eight</option>
              <option value="Nine">Nine</option>
              <option value="Ten">Ten</option>
              <option value="Eleven">Eleven</option>
              <option value="Twelve">Twelve</option>
              </select>
              <br><br>
              Medium              : <input type="radio" name="medium" value="Bangla Medium">Bangla Medium<br>
                       	            <input type="radio" name="medium" value="English Medium" >English Medium <br>
                       	            <input type="radio" name="medium" value="English Version">English Version<br><br>

                         <input type="submit" name="done" value=" Done" />&nbsp;&nbsp;&nbsp;<a  style="text-decoration: none" href="studentindex.php"> Submit later </a> &nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="studentindex.php"> Home<br><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>
