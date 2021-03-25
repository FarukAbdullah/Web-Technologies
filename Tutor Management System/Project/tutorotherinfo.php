<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
  if(isset($_COOKIE["email"])){

    $sql="select * from tutorotherinfo where email='".$_COOKIE["email"]."'"; 
    loadFromMySQL($sql);
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
<!DOCTYPE html>
<html>
<body >
<form action="checktutorotherinfo.php" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<pre>
	<h1 style="text-align:center;">Other Information </h1><hr>
       Interested Teaching Medium : <input type="radio" name="medium" value="Bangla Medium">Bangla Medium 
                                    <input type="radio" name="medium" value="English Medium">English Medium 
                                    <input type="radio" name="medium" value="English Version">English Version
<br><br>
       Interested Subject        :  <select name="subject">
              <option ><?php echo $data[0]["subject"]; ?></option>
              <option value="Bangla">Bangla</option>
              <option value="English">English</option>
              <option value="Science">Science</option>
              <option value="Literature">Literature</option>
              <option value="Higher Math">Higher Math</option>
              <option value="General Math">General Math</option>
              <option value="Social Science">Social Science</option>
              <option value="Religion">Religion</option>
              <option value="ICT">ICT</option>
              <option value="Biology">Biology</option>
              <option value="Economics">Economics</option>
              </select>
              <br><br>

       Expected Salary Range      :  <select name="salary">
              <option ><?php echo $data[0]["salary"]; ?></option>
              <option value="1000">>1000</option>
              <option value="1000-3000">1000-3000</option>
              <option value="3000-5000">3000-5000</option>
              <option value="5000-8000">5000-8000</option>
              <option value="8000-10000">8000-10000</option>
              <option value="10000">>10000</option>
               </select>
               <br><br>
                             
       Available Status           : <input type="radio" name="status" value="Available">Available 
                                    <input type="radio" name="status" value="Not Availabe">Not Available<br><br>

              <a style="text-decoration: none" href="tutorindex.php"> Submit later&nbsp;&nbsp;&nbsp;<input type="submit" name="done" value=" Done" />&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="tutorindex.php"> Home <br><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>