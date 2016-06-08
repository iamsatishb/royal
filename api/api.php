<?php

	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("rcb", $con);

	$data = json_decode(file_get_contents("php://input"));
	$username = $data->username;
 	$password = $data->password;

 	$sql = "select COUNT(*) as cnt,username from admin where username='".$username."' AND password='".$password."'";
 	// mysql_query->execute($sql, $con);
 	// mysql_query($sql);
 	print_r(mysql_query($sql));
 	// mysql_query($sql,$con);

 	// print_r($row->username); die;
 	if (!$row)
	{

	  die('Error: ' . mysql_error());

	}else{	

		print_r($data);

	}


?>