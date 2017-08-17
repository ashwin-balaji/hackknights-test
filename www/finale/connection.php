<?php
	$db = PDO("localhost", "root", "root") or die("Could not connect.");
	if(!$db) 
	    die("no db");
	if(!mysql_select_db("csv_db",$db))
	    die("No database selected.");
	?>