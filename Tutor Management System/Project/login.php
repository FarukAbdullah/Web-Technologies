<!DOCTYPE html>
<html>
<head>
<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
function showHint(el) {
	var str=el.value;
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="<span style='color:green'>√</span>"){
				flag=true;
			}
			else{flag=false;}

		}
	};
	var url="";
	if(el.id=="email"){
		url="fetch1.php?email="+str;
	}

	xmlhttp.open("GET", url,true);
	xmlhttp.send();

}
function validate(){
	return flag;
}
</script>
</head>
<body >
<form action="server.php" method ="post" name="frm">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<h1 style="text-align:center;">Login Form</h1>
<hr>
<br>
<pre>
                      Email     : <input type="text" onkeyup="showHint(this)" name="email" placeholder="example@gmail.com" id="email"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"><span style="text-align: center" id="txtHint"></span><br>
                      Password  : <input type="password" name="pass" placeholder="Password" /><br><br>

                     <a style="text-decoration: none" href="signup.php">Do you want to Sign Up?</a>        <input <input type="submit" value="Login" name="sbt" onclick="return validate()"><br>
</pre>
<br><br><br><br><br><br>
</td>
</tr>
</table>
</body>
</form>
</html>