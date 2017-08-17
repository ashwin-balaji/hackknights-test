<?php
$search = $_POST['search'];
$text = file_get_contents('../STUINFPROJ/data/data.txt');
$lines = explode("-", $text);
if(in_array($_POST['search'], $lines))
{ 
    echo " The details of the Student :  $text ";
}
else
{
    echo "The information of the student does not exist...";
}
?>