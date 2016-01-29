<?php
	session_start();
	$submit = $_POST['submit'];

	//form data
	$date = date("d-m-y");
	$name = strip_tags($_POST['username']);
	$street_address = strip_tags($_POST['address']);
	$address_2 = strip_tags($_POST['address_2']);
	$city = strip_tags($_POST['city']);
	$state = strip_tags($_POST['state']);
	$pincode = strip_tags($_POST['pincode']);
	$country = strip_tags($_POST['country']);
	$phone = strip_tags($_POST['phone']);
	$gender = strip_tags($_POST['gender']);
	$person_to_meet = strip_tags($_POST['person_to_meet']);
	$purpose = strip_tags($_POST['purpose']);
	$check_in_time = strip_tags($_POST['check_in_time']);
	$check_out_time = strip_tags($_POST['check_out_time']);
	/*
	$upload = $_FILES["myfile"]["name"];
	$type= $_FILES["myfile"]["type"];
	$size= $_FILES["myfile"]["size"];
	$temp= $_FILES["myfile"]["tmp_name"];
	$error= $_FILES["myfile"]["error"];
	*/
	if($submit)
	{
		
		
			$connect = mysql_connect ("localhost","root","root");
						mysql_select_db("project");
						

						

						$file =mysql_query ("INSERT INTO visitors VALUES ('','$date','$name','$street_address',
						'$address_2','$city','$state','$pincode','$country','$phone','$gender','$person_to_meet',
						'$purpose','$check_in_time','$check_out_time')");
						
						
						

						echo "A new Visitor is added successfully ! <a href = 'visitor_home.html'>Return to Homepage</a> <br/>";
			
						
						
					}
					
					
		

		else
		
		echo "Please fill in <b>all</b> fields!";
	
	


	?>