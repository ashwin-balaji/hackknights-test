<?php
$username=$_POST['name'];
$password=$_POST['password'];
if($username=='student' && $password='student')
{
header('location:student.html');
}
else
{
header('location:error.html');
}
?>
