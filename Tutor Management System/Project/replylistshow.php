<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

        $sql="select * from sms where sender='".$_COOKIE["email"]."'";	
		loadFromMySQL($sql);

		if(isset($_POST['notinter'])){

		$sql="DELETE FROM `sms` WHERE receiver='".$data[0]["receiver"]."'and sender='".$_COOKIE["email"]."' ";
	    ExecuteQuery($sql);
		header("Location:tutorindex.php");
	}

		
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
<!DOCTYPE>
<html>
<body style="text-align:center;">	
<form name="frm" action="#" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h1 style="text-align:center;">Reply List</h1><hr/>
<pre><?php
if(sizeof($data)>0){
            foreach($data as $v){?>
                                To    : <?php echo $v["receiver"];?><br>
                                Reply : <?php echo $v["sms"];?><br>
                                        <input type="submit" name="notinter" value="Delete" /><hr/> <?php
	}
}
else
{?>
	<h3 style="text-align:center;">Reply is empty</h3><?php
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