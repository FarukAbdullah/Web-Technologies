<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

        $sql="select * from sms where receiver='".$_COOKIE["email"]."'";	
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
<body >	
<form name="frm" action="#" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h1 style="text-align:center;">Request From Student</h1>
<pre><?php
if(sizeof($data)>0){
            foreach($data as $v){?>
                                From    : <?php echo $v["sender"];?><br>
                                Request : <?php echo $v["sms"];?><br>
                                   <a style="text-decoration: none" href="stprofile.php?sender=<?php echo $v["sender"];?>"><?php echo "View Profile";?></a><hr/><br/> <?php
	}
}
else
{?>
	<h3 style="text-align:center;">Request is empty</h3><?php
}?> 

  
                           <h3 style="text-align:center;"><a style="text-decoration: none" href="tutorindex.php">Back</a>           <a style="text-decoration: none" href="tutorindex.php">Home</a></h3><br>


</form>
</pre>				
</td>
</tr>
</table>
</body>
</form>
</html>