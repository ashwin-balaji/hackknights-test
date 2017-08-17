<?php
   define('test_SERVER', 'localhost:3306');
   define('test_USERNAME', 'root');
   define('test_PASSWORD', 'rootpassword');
   define('test_DATABASE', 'database');
   $test = mysqli_connect(test_SERVER,test_USERNAME,test_PASSWORD,test_DATABASE);
?>