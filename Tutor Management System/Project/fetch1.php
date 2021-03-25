<?php
$data=array();

include("database.php");
if(isset($_REQUEST["email"])){
	$sql="select * from login where email='".$_REQUEST["email"]."'";
	loadFromMySQL($sql);
	if(sizeof($data)>0){
		echo "<span style='color:green'>√</span>";
	}
	else{
		echo "<p style='color:red'>Invalid Mail. Please sign up if you are a new member.</p>";
	}
}
?>