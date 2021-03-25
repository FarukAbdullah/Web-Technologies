<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

   if(strlen($_REQUEST["pass"])==0 || strlen($_REQUEST["newpass"])==0 || strlen($_REQUEST["confpass"])==0)
     {
	     echo "<p style='color:red' > All fields are mandatory!";?>
	     <br><a style="text-decoration: none" href="changeinfo.php">Previous</a><br/><?php
     }
    else if($_COOKIE["pass"]!= $_REQUEST["pass"])
     {
	     echo "<p style='color:red' > Old Password must match";?>
	     <br><a style="text-decoration: none" href="changeinfo.php">Previous</a><br/><?php
     }
   else if($_REQUEST["newpass"]!= $_REQUEST["confpass"])
     {
	     echo "<p style='color:red' > Confirm Password must match";?>
	     <br><a style="text-decoration: none" href="changeinfo.php">Previous</a><br/><?php
     }
   else
     {
		
		$data=array();
		
		
		$conn = mysqli_connect("localhost", "root", "","database");
		$sql="UPDATE `login` SET `pass`='".md5($_REQUEST["newpass"])."' WHERE email='".$_COOKIE["email"]."' && pass='".md5($_REQUEST["pass"])."';";
			//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		echo "<br/>";
        echo " <h2>Updated password successfully</h2>"; ?>

        <br><a style="text-decoration: none" href="studentindex.php">Home</a><br/>

        <?php  
	}
}
else{
	header("Location:logout.php");
    }
}
?>
