<?php
$rollno="";
$name="";
$dsn='mysql:dbname=batch_db;host=127.0.0.1';

if(isset($_POST['Search']))
{
    try {
        $pdoConnect = new PDO($dsn,"root","root");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    $Roll_No=$_POST['Roll_No'];
    $pdoQuery = "SELECT * FROM student WHERE Roll No = :Roll_No";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":rollno"=>$rollno));    
    if($pdoExec)
    {
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $Roll_No = $row['Roll No'];
				 $Name = $row['Name'];
            }
			header('location:searchResultSuccess.html');
			echo 'Roll No : '.$Roll_No .'<br>'. 'Name : '.$Name;
        }
        else{
            echo 'No Data With This Rollno';
			header('location:searchFail.html');
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }
}
?>
