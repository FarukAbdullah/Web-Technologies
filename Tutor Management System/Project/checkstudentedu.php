<?php
    if(empty($_REQUEST["insname"]))
     {
	     echo "<p style='color:red' > Must Choose Institution Name";?>
	     <h3><a style="text-decoration: none" href="studentedu.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["classs"]))
     {
	     echo "<p style='color:red' > Must Choose Class";?>
	     <h3><a style="text-decoration: none" href="studentedu.php">Back</a></h3>
         <?php
     }
   
    else if(empty($_REQUEST["medium"]))
   {
	    echo "<p style='color:red' > Must choose Medium";?>
	     <h3><a style="text-decoration: none" href="studentedu.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `stueducationinfo` SET `insname`='".$_REQUEST["insname"]."',`class`='".$_REQUEST["classs"]."',`medium`='".$_REQUEST["medium"]."' WHERE email='".$_COOKIE["email"]."'";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		
		echo "<h1> Sucessfully Updated Educational Information </h1>";
       //header("Location:studentindex.php");
		?>
	
	<a style="text-decoration: none" href="studentindex.php"> Home </a>
  <?php     
   }
 
?>