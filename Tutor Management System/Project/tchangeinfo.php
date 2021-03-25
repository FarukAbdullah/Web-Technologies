<!DOCTYPE html>
<html>
<body >
	<head>
		<script type="text/javascript">

			function opassword(){
	          var un=document.frm.pass.value; //document=DOM object
	          if($_COOKIE["pass"]!= un){
		        document.frm.pass.style.color="red";
		        document.getElementById("ol").innerHTML="Must match Old Password";
	       }
	    else{
		    document.frm.pass.style.color="green";
		          document.getElementById("ol").innerHTML= " √ ";
	     }
	  }

			function npassword(){
	           var un=document.frm.newpass.value; //document=DOM object
	           if(un.length<5){
		           document.frm.newpass.style.color="red";
		           document.getElementById("ns").innerHTML="Provide Strong Password";
	          }
	          else{
		          document.frm.newpass.style.color="green";
		          document.getElementById("ns").innerHTML= " √ ";
	               }
	        }

	        function cpassword(){
	          var un=document.frm.confpass.value;
	          var unn=document.frm.newpass.value; //document=DOM object
	          if(un!=unn){
		            document.frm.confpass.style.color="red";
		            document.getElementById("ms").innerHTML="Must Match Password";
	                 }
	              else{
		             document.frm.confpass.style.color="green";
		              document.getElementById("ms").innerHTML= " √ ";
	                    }
	                }

	                 function validate(){
                            var flag=true;
                            var olp=document.frm.pass.value;
                            var np=document.frm.newpass.value;
                            var cnp=document.frm.confpass.value;
                            var str="";
                             
                            if(np.length<5){
                                 flag=false;
                                 str="Type Strong Password";
                                 }
     
                            else if(np!=cnp){
                                 flag=false;
                                  str="Must Match Password";
                                 }
                            else if(olp==0){
                                 flag=false;
                                  str="Enter old password";
                                 }
                            else if(np==0){
                                 flag=false;
                                  str="Enter new password";
                                 }
                            else if(cnp==0){
                                 flag=false;
                                  str="Enter confirm new password";
                                 }
                            document.getElementById("msg").innerHTML=str;
                            return flag;
                        }
	
	
		</script>
	</head>
<form name="frm" action="tupdateinfo.php" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="50%">
<tr>
<td>
<pre>
<h1 style="text-align:center;">Update Your Information Here</h1><hr>
<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from login where email='".$_COOKIE["email"]."'";	
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

              Email            : <input type="text" name="email" value=<?php echo $data[0]["email"]; ?> disabled="disabled"><br/>
              Old Password     : <input onkeyup="opassword()" type="password" name="pass" placeholder="Old Password" id="pass"> <span id="ol"></span><br>
              New Password     : <input onkeyup="npassword()" type="password" name="newpass" placeholder="New Password" id="newpass"> <span id="ns"></span> <br>
              Confirm Password : <input onkeyup="cpassword()" type="password" name="confpass" placeholder="Confirm Password" id="confpass"> <span id="ms"></span> <br>
<br>
                         <a style="text-decoration: none" href="tutorindex.php">Back</a>                       <input type="submit" name="sbt" value="Confirm Edit" onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</form>
</form>

</pre>				
</td>
</tr>
</table>
</body>
</form>
</html>