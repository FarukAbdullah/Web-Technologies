<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
  if(isset($_COOKIE["email"])){
?>
<!DOCTYPE html>
<html>
<body style="text-align:center;">

<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h1> Provide Your Educational Information</h1><hr><br>

<a style="text-decoration: none" href ="tutorsscinfo.php" >SSC Infomation</a><br>
<a style="text-decoration: none" style="text-decoration: none"href ="tutorhscinfo.php">HSC Infomation</a><br>
<a style="text-decoration: none" href ="tutorbscinfo.php">BSC Information</a><br>
<a style="text-decoration: none" href ="tutiormscinfo.php">MSC Information</a><br>
<br>
<pre>
         <a style="text-decoration: none" style="text-decoration: none" href="tutorindex.php">Do later </a>      <a style="text-decoration: none" style="text-decoration: none" href="tutorindex.php"> Home </a> <br>
</pre>
</td>
</tr>
</table>
</body>
</html>
<?php
  }
  else 
  {
    echo "<h1 style='color:red'>Session time out</h1>";?>
    <h2> You want to Login again?&nbsp;&nbsp;
    <a style="text-decoration: none" href="login.php">Login</a></h2>
    <?php
    
  }
}
else{
  header("Location:logout.php");
}
?>