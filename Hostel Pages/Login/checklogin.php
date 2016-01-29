<?php
	session_start();
	if ($_POST['submit'])
	{
		
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if($username && $password)
	{

	$connect = mysql_connect("localhost","root","root") or die("Couldn't connect!");
	mysql_select_db("project") or die("Couldn't find db");

	$query= mysql_query("SELECT * From newusers WHERE username='$username'");
	$numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		if($username==$dbusername && $password==$dbpassword)
		{
			header("Location:../hostel.html");
		}
		else
	header("Location:incorrect_password.html");	
	}
	}
	else
	{
	header("Location:nouser.html");
}
	
	}
	}
	else {
		echo "Server or something Please contact your service provider od Administrator !!!";
		}
	?>