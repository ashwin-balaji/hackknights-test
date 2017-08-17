<?php
$search = $_POST['search'];
$text = file_get_contents('../Case tools project/data/entry.txt');
$lines = explode("-", $text);
if(in_array($_POST['search'], $lines))
{ 
    echo "  <div align='center' style='font-size:20px' style='font-family:italic'> $text </div> ";
}
else
{
    echo "User does not have any book";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>library mangement</title>
<body>
<body background="result.jpg">



<div id="container">
</div>

<div id="footer"><center></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<h3>copyrights @ M4</h3>
</center></div>
</body>
</html>