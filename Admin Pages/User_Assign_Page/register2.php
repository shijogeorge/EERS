<?php
	
   	session_start(); 
    
    
    

	$submit = $_POST['submit'];


	//form data

	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	$repeatpassword =strip_tags($_POST['repeatpassword']);
	$date = date("d-m-y");
	
	
	if($submit)
	



	// check for existance
		
		if($username && $password && $repeatpassword)

		{

			
			if($password == $repeatpassword)
			{
			
			
				//chech char length of username and fullname
				if(strlen($username) >25)
				{
				echo "Length of username to long !";
				}
				else
					if(strlen($password) >25 || strlen ($password)< 6)
					{
					echo "Password must be between 6 and 25 characters";

					}
					else
					
					{
						//encrypt password
						$password = md5($password);
						$repeatpassword = md5($repeatpassword);
						
						//open database
						
					$connect = mysql_connect ("localhost","root","root");
						mysql_select_db("project");

						
						$queryreg = mysql_query("		
						INSERT INTO newusers VALUES ('','$username','$password','$date')");

						header("Location:success.html");
						


					}

			

			}
			else
			
			echo "Your passwords do not match!";
			


		}

		else
		
		echo "Please fill in <b>all</b> fields!";
	
	


	?>
