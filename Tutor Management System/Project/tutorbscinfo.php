<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from tbsc where email='".$_COOKIE["email"]."'";	
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
         function insname(){
	      var un=document.bsc.insname.value; //document=DOM object
	      if(empty(un)){
		 document.bsc.insname.style.color="red";   
		 document.getElementById("iname").innerHTML="Must Choose Institution Name";
	   }
	   
		else{
		document.bsc.insname.style.color="green";
		document.getElementById("iname").innerHTML= " √ ";
	}
}


function pyear(){
	var un=document.bsc.passingyear.value;
	//var unn=document.bsc.passingyear.value; //document=DOM object
	if(un.length!=4){
		document.bsc.passingyear.style.color="red";
		document.getElementById("ms").innerHTML=" Type Valid Year";
	}
	else{
		document.bsc.passingyear.style.color="green";
		document.getElementById("ms").innerHTML= " √ ";
	}
	}

function deprt(){
	var unn=document.bsc.dept.value;
	//var unn=document.bsc.passingyear.value; //document=DOM object
	if(unn.length<2){
		document.bsc.dept.style.color="red";
		document.getElementById("mss").innerHTML=" Type Valid Department";
	}
	else{
		document.bsc.dept.style.color="green";
		document.getElementById("mss").innerHTML= " √ ";
	}
	}
function rlt(){
	      var nun=document.bsc.result.value; //document=DOM object
	      if(nun.length<1 || nun.length>4){
		 document.bsc.result.style.color="red";   
		 document.getElementById("s").innerHTML=" Type Valid Result";
	   }
	   
		else{
		document.bsc.result.style.color="green";
		document.getElementById("s").innerHTML= " √ ";
	}
}

function validate(){
  var flag=true;
  var nam=document.bsc.uniname.value;
  var bd=document.bsc.passingyear.value;
  var add=document.bsc.result.value;
  var ph=document.bsc.dept.value;
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
  
  document.getElementById("msg").innerHTML=str;
  return flag;
}

</script>
</head>
<body >
<form  name="bsc" action="checkbsc.php" method ="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2 style="text-align:center;"> BSC Information</h2>
<pre>

                 Institute Name : <select onkeyup="insname()" name="uniname" id="iname" placeholder="Select One">
                                 <option  >  <?php echo $data[0]["insname"]; ?></option>
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
                                 </select><span id="iname"></span>
                                 <br>
                 Passing Year   : <input onkeyup="pyear()" type="text" name="passingyear" placeholder="Type Year" id="passingyear" value=<?php echo $data[0]["passingyear"]; ?>><span id="ms"></span><br>
                 Department     : <input onkeyup="deprt()" type="text" name="dept"  placeholder="Type Department" id="dept" value=<?php echo $data[0]["dept"]; ?>><span id="mss"></span><br>
                 Result         : <input onkeyup="rlt()"type="text" name="result" placeholder="0.00" id="result" value=<?php echo $data[0]["result"]; ?>><span id="s"></span></br>

                        <a style="text-decoration: none" href="tutoredu.php"> Back</a>              <input type="submit" name="Update" value=" Update" onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</td>
</tr>
</table>
</body>
</form>
</html>
