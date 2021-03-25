<?php
   if(empty($_REQUEST["insname"])||empty($_REQUEST["passingyear"])||empty($_REQUEST["board"])||empty($_REQUEST["result"])){
	      echo "<p style='color:red' > All the fields are Required !!";?>
	      <h3><a style="text-decoration: none" href="tutorsscinfo.php">Back</a></h3>
          <?php
}
    else if(empty($_REQUEST["insname"]))
     {
	     echo "<p style='color:red' > Must Type Institution Name";?>
	     <h3><a style="text-decoration: none" href="tutorsscinfo.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["passingyear"]))
     {
	     echo "<p style='color:red' > Must Type Passing Year";?>
	     <h3><a style="text-decoration: none" href="tutorsscinfo.php">Back</a></h3>
         <?php
     }
   
    else if(empty($_REQUEST["board"]))
   {
	    echo "<p style='color:red' > Must Type Board";?>
	     <h3><a style="text-decoration: none" href="tutorsscinfo.php">Back</a></h3>
         <?php
   }
   else if(empty($_REQUEST["result"]))
   {
	    echo "<p style='color:red' > Must Type Result";?>
	     <h3><a style="text-decoration: none" href="tutorsscinfo.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `tssc` SET `insname`='".$_REQUEST["insname"]."',`passingyear`='".$_REQUEST["passingyear"]."',`board`='".$_REQUEST["board"]."',`result`='".$_REQUEST["result"]."' WHERE email='".$_COOKIE["email"]."'";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		echo "<h1> Sucessfully Updated SSC Information </h1>";?>
	
	<a style="text-decoration: none" href="tutoredu.php"> Back </a>
       
  <?php     
   }
 
?>