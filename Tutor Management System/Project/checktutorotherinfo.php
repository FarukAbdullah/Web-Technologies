<?php
    if(empty($_REQUEST["medium"])||empty($_REQUEST["subject"])||empty($_REQUEST["status"])){
	      echo "<p style='color:red' > All the fields are Required !!";?>
	      <h3><a style="text-decoration: none" href="tutorotherinfo.php">Back</a></h3>
          <?php
}
    else if(empty($_REQUEST["subject"]))
     {
	     echo "<p style='color:red' > Must Choose Subjects";?>
	     <h3><a style="text-decoration: none" href="tutorotherinfo.php">Back</a></h3>
         <?php
     }
     else if(empty($_REQUEST["salary"]))
     {
       echo "<p style='color:red' > Must Choose Salary Range";?>
       <h3><a style="text-decoration: none" href="tutorotherinfo.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["medium"]))
     {
	     echo "<p style='color:red' > Must Choose Medium";?>
	     <h3><a style="text-decoration: none" href="tutorotherinfo.php">Back</a></h3>
         <?php
     }
   
    else if(empty($_REQUEST["status"]))
   {
	    echo "<p style='color:red' > Must Choose Status";?>
	     <h3><a style="text-decoration: none" href="tutorotherinfo.php">Back</a></h3>
         <?php
   }
  
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `tutorotherinfo` SET `medium`='".$_REQUEST["medium"]."',`subject`='".$_REQUEST["subject"]."',`salary`='".$_REQUEST["salary"]."',`status`='".$_REQUEST["status"]."' WHERE `email`='".$_COOKIE["email"]."';";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		echo "<h1> Sucessfully Updated Information </h1>";?>
	
	<a style="text-decoration: none" href="tutorindex.php"> Home </a>
       
  <?php     
   }
 
?>