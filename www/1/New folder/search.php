<?php
$rollno="";
$name="";
$Quota="";
$FirstGraduate="";
$ReceiptNo="";
$DDNo="";
$Date="";
$TuitionFee="";
$OtherFees="";
$BookUniform="";
$BusFees="";
$Donation="";
$HostelFee="";
$CautionDeposits="";
$Total="";
$Balance="";
$dsn='mysql:dbname=batch_2014_2018;host=127.0.0.1';

if(isset($_POST['Find']))
{
    try {
        $pdoConnect = new PDO($dsn,"root","root");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    $rollno=$_POST['rollno'];
    $pdoQuery = "SELECT * FROM batch_2014_2018_cse WHERE Roll No = :rollno";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoExec = $pdoResult->execute(array(":rollno"=>$rollno));    
    if($pdoExec)
    {
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                 $rollno = $row['Roll No'];
				 $name = $row['Name'];
				 $Quota = $row['Quota'];
				 $FirstGraduate = $row['First Graduate'];
				 $ReceiptNo = $row['Receipt No'];
				 $DDNo = $row['DD No'];
				 $Date = $row['Date'];
				 $TuitionFee = $row['Tuition Fee'];
				 $OtherFees = $row['Other Fees'];
				 $BookUniform = $row['Books Uniform'];
				 $BusFees = $row['Bus Fees'];
				 $Donation = $row['Donation'];
				 $HostelFee = $row['Hostel Fee'];
				 $CautionDeposits = $row['Caution Deposits'];
				 $Total = $row['Total'];
				 $Balance = $row['Balance'];
            }
		//header('location:searchResultSuccess.html');
			echo 'RollNO : '.$rollno .'<br>'. 'Name : '.$name;
			 }
        else{
            echo 'No Data With This Rollno';
			//header('location:searchFail.html');
			//$rollno = 0;
			//$name='null';
        }
    }else{
        //echo 'ERROR Data Not Inserted';
    }
}
?>