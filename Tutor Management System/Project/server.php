<?php
	$conn = mysqli_connect("localhost", "root", "","database");
	$sql="select * from login where email='".$_REQUEST["email"]."'";
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		
		$temp["email"]=$row["email"];
		$temp["pass"]=$row["pass"];
		$temp["type"]=$row["type"];
		$temp["status"]=$row["status"];
		
	}
	
$flag=0;
session_start();
     if(strlen($_REQUEST["email"]) !=0 && strlen($_REQUEST["pass"]) !=0 )
       {
	     if($_REQUEST["email"]==$temp["email"])
	     {
	     	if(md5($_REQUEST["pass"])==$temp["pass"])
	     	{
	    	    if($temp["status"]=="active")
	    	     {
		           echo "Login success";
		           $_SESSION["valid"]="yes";
		           $_SESSION["type"]=$temp["type"];	
                   setcookie("email",$_REQUEST["email"],time()+5000*99);
                   setcookie("pass",$_REQUEST["pass"],time()+5000*99);
		           $_COOKIE["email"]=$_REQUEST["email"];
		           $_COOKIE["pass"]=$_REQUEST["pass"];
	               $flag=1;
	              }
	            else
	     	      {
	     		  echo "<h3><p style='color:red'>Account needs to be activated!!!</p></h3>";?>
	              <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
                  <?php
	     	      }
               }
               else
	     	      {
	     		  echo "<h3><p style='color:red'>Provide correct Password !!!</p></h3>";?>
	              <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
                  <?php
	     	      }
           }
           else
	     	      {
	     		  echo "<h3><p style='color:red'>Provide correct Email !!!</p></h3>";?>
	              <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
                  <?php
	     	      }
      }
     else
     {
     	echo "<h3><p style='color:red'> All the fields are required !!!</p></h3><br/>";?>
	          <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
              <?php
     }

if($flag==1){


	if($_SESSION["type"]=="admin")
	{
	    header("Location:adminindex.php");
	}
	else if($_SESSION["type"]=="Student")
	{
	    header("Location:studentindex.php");
	}
	else if($_SESSION["type"]=="Tutor")
	{
	   header("Location:tutorindex.php");
	}
	else
	{
		header("Location:logout.php");
	}
}
?>