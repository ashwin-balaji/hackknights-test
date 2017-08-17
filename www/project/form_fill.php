<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "register_details";
    
    // get values form input text and number
$name = $_POST['name'];
    $college_name = $_POST['college_name'];
    $dob = $_POST['dob'];
    $register_as = $_POST['register_as'];
    $gender = $_POST['gender'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `register`(`name`, `college_name`, `dob`, `register_as`, `gender`) VALUES ('$name','$college_name','$dob','$register_as','$gender')";
    
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
