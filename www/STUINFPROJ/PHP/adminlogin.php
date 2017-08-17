<?php
$username=$_POST['name'];
$password=$_POST['password'];
if($username=='admin' && $password='admin')
{
header('location:admin.html');
}
else
{
header('location:error.html');
}
?>
