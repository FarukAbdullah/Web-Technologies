<?php
    if(strlen($_REQUEST["phoneno"])>11 && strlen($_REQUEST["phoneno"])<10)
   {
      echo "<p style='color:red' > Invalid Phone number";?>
       <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
   }
    else if(empty($_REQUEST["name"])||empty($_REQUEST["dob"])||empty($_REQUEST["location"])||empty($_REQUEST["phoneno"])||empty($_REQUEST["gender"])){
	      echo "<p style='color:red' > All the fields are Required !!";?>
	      <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
          <?php
     }
    else if(empty($_REQUEST["name"]))
     {
	     echo "<p style='color:red' > Must Type Name";?>
	     <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["dob"]))
     {
	     echo "<p style='color:red' > Must Type Date of Birth";?>
	     <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
     }
   
    else if(empty($_REQUEST["location"]))
   {
	    echo "<p style='color:red' > Must Type Location";?>
	     <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
   }
    else if(empty($_REQUEST["phoneno"]))
   {
	    echo "<p style='color:red' > Must Type Phone number";?>
	     <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
   }
   else if(empty($_REQUEST["gender"]))
   {
	    echo "<p style='color:red' > Must Type gender";?>
	     <h3><a style="text-decoration: none" href="tutorbasicinfo.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `tutorpersonalinfo` SET `name`='".$_REQUEST["name"]."',`dob`='".$_REQUEST["dob"]."',`phoneno`='".$_REQUEST["phoneno"]."',`location`='".$_REQUEST["location"]."',`gender`='".$_REQUEST["gender"]."' WHERE `email`='".$_COOKIE["email"]."';";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		echo "<h1> Sucessfully Updated Information </h1>";?>
	
	<a style="text-decoration: none" href="tutorindex.php"> Home </a>
       
  <?php     
   }
 
?>