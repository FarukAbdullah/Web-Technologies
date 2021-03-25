<?php
$data=array();
include("database.php");
if(isset($_REQUEST["email"])){
	$sql="select * from login where email='".$_REQUEST["email"]."'";
	loadFromMySQL($sql);
	if(sizeof($data)>0)
		echo "<p style='color:red'>Email is already used. You cannot use it!!!</p>";
	else
		echo "<span style='color:green'>√</span>";
}
?>