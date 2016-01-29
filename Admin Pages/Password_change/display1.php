<?php
	session_start();
	
	//user logged in
	if ($_POST['submit'])
	{
		//start changing password
		$user = ($_POST['username']);
		$newpassword = md5($_POST['password']);
		$repeatnewpassword = md5($_POST['repeatpassword']);
		//check password against db
		
		//connect db
		$connect=mysql_connect("localhost", "root", "root");
		mysql_select_db("project") or die();
		$queryget = mysql_query("SELECT username FROM newusers WHERE username='$user' ") or ("Query didnt work");
		$row = mysql_fetch_assoc($queryget);
		if($row != 0) 
		{
	
	
		   //check two new password
			        if ($newpassword==$repeatnewpassword)
				   {
 						//success
						$querychange = mysql_query("
						
						UPDATE newusers SET password='$newpassword' WHERE username='$user'");
						header("Location:changedpass.html");
				   }
			       //else	
					die("New password don't match!");
			
			//echo "$oldpassword/$newpassword/$repeatnewpassword";
	}
	else {
		echo "Username does n't exist !. <a href='Admin_page.html'>Return</a> to the main page";
	}
	}
	else
	{
	echo "No user in the database ";
}

	?>