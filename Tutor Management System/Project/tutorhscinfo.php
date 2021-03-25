<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from thsc where email='".$_COOKIE["email"]."'";	
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
	var un=document.hsc.passingyear.value;
	//var unn=document.bsc.passingyear.value; //document=DOM object
	if(un.length!=4){
		document.hsc.passingyear.style.color="red";
		document.getElementById("ms").innerHTML=" Type Valid Year";
	}
	else{
		document.hsc.passingyear.style.color="green";
		document.getElementById("ms").innerHTML= " √ ";
	}
	}


function rlt(){
	      var nun=document.hsc.result.value; //document=DOM object
	      if(nun.length<1 || nun.length>4){
		 document.hsc.result.style.color="red";   
		 document.getElementById("s").innerHTML=" Type Valid Result";
	   }
	   
		else{
		document.hsc.result.style.color="green";
		document.getElementById("s").innerHTML= " √ ";
	}
}

function validate(){
  var flag=true;
  var nam=document.hsc.insname.value;
  var bd=document.hsc.passingyear.value;
  var add=document.hsc.result.value;
  var phon=document.hsc.board.value;
  var fr=document.hsc.fourthsub.value;
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
  else if(phon.length==0){
    flag=false;
    str="Must Choose Board";
  }
  else if(gen.length==0){
    flag=false;
    str="Must Choose Gender";
  }
  else if(fr.length==0){
    flag=false;
    str="Must Choose Fourth Subject";
  }
  document.getElementById("msg").innerHTML=str;
  return flag;
}

</script>
</head>
<body >
<form  name="hsc" action="checkhsc.php" method ="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2 style="text-align:center;"> HSC Information</h2>
<pre>
	
            Institute Name : <select onkeyup="insname()" name="insname" id="iname" placeholder="Select One">
                    <option  >  <?php echo $data[0]["insname"]; ?></option>
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
            Passing Year   : <input onkeyup="pyear()" type="text" name="passingyear" placeholder="Type Year" id="passingyear" value=<?php echo $data[0]["passingyear"]; ?>><span id="ms"></span></br>
            Board          : <select name ="board"placeholder="Choose Board">
                <option ><?php echo $data[0]["board"]; ?></option>
                <option value="Barisal">Barisal</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Comilla">Comilla</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Dinajpur">Dinajpur</option>
                <option value="Jessore">Jessore</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                </select>
                </br>
            Fourth Subject : <select name ="fourthsub"placeholder="Type Fourth Subject">
                <option ><?php echo $data[0]["fourthsub"]; ?></option>
                <option value="Higher Math">Higher Math</option>
                <option value="Biology">Biology</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Others">Others</option>
                </select>
                </br>
            Result         : <input onkeyup="rlt()"type="text" name="result" placeholder="0.00" id="result" value=<?php echo $data[0]["result"]; ?>><span id="s"></span></br>


                            <a style="text-decoration: none" href="tutoredu.php"> Back</a>          <input type="submit" name="Update" value=" Update" onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>