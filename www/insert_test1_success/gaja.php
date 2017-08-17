<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "csv_db";
    
    // get values form input text and number
$id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `users`(`id`, `fname`, `lname`, `age`) VALUES ('$id','$fname','$lname','$age')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }

   //$new= mysqli_free_result($result);
    mysqli_close($connect);
}

?>
