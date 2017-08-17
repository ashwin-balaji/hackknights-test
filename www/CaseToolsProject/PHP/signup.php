<?php
if(isset($_POST['Name']) && isset($_POST['Rollno']) && isset($_POST['Year']) && isset($_POST['Dept']) && isset($_POST['Regno']) && isset($_POST['Section']) && isset($_POST['Batch'])) {
    $data = $_POST['Name'] . '-' . $_POST['Rollno'] . "\n";
    $ret = file_put_contents('../Case tools project/data/data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo <a href="../Case tools project/index.html" $ret bytes written to file </a>;
    }
}
else {
   die('no post data to process');
}
?>