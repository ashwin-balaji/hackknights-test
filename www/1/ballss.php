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
<?php $name = $_POST['name'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/normalize.css">
</head>

<body bgcolor="#339900">

<center><img src="sri.png" width="1360" height="250"></center>

<div class="logout" style="float:right">
<a href="login.html"><input type="submit" value="Log Out" /></a>
</div>

<div class="back" style="float:left">
<a href="search.html"><input type="submit" value="Back" /></a>
</div>
<br /><br />
<form action="searchResultSuccess.php" method="GET">
</form>
<table border="6" height="40" width="400" align="center" bgcolor="#CF0" bordercolor="#000">
<tr>
<td colspan="2" align="center"><h3>STUDENT DETAILS</h3></td>
</tr>
<tr>
<td>Name:</td>
<td><p>
<?php
echo $fname;
?></p>
</td>
</tr>
<tr>
<td>Roll no:</td>
<td>
<?php
echo $_POST['rollno'];
?></td>
</tr>
</table>
</body>
</html>
