<?php

// php search data in mysql database using PDO
// set data in input text

$Roll_No = "";
$Name = "";
$Quota = "";
$First_Graduate = "";
$Receipt_No = "";
$DD_No = "";
$Date = "";
$Tuition_Fee = "";
$Other_Fees = "";
$Books_Uniform = "";
$Bus_Fees="";
$Donation ="";
$Hostel_Fee="";
$Caution_Deposits="";
$Total="";
$Balance="";
$dsn = 'mysql:dbname=batch_2014_2018;host=localhost';
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
    $Roll_No = $Roll_No;
    
     // mysql search query
    $pdoQuery = "SELECT * FROM batch_2014_2018_cse WHERE Roll_No = :Roll_No";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":Roll_No"=>$Roll_No));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
         $Roll_No= $row['Roll_No'];
                $Name = $row['Name'];
                $Quota = $row['Quota'];
$First_Graduate = $row['First_Graduate'];
$Receipt_No = $row['Receipt_No'];
$DD_No = $row['DD_No'];
$Date = $row['Date'];
$Tuition_Fee = $row['Tuition_Fee'];
$Other_Fees = $row['Other_Fees'];
$Books_Uniform = $row['Books_Uniform'];
$Bus_Fees=$row['Bus_Fees'];
$Donation =$row['Donation'];
$Hostel_Fee=$row['Hostel_Fee'];
$Caution_Deposits=$row['Caution_Deposits'];
$Total=$row['Total'];
$Balance=$row['Balance'];
            }
			echo 'Name is '.$Name;
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
<?php $Name = $Name;?>
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
echo $Name;
?></p>
</td>
</tr>
<tr>
<td>Roll no:</td>
<td>
<?php
echo $Roll_No;
?></td>
</tr>
<tr>
<td>Quota:</td>
<td>
<?php
echo $Quota;
?></td>
</tr>
<tr>
<td>First Graduate:</td>
<td>
<?php
echo $First_Graduate;
?></td>
</tr>
<tr>
<td>Receipt No:</td>
<td>
<?php
echo $Receipt_No;
?></td>
</tr>
<tr>
<td>DD Number:</td>
<td>
<?php
echo $DD_No;
?></td>
</tr>
<tr>
<td>Date:</td>
<td>
<?php
echo $Date;
?></td>
</tr>
<tr>
<td>Tuition Fee:</td>
<td>
<?php
echo $Tuition_Fee;
?></td>
</tr>
<tr>
<td>Other Fees</td>
<td>
<?php
echo $Other_Fees;
?></td>
</tr>
<tr>
<td>Books Uniform:</td>
<td>
<?php
echo $Books_Uniform;
?></td>
</tr>
<tr>
<td>Bus Fees:</td>
<td>
<?php
echo $Bus_Fees;
?></td>
</tr>
<tr>
<td>Donation:</td>
<td>
<?php
echo $Donation;
?></td>
</tr>
<tr>
<td>Hostel Fee:</td>
<td>
<?php
echo $Hostel_Fee;
?></td>
</tr>
<tr>
<td>Caution Deposits:</td>
<td>
<?php
echo $Caution_Deposits;
?></td>
</tr>
<tr>
<td>Total:</td>
<td>
<?php
echo $Total;
?></td>
</tr>
<tr>
<td>Balance:</td>
<td>
<?php
echo $Balance;
?></td>
</tr>
</table>
</body>
</html>
