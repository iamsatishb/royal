<?php

class api
{
	public $data = "";
		
	const DB_SERVER = "127.0.0.1";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB = "rcb";

	private $db = NULL;
	private $mysqli = NULL;

	function __construct(){
		// This connect db 
		$this->dbConnect();
		// get post data which sent from $http service
		$data = json_decode(file_get_contents("php://input"));
		// assigning function name to the variable
		$type = $data->type; 
		// call required function
		$this->$type($data);
	}

	private function dbConnect(){
		$this->mysqli = new mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
	}

	function getAdmin($data){

		$username = $data->username;
		$password = $data->password;
		
		$query = "SELECT COUNT(*) as cnt FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$row = $this->mysqli->query($query);
		$res = mysqli_fetch_assoc($row);
		print_r($res['cnt']);
		if($res['cnt'] > 0){
			print_r(json_encode($res));
		}else{
			die('Error: ' . mysql_error());
		}
		
	}
}

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