<?php
$dataSource="mysql";

function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","database");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}

function loadFromText(){
	global $data;
	$myfile = fopen("cred.txt", "r") or die("Unable to open file!");
	$data=array();
	while($line=fgets($myfile)) {	// read all lines until end-of-file
		$ar=explode(" ",$line);
		$data[]=array("id"=>$ar[0],"uname"=>$ar[1],"pass"=>$ar[2],"email"=>$ar[3]);
	}
	//print_r($auth);
}
function loadFromXML(){
	global $data;
	$data=array();
	$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");

	foreach($xml->user as $st){
		$ar=array();
		$ar["id"]=(string)$st->id;
		$ar["uname"]=(string)$st->uname;
		$ar["pass"]=(string)$st->pass;
		$ar["email"]=(string)$st->email;
		$data[]=$ar;
	}
	//print_r($auth);
}

function ExecuteQuery($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","database");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
}

function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data[]=$row;
	}
}
function loadFromMySQL1($sql){
	global $data1;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data1[]=$row;
	}
}
function loadFromMySQL2($sql){
	global $data2;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data2[]=$row;
	}
}
function loadFromMySQL3($sql){
	global $data3;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data3[]=$row;
	}
}
function loadFromMySQL4($sql){
	global $data4;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data4[]=$row;
	}
}
function loadFromMySQL5($sql){
	global $data5;
	$conn = mysqli_connect("localhost", "root", "","database");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		$ar=array();
		$data5[]=$row;
	}
}
?>