<?php
ob_start();
$host=""; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name=""; // Database name 
$tbl_name=""; // Table name

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
//mysql_select_db("$db_name") or die(mysql_error());
//echo "Connected to Database<br />";
/*
// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
//$username=$_POST['user_name']; 
//$password=md5($_POST['password']);


// To protect MySQL injection (more detail about MySQL injection)
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
///$password = mysql_real_escape_string($password);

//$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
//$result=mysql_query($sql);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($_POST['user_name']=="Alex"&&$_POST['password']=="123456")
  $count=1;
 else
   $count=0;
if ($count==1) {
	header('Location:search.html');
    echo "Success! $count";
} else {
	header('Location:error.html');
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>