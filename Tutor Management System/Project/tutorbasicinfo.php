<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
  if(isset($_COOKIE["email"])){

    $sql="select * from tutorpersonalinfo where email='".$_COOKIE["email"]."'"; 
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
  <head>
    <script type="text/javascript">
         function fname(){
        var un=document.basic.name.value; 
        if(un.length<5){
         document.basic.name.style.color="red";   
         document.getElementById("iname").innerHTML=" Type Full Name";
          }
     
    else{
    document.basic.name.style.color="green";
    document.getElementById("iname").innerHTML= " √ ";
  }
}


function phn(){
  var un=document.basic.phoneno.value;
  if(un.length!=11){
    document.basic.phoneno.style.color="red";
    document.getElementById("ms").innerHTML=" Type Valid Phone Number";
  }
  else{
    document.basic.phoneno.style.color="green";
    document.getElementById("ms").innerHTML= " √ ";
  }
  }
  
  function validate(){
  var flag=true;
  var nam=document.basic.name.value;
  var bd=document.basic.dob.value;
  var loc=document.basic.location.value;
  var phon=document.basic.phoneno.value;
  var gen=document.basic.gender.value;
  var str="";
  if(nam.length==0){
    flag=false;
    str="Must type Full name";
  }
  else if(bd.length==0){
    flag=false;
    str="Must Choose DOB";
  }
  else if(loc.length==0){
    flag=false;
    str="Must Choose Address";
  }
  else if(phon.length!=11){
    flag=false;
    str="Invalid Phone Number";
  }
  else if(gen.length==0){
    flag=false;
    str="Must Choose Gender";
  }
  document.getElementById("msg").innerHTML=str;
  return flag;
}
    
  
</script>
  </head>
<form name="basic" action="checktutorbasicinfo.php" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<pre>
<h1 style="text-align:center;">Basic Personal Information </h1><hr>

                 Name     : <input onkeyup="fname()"type="text"  name="name" placeholder="Full Name" id="name" value=<?php echo  $data[0]["name"]; ?> ><span id="iname"></span><br><br>
                 DOB      : <input type="date" name="dob" placeholder="dd-mm-yyyy" value=<?php echo  $data[0]["dob"]; ?>><br><br>
                 Location : <select name="location">
  <option ><?php echo  $data[0]["location"]; ?></option>
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
<br><br>
                 Phone No : <input onkeyup="phn()" type="text" name="phoneno" placeholder="01XXXXXXXX" id="phoneno" value=<?php echo  $data[0]["phoneno"]; ?>><span id="ms"></span><br><br>
                 Gender   : <input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;<input type="radio" name="gender" value="Female">Female<br>

                        <a style="text-decoration: none" href="tutorindex.php"> Submit later&nbsp;&nbsp;&nbsp;<a style="text-decoration: none" href="tutorindex.php"> Home &nbsp;&nbsp;&nbsp;<input type="submit" name="sbt" value=" Done" onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>