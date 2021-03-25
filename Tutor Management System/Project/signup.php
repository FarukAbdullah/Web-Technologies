<!DOCTYPE html>
<html>
<script type="text/javascript">
function validate(){
	var flag=true;
	var pass=document.frm.pass.value;
	var conpass=document.frm.conpss.value;
	var type=document.frm.type.value;
	var email=document.frm.email.value;
	
    if(type.length==0){
		flag=false;
		str="Please choose Type !";
	}
	else if(pass.length<5){
		flag=false;
		str="Provide Strong Password !";
	}
	else if(pass!=cpass){
		flag=false;
		str="Passworods must match";
	}
	else if(email.indexOf("@")<1){
		flag=false;
		str="Invalid email";
	}
	
	document.getElementById("msg").innerHTML=str;
	return flag;
}
	
	function password(){
	var un=document.frm.pass.value; //document=DOM object
	if(un.length<5){
		document.frm.pass.style.color="red";
		document.getElementById("msg1").innerHTML="Provide Strong Password";
	}
	else{
		document.frm.pass.style.color="green";
		document.getElementById("msg1").innerHTML= " √ ";
	}
	}
	function cpassword(){
	var un=document.frm.conpass.value;
	var unn=document.frm.pass.value; //document=DOM object
	if(un!=unn){
		document.frm.conpass.style.color="red";
		document.getElementById("ms").innerHTML="Must Match Password";
	}
	else{
		document.frm.conpass.style.color="green";
		document.getElementById("ms").innerHTML= " √ ";
	}
	}
	
	function Type(){
	var un=document.frm.type.value; //document=DOM object
	if(un.length<0){
		document.frm.type.style.color="red";
		//document.frm.gender.style.border="1px solid red";
		document.getElementById("msg3").innerHTML="Choose Type";
	}
	else{
		document.frm.type.style.color="green";
		document.getElementById("msg3").innerHTML=" √";
	}
	}

var xmlhttp = new XMLHttpRequest();
var flag=true;
function showHint(el) {
	var str=el.value;
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="<p style='color:red'>Email is already used. You cannot use it!!!</p>"){
				flag=false;
			}
			else{flag=true;}

		}
	};
	var url="";
	if(el.id=="email"){
		url="fetch.php?email="+str;
	}

	xmlhttp.open("GET", url,true);
	xmlhttp.send();

}
function validate(){
	return flag;
}
</script>
</head>
<body>
<form action="registration.php"  method="post" name= "frm">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h1 style="text-align: center">Sign Up Form </h1><hr>
<pre>

                E-Mail           : <input type="text" onkeyup="showHint(this)" name="email" placeholder="example@gmail.com" id="email"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"><span style="text-align: center" id="txtHint"></span><br>
                Password         : <input onkeyup="password()" type="password" name="pass" placeholder="Password" id="pass"> <span id="msg1"></span> <br>
                Confirm Password : <input onkeyup="cpassword()" type="password" name="conpass" placeholder="Confirm Password" id="conpass"> <span id="ms"></span> <br>
                                   <input onkeyup="Type()" type="radio" name="type" value="Tutor" id="typ"> Tutor &nbsp;&nbsp;&nbsp;&nbsp;<input onkeyup="Type()" type="radio" name="type" value="Student" id="typ"> Student<br> <span id="msg3"></span> <br/>

 
         <a style="text-decoration: none" href="index.html">Home</a>     <a style="text-decoration: none" href="login.php">Do you want to login?</a>      <input type="submit" onclick="return validate()" name="sbt" value="Confirm" /><br> </p>
			<span id="msg"></span>
</pre>

</td>
</tr>
</table>
</form>
</body>
</html>