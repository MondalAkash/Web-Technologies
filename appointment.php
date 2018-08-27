<!DOCTYPE HTML>
<?php 
	session_start();
	if(isset($_SESSION['puname'])){
	}
	else
	{
		header("Location: login.php");
	}	
	?>
<html>
<head>
	<title>Make Appoinment</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<script type="text/javascript">
		function showHint() {
			var  xmlhttp = new XMLHttpRequest();
			var str=document.getElementById('mytext').value;	
			//document.getElementById("spinner").style.visibility= "visible";
			xmlhttp.onreadystatechange = function() {
				//alert(xmlhttp.rxmlhttpeadyState);
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
					//document.getElementById("spinner").style.visibility= "hidden";
					var m=document.getElementById("txtHint");
					m.innerHTML=xmlhttp.responseText;;
				}
			};
			var url="appserver.php?uname="+str;
			//alert(url);
			xmlhttp.open("GET", url,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<div class="header-area">
		<img src="images/hospital-512.gif" alt="hospital_logo" />
		<a href="index.php"><h1>Online Hospital Management System</h1></a>
	</div>
	<table>
		<tr>
			<td style="width:1141px;">
				<?php 
		
					echo ("<h2>WELCOME, ".$_SESSION['puname']."</h2>");	
				?>
			</td>
			<td>
				<a href="plogout.php" style="text-decoration:none; font-size:20px; color:red; ">Logout</a>
			</td>
		</tr>
		<form action="a.php" method="post">
			<tr>
				<td>
					<label for="sd">Select Date: </label> <br />
					<input id="sd" type="date" name="appdate"/>
				</td>	
			</tr>
			<tr>
				<td>
					 <br /><label for="">Speciality:</label> <br />
					<select name="speciality" id="mytext" onchange="showHint();">
						<option value="">Select Speciality</option>
						<?php
							require("db_rwforpat.php");
							$jsonData= getJSONFromDB("SELECT DISTINCT d.dspecial FROM doctor d WHERE d.delete='y'");
							$jsn=json_decode($jsonData,true);

							foreach($jsn as $v){
								//echo "<p>".$v["name"]." with cgpa : ".$v["cgpa"]."</p>";
								echo "<option value='$v[dspecial]'>$v[dspecial]</option>"; 
								//echo "<p>".$v->name." with cgpa : ".$v->cgpa."</p>";
							}
							//echo "<pre>";print_r($jsn);echo "</pre>";
						?>
					</select>
					<br /><br /><label for="">Doctor: </label> <br />
					<select name="docname" id="txtHint">
						<option value="">Select Doctor</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Next" name="sbmt"/>
				</td>
			</tr>
			
		</form>
		
		
	</table>
	
	
</body>
</html>

