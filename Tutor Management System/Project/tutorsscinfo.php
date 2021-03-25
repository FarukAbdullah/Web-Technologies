<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from tssc where email='".$_COOKIE["email"]."'";	
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
<script type="text/javascript">
        function insnm(){
	      var un=document.ssc.insname.value; //document=DOM object
	      if(un.length<6){
		 document.ssc.insname.style.color="red";   
		 document.getElementById("nm").innerHTML=" Type Full Name of Institution";
	   }
	   
		else{
		document.ssc.insname.style.color="green";
		document.getElementById("nm").innerHTML= " √ ";
	}
}

function pyear(){
	var un=document.ssc.passingyear.value;
	if(un.length!=4){
		document.ssc.passingyear.style.color="red";
		document.getElementById("ms").innerHTML=" Type Valid Year";
	}
	else{
		document.ssc.passingyear.style.color="green";
		document.getElementById("ms").innerHTML= " √ ";
	}
	}

function brd(){
	var unn=document.ssc.board.value;
	if(unn.length<4){
		document.msc.board.style.color="red";
		document.getElementById("mss").innerHTML=" Choose Board";
	}
	else{
		document.ssc.board.style.color="green";
		document.getElementById("mss").innerHTML= " √ ";
	}
	}

function rlt(){
	      var nun=document.ssc.result.value; //document=DOM object
	      if(nun.length<1 || nun.length>4){
		 document.ssc.result.style.color="red";   
		 document.getElementById("s").innerHTML=" Type Valid Result";
	   }
	   
		else{
		document.ssc.result.style.color="green";
		document.getElementById("s").innerHTML= " √ ";
	}
}

function validate(){
  var flag=true;
  var nam=document.ssc.insname.value;
  var bd=document.ssc.passingyear.value;
  var add=document.ssc.result.value;
  var phon=document.ssc.board.value;
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
  document.getElementById("msg").innerHTML=str;
  return flag;
}

</script>
</head>
<body >
<form name ="ssc" action="checkssc.php" method ="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h2 style="text-align:center;"> SSC Information </h2>
<pre>

                 Institute Name : <input onkeyup="insnm()" type="text" name="insname" placeholder="Type Institute Name" id="insname" value=<?php echo $data[0]["insname"]; ?>> <span id="nm"></span><br>
                 Passing Year   : <input onkeyup="pyear()" type="text" name="passingyear" placeholder="Type Year" id="passingyear" value=<?php echo $data[0]["passingyear"]; ?>><span id="ms"></span><br>
                 Result         : <input onkeyup="rlt()" type="text" name="result" placeholder="0.00" id="result" value=<?php echo $data[0]["result"]; ?>><span id="s"></span></br>
                 Board          : <select name ="board" placeholder="Choose Board" onkeypress="" ="rlt()>
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
                                  </select><span id="mss"></span>
                                  <br>
</br>

                          <a style="text-decoration: none" href="tutoredu.php"> Back</a>                    <input type="submit" name="ok" value=" OK"  onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</pre>
</td>
</tr>
</table>
</body>
</form>
</html>