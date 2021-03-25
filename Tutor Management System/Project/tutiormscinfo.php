<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from tmsc where email='".$_COOKIE["email"]."'";	
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
<head>
	<script type="text/javascript">
        
function pyear(){
	var un=document.msc.passingyear.value;
	if(un.length!=4){
		document.msc.passingyear.style.color="red";
		document.getElementById("ms").innerHTML=" Type Valid Year";
	}
	else{
		document.msc.passingyear.style.color="green";
		document.getElementById("ms").innerHTML= " √ ";
	}
	}

function deprt(){
	var unn=document.msc.dept.value;
	if(unn.length<2){
		document.msc.dept.style.color="red";
		document.getElementById("mss").innerHTML=" Type Valid Department";
	}
	else{
		document.msc.dept.style.color="green";
		document.getElementById("mss").innerHTML= " √ ";
	}
	}

	 function sub(){
	      var un=document.msc.subject.value; //document=DOM object
	      if(un.length<2){
		 document.msc.subject.style.color="red";   
		 document.getElementById("sb").innerHTML=" Type Subject";
	   }
	   
		else{
		document.msc.subject.style.color="green";
		document.getElementById("sb").innerHTML= " √ ";
	}
}

function rlt(){
	      var nun=document.msc.result.value; //document=DOM object
	      if(nun.length<1 || nun.length>4){
		 document.msc.result.style.color="red";   
		 document.getElementById("s").innerHTML=" Type Valid Result";
	   }
	   
		else{
		document.msc.result.style.color="green";
		document.getElementById("s").innerHTML= " √ ";
	}
}

function validate(){
  var flag=true;
  var nam=document.msc.uniname.value;
  var bd=document.msc.passingyear.value;
  var add=document.msc.result.value;
  var ph=document.msc.dept.value;
  var su=document.msc.subject.value;
  var str="";
  if(nam.length==0){
    flag=false;
    str="Must Choose Institution name";
  }
  else if(bd.length!=4){
    flag=false;
    str="Type Valid Passing Year";
  }
  else if(add.length<1 ||  add.length>4){
    flag=false;
    str="Must Type Valid Result";
  }
  else if(ph.length==0){
    flag=false;
    str="Must Type Department";
  }
  else if(su.length==0){
    flag=false;
    str="Must Type Subject";
  }
  
  document.getElementById("msg").innerHTML=str;
  return flag;
}

</script>
</head>
<body >
<form name="msc" action="checkmsc.php" method ="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2 style="text-align:center;"> MSC Information</h2>
<pre>
            Institute Name : <select name="uniname">
                              <option ><?php echo $data[0]["insname"]; ?></option>
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
            Passing Year   : <input onkeyup="pyear()" type="text" name="passingyear" placeholder="Type Year" id="passingyear" value=<?php echo $data[0]["passingyear"]; ?>><span id="ms"></span><br>
            Department     : <input onkeyup="deprt()" type="text" name="dept"  placeholder="Type Department" id="dept" value=<?php echo $data[0]["dept"]; ?>><span id="mss"></span><br>
            Subject        : <input onkeyup="sub()"type="text" name="subject" placeholder="Type Subject" id="subject" value=<?php echo $data[0]["subject"]; ?>><span id="sb"></span></br>
            Result         : <input onkeyup="rlt()"type="text" name="result" placeholder="0.00" id="result" value=<?php echo $data[0]["result"]; ?>><span id="s"></span></br>



                  <a style="text-decoration: none" href="tutoredu.php"> Back</a>                     <input type="submit" name="Update" value=" Update" onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>