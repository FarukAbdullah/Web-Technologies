<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
  if(isset($_COOKIE["email"])){

    if(isset($_POST['search'])){

    $sql="SELECT  p.email
               FROM  tutorpersonalinfo p
               INNER JOIN tutorotherinfo o ON o.email = p.email
               INNER JOIN thsc h ON h.email = p.email
               INNER JOIN tbsc b ON b.email = p.email
               INNER JOIN tmsc m ON m.email = p.email
               WHERE p.location ='" .$_REQUEST["location"]. "' or o.subject ='".$_REQUEST["subject"]."' or o.salary='".$_REQUEST["salary"]."' or p.gender='".$_REQUEST["gender"]."' or o.medium='".$_REQUEST["medium"]."' or h.insname='".$_REQUEST["insname"]."' or b.insname='".$_REQUEST["uniname"]."' or m.insname='".$_REQUEST["uniname"]."';";
    loadFromMySQL($sql);
    //print_r($data);
    
    }   
  } 
  else 
  {
    echo "<h1 style='color:red'>Session time out</h1>";?>
    <h2> You want to Login again?&nbsp;&nbsp;<a style="text-decoration: none" href="login.html">Login</a></h2>
    <?php   
  }
}
else
{
  header("Location:logout.php");
}
?>
<!DOCTYPE html>
<html>
<body >
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<form method="post" action="#">
<h1 style="text-align:center;">Search Your Tutor</h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="studentindex.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="logout.php">Log Out</a>
<hr>
<pre>

              Location       : <select name="location">
                               <option value="0">Select One</option>
                               <option value="Abdullahpur">Abdullahpur</option>
                               <option value="Badda">Badda</option>
                               <option value="Banani">Banani</option>
                               <option value="Banasree">Banasree</option>
                               <option value="Baridhara">Baridhara</option>
                               <option value="Basundhara">Basundhara</option>
                               <option value="Dhanmondi">Dhanmondi</option>
                               <option value="Gulshan">Gulshan</option>
                               <option value="Motijheel">Motijheel</option>
                               <option value="Rampura">Rampura</option>
                               <option value="Shantinagar">Shantinagar</option>
                               <option value="Uttara">Uttara</option>
                               <option value="Rajarbag Police Line">Rajarbag Police Line</option>
                               </select>
                               <br>
              Subject        : <select name="subject">
                               <option value="0">Select One</option>
                               <option value="Bangla">Bangla</option>
                               <option value="English">English</option>
                               <option value="General Math">General Math</option>
                               <option value="Higher Math">Higher Math</option>
                               <option value="Biology">Biology</option>
                               <option value="Physics">Physics</option>
                               <option value="Chemistry">Chemistry</option>
                               <option value="ICT">ICT</option>
                               <option value="Social Science">Social Science</option>
                               <option value="General Science">General Science</option>
                               </select>
                               <br>
              Salary Range   : <select name="salary">
                               <option >Select One</option>
                               <option value="1000">1000</option>
                               <option value="1000-3000">1000-3000</option>
                               <option value="3000-5000">3000-5000</option>
                               <option value="5000-8000">5000-8000</option>
                               <option value="8000-10000">8000-10000</option>
                               <option value="10000">10000</option>
                               </select>
                               <br>
              Gender         : <select name="gender">
                               <option >Select One</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                               <option value="Others">Others</option>
                               </select>
                               <br>              
              Medium         : <select name="medium">
                               <option >Select One</option>
                               <option value="Bangla Medium">Bangla Medium</option>
                               <option value="English Medium">English Medium</option>
                               <option value="English Version">English Version</option>
                               </select>
                               <br>
<hr><h3 style="text-align:center;">Educational Qualification</h3><hr>
              College     : <select name="insname">
                            <option value="0">Select One</option>
                            <option value="Notredam College">Notredam College</option>
                            <option value="Viqarunisa Noon School & College">Viqarunisa Noon School & College</option>
                            <option value="Rajuk Uttara Model College">Rajuk Uttara Model College</option>
                            <option value="Dhaka Imperial College">Dhaka Imperial College</option>
                            <option value="Milestone College">Milestone College</option>
                            <option value="Bir Srestha Munshi Abdur Rouf Public College">Bir Srestha Munshi Abdur Rouf Public College </option>
                            <option value="Bir Srestha Noor Mohammad Public College">Bir Srestha Noor Mohammad Public College</option>
                            <option value="Dhaka City College">Dhaka City College</option>
                            <option value="BAF Shaheen College">BAF Shaheen College</option>
                            </select>
                            <br>
              University  : <select name="uniname">
                            <option value="0">Select One</option>
                            <option value="American International University-Bangladesh(AIUB)">American International University-Bangladesh(AIUB)</option>
                            <option value="North South University(NSU)">North South University(NSU)</option>
                            <option value="BRAC University">BRAC University</option>
                            <option value="Bangladesh University of Technology(BUET)">Bangladesh University of Technology(BUET)</option>
                            <option value="Dhaka Universit">Dhaka University</option>
                            <option value="Dhaka Medical College">Dhaka Medical College</option>
                            <option value="National University">National University</option>
                            <option value="Jagannath University">Jagannath University</option>
                            <option value="Independent University Bangladesh">Independent University Bangladesh</option>
                            <option value="United International University">United International University</option>
                            <option value="Daffodil International University">Daffodil International University </option>
                            <option value="Others University">Others University</option>
                            </select>
                            <br>

                                           <input type="submit" name="search" value="Search">

</pre>
</form>
</td>
</tr>
<tr style="text-align:center;">
  <td>
    <?php
    if(isset($_POST['search'])){
    if(sizeof($data)>0)
    {
    foreach($data as $v)
        {?>
           <h2><a style="text-decoration: none" href="serprofille.php?email=<?php echo $v["email"];?>"><?php echo $v["email"];?></a></h2><br/>
            <?php
        }
        }
        else
        {
          echo "<h3> No data found</h3>";
        } 
        } ?>
  </td>
</tr>
</table>
</body>
</html>