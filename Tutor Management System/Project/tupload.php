<?php
//print_r($GLOBALS);
session_start();
$file=fopen('pictures/tutor.txt','a') or die("fle open error");

$source=$_FILES['fileToUpload']['tmp_name'];
$target="pictures/".$_FILES['fileToUpload']['name'];
if(move_uploaded_file($source,$target)){
	echo "File uploaded:".$target."<br/>";
	$data=$_COOKIE["email"]." ".$target;
	$a=fwrite($file,$data);
	$b=fwrite($file,"\r\n");
	if($a>0 && $b>0){
		echo "<h2>Successfully Picture Uploaded</h2>";
	}
	else
	{
		echo "Must Choose Picture!!!";
	}
}
?>
<a style="text-decoration: none" href="tutorindex.php">Home </a>