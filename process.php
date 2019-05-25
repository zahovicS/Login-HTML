<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="rokizv123"; // Mysql password 
	$db_name="login"; // Database name 
	$tbl_name="user"; // Table name 

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$myusername=$_POST['user']; 
	$mypassword=$_POST['pass']; 

	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);

	if($count==1)
	{
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION["user"];
		$_SESSION["pass"]; 
		echo "bien";
	}
	else
	{
		echo "Wrong Username or Password";
	}

?>