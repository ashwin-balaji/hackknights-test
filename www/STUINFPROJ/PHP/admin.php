<?php
if(isset($_POST['Name']) && isset($_POST['Roll_no']) && isset($_POST['Year']) && isset($_POST['Dept']) && isset($_POST['Reg_no']) && isset($_POST['Section']) && isset($_POST['Batch']) )
{
    $data = $_POST['Name'] . "-" . $_POST['Roll_no'] . "-" . $_POST['Year'] . "-" . $_POST['Dept'] . "-" . $_POST['Reg_no'] . "-". $_POST['Section'] . "-" . $_POST['Batch'];
    $ret = file_put_contents('../Case tools project/data/data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "New user has been added Successfully...";
    }
}
else
{
	echo "No post data to process";
}

?>