<?php
$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");
   if(strlen($_REQUEST["email"])==0 || strlen($_REQUEST["pass"])==0|| empty($_REQUEST["type"]))
     {
	     echo " <p style='color:red' > All fields are mandatory!";?>
	     <h3><a style="text-decoration: none" href="signup.php">Back</a></h3>
         <?php
     }
   else if($_REQUEST["pass"]!= $_REQUEST["conpass"])
     {
	     echo "<p style='color:red' > Passwords must match";?>
	     <h3><a style="text-decoration: none" href="signup.php">Back</a></h3>
         <?php
     }
   else if($atPos>$dotPos)
   {
	    echo "<p style='color:red' > Invalid Email";?>
	     <h3><a style="text-decoration: none" href="signup.php">Back</a></h3>
         <?php
   }
    else if(empty($_REQUEST["type"]))
   {
	    echo "<p style='color:red' > Must choose Type";?>
	     <h3><a style="text-decoration: none" href="signup.php">Back</a></h3>
         <?php
   }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","database");
	   $sql="INSERT INTO login (email, pass, type,status) VALUES ('".$_REQUEST["email"]."', '".md5($_REQUEST["pass"])."', '".$_REQUEST["type"]."','inactive');";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

     if($_REQUEST["type"]=="Student"){
           $sql1="INSERT INTO stueducationinfo (email) VALUES ('".$_REQUEST["email"]."');";
           $sql2="INSERT INTO stupersonalinfo (email) VALUES ('".$_REQUEST["email"]."');";
           $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
           $result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
        }
        else
        {
         $sql1="INSERT INTO tbsc (email) VALUES ('".$_REQUEST["email"]."');";
         $sql2="INSERT INTO thsc (email) VALUES ('".$_REQUEST["email"]."');";
         $sql3="INSERT INTO tmsc (email) VALUES ('".$_REQUEST["email"]."');";
         $sql4="INSERT INTO tssc (email) VALUES ('".$_REQUEST["email"]."');";
         $sql5="INSERT INTO tutorotherinfo (email) VALUES ('".$_REQUEST["email"]."');";
         $sql6="INSERT INTO tutorpersonalinfo (email) VALUES ('".$_REQUEST["email"]."');";
    
        $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));
        $result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
        $result3 = mysqli_query($conn, $sql3)or die(mysqli_error($conn));
        $result4 = mysqli_query($conn, $sql4)or die(mysqli_error($conn));
        $result5 = mysqli_query($conn, $sql5)or die(mysqli_error($conn));
        $result6 = mysqli_query($conn, $sql6)or die(mysqli_error($conn));
       }

		echo "<br/>";
        echo " <h2>Successfully Sign up ".$_REQUEST["email"]."As a ".$_REQUEST["type"]."</h2>";
        echo " <h2>Wait at least 24 hours for activation </h2>";
   }
 
?>
<h3><a style="text-decoration: none" href="index.html">Home</a></h3>