<?php
if(isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['Roll_no']) && isset($_POST['Reg_no']) && isset($_POST['Year']) && isset($_POST['Department']) && isset($_POST['CGPA']) && isset($_POST['Contact_no']) )
{
    $data = $_POST['Name'] . "-" . $_POST['Address'] . "-" . $_POST['Roll_no'] . "-" . $_POST['Reg_no'] . "-" . $_POST['Year'] . "-". $_POST['Department'] . "-" . $_POST['CGPA'] . "-" . $_POST['Contact_no'];
    $ret = file_put_contents('../STUINFPROJ/data/data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "New student detail has been added Successfully...";
    }
}
else
{
	echo "No post data to process";
}

?>