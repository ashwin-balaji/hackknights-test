<?php

// php search data in mysql database using PDO
// set data in input text

$id = "";
$fname = "";
$lname = "";
$age = "";
$dsn = 'mysql:dbname=batch_2014_2018;host=127.0.0.1';
if(isset($_POST['Find']))
{
        // connect to mysql
    try {
        $pdoConnect = new PDO($dsn,"root","root");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
  //mysql_select_db('test_db');
    // id to search
    $id = $_POST['id'];
    
     // mysql search query
    $pdoQuery = "SELECT * FROM batch_2014_2018_cse WHERE Roll_No = :id";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":id"=>$id));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $id = $row['id'];
                $fname = $row['Name'];
                $lname = $row['lname'];
                $age = $row['age'];
            }
			echo 'fname is '.$fname;
        }
            // if the id not exist
            // show a message and clear inputs
        else{
            echo 'No Data With This ID';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }
}


?>
