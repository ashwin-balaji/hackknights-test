<?php
$username=$_POST['name'];
$password=$_POST['password'];
if($username=='admin' && $password='123')
{
header('location:Search.html');
}
else
{
header('location:loginerror.html');
}
?>
