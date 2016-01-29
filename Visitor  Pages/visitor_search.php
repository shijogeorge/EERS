<?php
	session_start();
	//user logged in

		$user = ($_POST['name']);
		
		//connect db
		$connect=mysql_connect("localhost", "root", "root");
		mysql_select_db("project") or die();
		
			$query= mysql_query("SELECT * From visitors WHERE name='$user'");
			$numrows = mysql_num_rows($query);
			while ($row = mysql_fetch_assoc($query))
	 				{
						$dbname = $row['name'];
						$dbmeet = $row['person_to_meet'];
						$dbreason = $row['purpose'];
						}
						
						if($user!=$dbname)
						{
							header("Location: visitor_search.html");
						}
						if($user==$dbname)
						{
						?>
							<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Visitor's Pass ID</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
		<h1><a>Visitor's Pass ID</a></h1>
		<form id="form_931149" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Visitor's Pass ID</h2>
			<p>Kindly show this card to the visited person.</p>
		</div>
			<ul >
					<li id="li_1" >
		<label class="description" for="element_1">Date : </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element text medium" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_1">DD</label>
			<p class="guidelines" id="guide_3"><medium>Click the calendar<br/><--<br/>to enter the Date.</medium></p>
		</span>
		<span>
			<input id="element_1_2" name="element_1_2" class="element text medium" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_2">MM</label>
		</span>
		<span>
	 		<input id="element_1_3" name="element_1_3" class="element text medium" size="4" maxlength="4" value="" type="text">
			<label for="element_1_3">YYYY</label>
		</span>
	
		<span id="calendar_1">
			<img id="cal_img_1" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_1_3",
			baseField    : "element_1",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Visitor's Pass ID : </label>
		<div>
			<input id="element_5" name="element_5" class="element text" type="text" maxlength="15" value="ADBU-VPASS-"/> 
		</div> <p class="guidelines" id="guide_3"><medium>Kindly follow the format: ADBU-VPASS-XXXX. Eg:- ADBU-VPASS-0001</medium></p>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Name of the visitor: </label>
		<span>
			<input id="element_2_1" name= "element_2_1" class="element text" type="text" maxlength="40" size="40" value="<?PHP echo $user; ?>"/>
			<p class="guidelines" id="guide_3"><medium>Kindly enter the full name of the Visitor.</medium></p>
		</span>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Person to meet : </label>
		<div>
			<input id="element_3" name="element_3" class="element text" type="text" maxlength="40" size="40" value="<?php echo $dbmeet; ?>"/> 
		</div><p class="guidelines" id="guide_3"><medium>Kindly enter the full name of the Person.</medium></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Purpose : </label>
		<div>
			<input id="element_4" name="element_4" class="element text" type="text" maxlength="60" size="40" value="<?php echo $dbreason; ?>"/> 
		</div> <p class="guidelines" id="guide_3"><small>Mention the purpose.</small></p>
		</li>

	<li class="buttons">
			    <input type="hidden" name="form_id" value="931149" />
			    
				<input id="buttonsubmit" onclick="window.print();" class="button_text" type="submit" name="submit" value="Print" style="cursor:pointer" />
		</li>
			</ul>
		</form>	
</div>		
	</div>

	<div id="footer">
			Copyright 2014&nbsp;<a href="index.html">EERS</a>.All Rights Reserved
		</div>
	</body>
</html><?php
}
	?>