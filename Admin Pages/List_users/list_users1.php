	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">

<!-- Starting of the WEB-PAGE -->
	<html xmlns="http://www.w3.org/1999/xhtml">
	<title> Admin Home </title>


<!-- Starting of the style sheet -->
	<head>
		<link rel="stylesheet" href="../css/admin_home.css" type="text/css" />  <!-- Used for linking CSS file -->
		<script type="text/javascript" src="../js/validate_admin.js">
	

		
		</script>
		<script type="text/javascript" src="../js/validate_index.js">
	

		
		</script>
	</head>
<!-- End of the stylesheet-->


<body>

<!-- Heading of the WEB-PAGE -->
<center>
	<div id="banner" style="position: absolute; margin-top:-10px; height:70px; width:1140px; left: 100px; border:2px solid #ADD8E6;
	     border-radius: 5px 5px 20px 20px; background:rgb(245,245,245)">
    <pre class="language-css">
		<code>
			<h1>LIST OF AVAILABLE USERS<file style="font-size:32px"></file></h1>
		</code>
    </pre>
    </div>
</center>
<!-- End of the heading -->



<!-- LOGO of DBCET of both right and left side -->
	<img src = "../images/left_logo.png" height=90px width=90px title="Assam Don Bosco University"
		style = "position: absolute; top: 8px; left: 5px; z-index: -1" />
	<img src = "../images/right_logo.png" height=90px width=90px title="Assam Don Bosco University"
		style = "position: absolute; top: 10px; left: 1250px; z-index: -1" />
		
<!-- End of the logo part -->

<a href="../Main_Page/logout.php"><input id="button" type="submit" name="submit" value="Logout"  title="Click to Logout"
     style="cursor:pointer; position:absolute; top:100px; background:rgb(220,220,200); border-radius: 10px; width:90px; left:1050px"></a>
<a href="../Main_Page/Admin_page.html"><input id="button" type="submit" name="submit" value="Admin Page"  title="Click to Admin Page"
     style="cursor:pointer; position:absolute; top:100px; background:rgb(220,220,200); border-radius: 10px; width:120px; left:900px"></a>

<?php
	session_start();
	//user logged in
	
		//connect db
		$connect=mysql_connect("localhost", "root", "root");
		mysql_select_db("project") or die();
		
			$query= mysql_query("SELECT * From newusers");
			$numrows = mysql_num_rows($query);
			
			echo "<div style='text-align: center; font-size: 32px; font-weight: bold'><u>Users in the database</u></div><br/>";
			while ($row = mysql_fetch_assoc($query))
	 				{	
						echo
						"<table style='border: 2px solid rgb(60,60,160); border-radius: 5px; margin: 60px auto; width: 300px; font-size: 18px'>
						<tr>
								<td>
	 									&nbsp;&nbsp;{$row['username']}&nbsp;&nbsp;<hh style='font-size: 14px; color: rgb(200,60,60)'>created on</hh>&nbsp;&nbsp;{$row['date']}&nbsp;
	 							</td>
	 					</tr>
	 					</table>";
						}
						
						echo
						"<div style='margin: 24% 42%; font-size: 12px'>
								Copyright 2014 EERS. All right reserved.
								</div>
						";
						?>





<!-- Ending of the WEB-PAGE -->

</body>
</html>

