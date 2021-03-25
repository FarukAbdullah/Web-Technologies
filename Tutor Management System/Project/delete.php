<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){
		if($_SESSION["type"]=="Student"){
			$conn = mysqli_connect("localhost", "root", "","database");
		    
		    $sql1="DELETE FROM `stueducationinfo` WHERE email='".$_COOKIE["email"]."'";
		    $sql2="DELETE FROM `stupersonalinfo` WHERE email='".$_COOKIE["email"]."'";
		    $sql3="DELETE FROM `login` WHERE email='".$_COOKIE["email"]."'";
			
		    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		    $result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
		    $result3 = mysqli_query($conn, $sql3)or die(mysqli_error($conn));
		}
		else
		{
			$conn = mysqli_connect("localhost", "root", "","database");
		    
		    $sql1="DELETE FROM `tbsc` WHERE email='".$_COOKIE["email"]."'";
		    $sql2="DELETE FROM `thsc` WHERE email='".$_COOKIE["email"]."'";
		    $sql3="DELETE FROM `tmsc` WHERE email='".$_COOKIE["email"]."'";
		    $sql4="DELETE FROM `tssc` WHERE email='".$_COOKIE["email"]."'";
		    $sql5="DELETE FROM `tutorotherinfo` WHERE email='".$_COOKIE["email"]."'";
		    $sql6="DELETE FROM `tutorpersonalinfo` WHERE email='".$_COOKIE["email"]."'";
		    $sql7="DELETE FROM `login` WHERE email='".$_COOKIE["email"]."'";
		    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
		    $result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
		    $result3 = mysqli_query($conn, $sql3)or die(mysqli_error($conn));
		    $result4 = mysqli_query($conn, $sql4)or die(mysqli_error($conn));
		    $result5 = mysqli_query($conn, $sql5)or die(mysqli_error($conn));
		    $result6 = mysqli_query($conn, $sql6)or die(mysqli_error($conn));
		    $result7 = mysqli_query($conn, $sql7)or die(mysqli_error($conn));
		}


		
		echo "<br/>";
        echo "<h2>Successfully Deleted Account </h2>";   
	}
}
else{
	header("Location:logout.php");
    }

?>
<br/><h2><a style="text-decoration: none" href="signup.php">Sign up</a></h2> 
<h2> Have another account?<a style="text-decoration: none" href="login.php">Login</a></h2><br/>