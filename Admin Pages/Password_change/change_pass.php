<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">

<!-- Starting of the WEB-PAGE -->
	<html xmlns="http://www.w3.org/1999/xhtml">
	<title> Admin assign </title>


<!-- Starting of the style sheet -->
	<head>
		<link rel="stylesheet" href="../css/admin.css" type="text/css" />  <!-- Used for linking CSS file -->
		
		<script type="text/javascript" src="../js/validate_admin.js">
	

		
		</script>
		<script type="text/javascript" src="../js/validate_index.js">
	

		
		</script>
	</head>
<!-- End of the stylesheet-->


<body>

<!-- Heading of the WEB-PAGE -->
<center>
	<div id="banner"style="position: absolute; margin-top:12px; height:70px; width:88%; left: 90px; right:auto; border:2px solid #ADD8E6;
	     border-radius: 5px 5px 20px 20px; background:rgb(245,245,245)">
    <pre class="language-css">
		<code>
			<h3><strong style="font-size:42px">A</strong>DMINISTRATOR <file style="font-size:42px">Assign</file></h3>
		</code>
    </pre>
    </div>
</center>
<!-- End of the heading -->



<!-- LOGO of DBCET of both right and left side -->
	<img src = "../images/left_logo.png" height=90px width=90px title="Assam Don Bosco University"
		style = "position: absolute; top: 8px; left: 5px; z-index: 1" />
	<img src = "../images/right_logo.png" height=90px width=90px title="Assam Don Bosco University"
		style = "position: absolute; top: 10px; left: 94%; z-index: 1" />
<!-- End of the logo part -->
		


<!-- Starting of the FORM page -->
	<div id="Assign">
		<fieldset style="width:40">
			<form name="indexform" method="post" action="display1.php" onsubmit="return validateForm()"><br/>
				<label>USERNAME :</label>
					<input type="text" name="username" placeholder="Enter ID" autofocus><br/><br/><br/>
				<label>NEW PASSWORD :</label>
					<input type="password" name="password" placeholder="Enter password"><br/><br/><br/>
					<label>REPEAT NEW  PASSWORD :</label>
					<input type="password" name="repeatpassword" placeholder="Enter password again"><br/><br/><br/>
					<input id="button" type="submit" name="submit" value="submit" title="Click to submit" style="cursor:pointer">
			</form>
		</fieldset>
	</div>
	
	 <a href="../Main_page/logout.php"><input id="button" type="submit" name="submit" value="Logout"  title="Click to Logout"
     style="cursor:pointer; position:absolute; top:100px; background:rgb(220,220,200); border-radius: 10px; width:90px; left:1050px"></a>
<!-- Ending of the FORM page -->



<center>
	<footer style="position: absolute; top:600px; left: 550px"><h5> Copyright © 2014. All rights reserved. </h5></footer>
</center>


<!-- Ending of the WEB-PAGE -->

</body>
</html>