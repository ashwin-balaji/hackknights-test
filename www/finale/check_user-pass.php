<?php
ob_start();
$host=""; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name=""; // Database name 
$tbl_name=""; // Table name
if($_POST['user_name']=="admin"&&$_POST['password']=="root")
  $count=1;
 else
   $count=0;
if ($count==1) {
	header('Location:a.html');
    echo "Success! $count";
} else {
	header('Location:error.html');
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>