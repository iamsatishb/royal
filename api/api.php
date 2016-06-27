<?php


class api
{
	function __construct(){
		$data = json_decode(file_get_contents("php://input"));
		$type = $data->type; 
		// print_r($type);

		$this->$type();
		
		
		print_r($type);
	}

	function getAdmin(){
		echo "inside class and function";
	}
}
print_r("i am here");
$api = new api();
// $api->getAdmin();

	
	// $con = mysqli_connect("localhost","root", "", "rcb");
	// if (mysqli_connect_errno())
	// {
	// echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }


	// $data = json_decode(file_get_contents("php://input"));
	// $username = $data->username;
 // 	$password = $data->password;
 // 	echo $username;
 // 	print_r($data);

 // 	$query = "SELECT usertype FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
 // 	// $query = "select COUNT(*) as cnt,username from admin where username='".$username."' AND password='".$password."'";
 // 	$row = mysqli_query($con, $query);
 // 	$res = mysqli_fetch_object($row);
 // 	// print_r($row);
 // 	print_r($res);
 // 	if (!$res)
	// {

	//   die('Error: ' . mysql_error());

	// }else{	

	// 	print_r(json_encode($res));

	// }


?>