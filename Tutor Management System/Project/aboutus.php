<body style="text-align:center;">
<table style="background-color:cyan;text-align:center;" border ="1" align="center" width ="50%">
<?php
 
	$data=array();
	$xml=simplexml_load_file("aboutus.xml") or die("Error: Cannot create object");
	foreach($xml->about as $st){
		$ar=array();
		   
			$ar["sys"]=(string)$st->sys;
			$data[]=$ar;
		
	}
	?>
	<tr>
	<td>
	<h1 ><b>About Us</b></h1><hr>
	<p >
	<?php
		foreach($data as $v){
		echo $v["sys"];
		}
		?>
		</p>
          <h4><a style="text-decoration: none" href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a style="text-decoration: none" href="signup.php">Sign Up</a></h4>

<br>

</td>
</tr>
</table>
</body>
