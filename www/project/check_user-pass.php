<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="register_details"; // Database name 
$tbl_name="register"; // Table name
if($_POST['user']=="admin"&&$_POST['password']=="password")
  $count=1;
 else
   $count=0;
if ($count==1) {
	header('Location:search.html');
    echo "Success! $count";
} else {
	header('Location:index_fail.html');
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>