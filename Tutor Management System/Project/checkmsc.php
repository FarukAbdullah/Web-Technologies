<?php
   if(empty($_REQUEST["uniname"])||empty($_REQUEST["passingyear"])||empty($_REQUEST["dept"])||empty($_REQUEST["subject"])||empty($_REQUEST["result"])){
	      echo "<p style='color:red' > All the fields are Required !!";?>
	      <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
          <?php
}
    else if(empty($_REQUEST["uniname"]))
     {
	     echo "<p style='color:red' > Must Type Institution Name";?>
	     <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
         <?php
     }
   else if(empty($_REQUEST["passingyear"]))
     {
	     echo "<p style='color:red' > Must Type Passing Year";?>
	     <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
         <?php
     }
   
    else if(empty($_REQUEST["dept"]))
   {
	    echo "<p style='color:red' > Must Type Department";?>
	     <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
         <?php
   }
    else if(empty($_REQUEST["subject"]))
   {
	    echo "<p style='color:red' > Must Type Subject";?>
	     <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
         <?php
   }
   else if(empty($_REQUEST["result"]))
   {
	    echo "<p style='color:red' > Must Type Result";?>
	     <h3><a style="text-decoration: none" href="tutormscinfo.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="UPDATE `tmsc` SET `insname`='".$_REQUEST["uniname"]."',`passingyear`='".$_REQUEST["passingyear"]."',`dept`='".$_REQUEST["dept"]."',`subject`='".$_REQUEST["subject"]."',`result`='".$_REQUEST["result"]."' WHERE email='".$_COOKIE["email"]."'";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     
		echo "<br/>";
		echo "<h1> Sucessfully Updated MSC Information </h1>";?>
	
	<a style="text-decoration: none" href="tutoredu.php"> Back </a>
       
  <?php     
   }
 
?>