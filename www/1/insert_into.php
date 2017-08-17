<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "batch_2014_18";
    // get values form input text and number
$rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $Quota = $_POST['Quota'];
    $FirstGraduate = $_POST['FirstGraduate'];
    $ReceiptNo = $_POST['ReceiptNo'];
    $DDNo = $_POST['DDNo'];
    $TuitionFee = $_POST['TuitionFee'];
    $OtherFees = $_POST['OtherFees'];
    $BookUniform = $_POST['BookUniform'];
    $BusFees = $_POST['BusFees'];
    $Donation = $_POST['Donation'];
    $HostelFee = $_POST['HostelFee'];
    $CautionDeposits = $_POST['CautionDeposits'];
    $Total = $_POST['Total'];
    $Balance = $_POST['Balance'];
	$date=$_POST['date'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `batch_2014_18_cse`(`rollno`, `name`, `Quota`, `FirstGraduate`, `ReceiptNo`, `DDNo`,`TuitionFee`, `OtherFees`, `BookUniform`, `BusFees`, `Donation`, `HostelFee`, `CautionDeposits`, `Total`, `Balance`,`date`) VALUES ('$rollno','$name','$Quota','$FirstGraduate','$ReceiptNo','$DDNo','$TuitionFee','$OtherFees','$BookUniform','$BusFees','$Donation','$HostelFee','$CautionDeposits','$Total','$Balance','$date')";
    
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
