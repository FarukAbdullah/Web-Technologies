<?php
    if(empty($_REQUEST["name"]))
     {
	     echo "<p style='color:red' > Must Type Full Name";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["dob"]))
     {
	     echo "<p style='color:red' > Must Choose Data of Birth";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
     }
     else if(empty($_REQUEST["address"]))
   {
	    echo "<p style='color:red' > Must choose Address";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
   }
   else if(empty($_REQUEST["phoneno"]))
   {
	    echo "<p style='color:red' > Must Type phone Number";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
   }
   else if(strlen($_REQUEST["phoneno"])<10 && strlen($_REQUEST["phoneno"])> 12)
   {
	    echo "<p style='color:red' > Invalid phone Number";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
   }
   
    else if(empty($_REQUEST["gender"]))
   {
	    echo "<p style='color:red' > Must choose Gender";?>
	     <h3><a style="text-decoration: none" href="studentperinfo.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `stupersonalinfo` SET `name`='".$_REQUEST["name"]."',`dob`='".$_REQUEST["dob"]."',`address`='".$_REQUEST["address"]."',`phoneno`='".$_REQUEST["phoneno"]."',`gender`='".$_REQUEST["gender"]."' WHERE email='".$_COOKIE["email"]."'";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		
		echo "<h1> Sucessfully Updated Personal Information </h1>";
       //header("Location:studentindex.php");
		?>
	
	<a style="text-decoration: none" href="studentindex.php"> Home </a>
  <?php     
   }
 
?>