<?php
if(isset($_POST['Date_of_issue']) && isset($_POST['Return_date']) && isset($_POST['Book_name']))
{
    $data = $_POST['Date_of_issue'] . "-" . $_POST['Return_date'] . "-" . $_POST['Book_name'] . "\n" ;
    $ret = file_put_contents('../CaseToolsProject/data/entry.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Database Updated...";
    }
}
else
{
	echo "No post data to process";
}
?>