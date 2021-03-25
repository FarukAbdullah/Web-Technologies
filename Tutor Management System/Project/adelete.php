<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		if($_SESSION["type"]=="Student")
		{					    
		    $sql1="DELETE FROM `stueducationinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql2="DELETE FROM `stupersonalinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql3="DELETE FROM `login` WHERE email='".$_REQUEST["email"]."'";
			
		    ExecuteQuery($sql1);
		    ExecuteQuery($sql2);
		    ExecuteQuery($sql3);		    
		    echo "<h2>Successfully Deleted Account </h2>";  
		}

		if($_SESSION["type"]=="Tutor")
		{		   
		    $sql1="DELETE FROM `tbsc` WHERE email='".$_REQUEST["email"]."'";
		    $sql2="DELETE FROM `thsc` WHERE email='".$_REQUEST["email"]."'";
		    $sql3="DELETE FROM `tmsc` WHERE email='".$_REQUEST["email"]."'";
		    $sql4="DELETE FROM `tssc` WHERE email='".$_REQUEST["email"]."'";
		    $sql5="DELETE FROM `tutorotherinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql6="DELETE FROM `tutorpersonalinfo` WHERE email='".$_REQUEST["email"]."'";
		    $sql7="DELETE FROM `login` WHERE email='".$_REQUEST["email"]."'";
		    ExecuteQuery($sql1);
		    ExecuteQuery($sql2);
		    ExecuteQuery($sql3);
		    ExecuteQuery($sql4);
		    ExecuteQuery($sql5);
		    ExecuteQuery($sql6);
		    ExecuteQuery($sql7);

		    echo "<h2>Successfully Deleted Account </h2>";  
		}
         
	}
}
else{
	header("Location:logout.php");
    }

?>
<br/><h2><a style="text-decoration: none" href="adminindex.php">Home</a></h2> 
<br/>