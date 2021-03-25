<body style="text-align:center;">
<table style="background-color:cyan;text-align:center;" border ="1" align="center" width ="50%">
<?php
 
	$data=array();
	$xml=simplexml_load_file("contactus.xml") or die("Error: Cannot create object");
	foreach($xml->contact as $st){
		$ar=array();
		   
			$ar["type"]=(string)$st->type;
			$ar["contact1"]=(string)$st->contact1;
			$ar["contact2"]=(string)$st->contact2;
			$ar["contact3"]=(string)$st->contact3;
			$ar["email"]=(string)$st->email;
			$data[]=$ar;
		
	}
	?>
	<tr>
	<td>

	<h2><p style="text-align:center;">Thank You for using Our System <hr></h2></p>
	<p style="text-align:center;">
	<?php
		foreach($data as $v){
		echo "<b>In case of emergency, please contact with the ".$v["type"]."</b><br><br>";
		echo "Contact No1: ".$v["contact1"]."<br>";
		echo "Contact No2: ".$v["contact2"]."<br>";
		echo "Contact No3: ".$v["contact3"]."<br>";
		echo "Email: ".$v["email"]."<br><br><br>";	
		}
		?>
		</p>
         <h3>Do you have already an account? <a style="text-decoration: none" href="login.php">Login</a></h3>
          <h3>Do not have any account? <a style="text-decoration: none" href="signup.php">Sign Up</a></h3>
	<br><br>

</td>
</tr>
</table>
</body>
