<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
 
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
	  {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      
	  else
      {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
?>
<html ><head>
    <meta charset="UTF-8">
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">    
    
  </head>

  <body>
<body background="background1.jpg">
  <div class="login">
  <h2>Log In</h2>
  <fieldset>
  <form method="post" action="php/login.php">
  <form method="post" action="php/config.php">
  <form method="post" action="php/welcome.php">
  <form method="post" action="php/logout.php">
  <form method="post" action="php/session.php">
    <input type="Username" placeholder="Username" />
  	<input type="password" placeholder="Password" />
  </fieldset>
  <input type="submit" value="Log In"/>
  </a>

  <div class="utilities"></div>
  </div>
  </body>
</html>





