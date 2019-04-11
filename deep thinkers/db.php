<?php



//Your Mysql Config

//$servername = "localhost";
//
//$username = "root";
//
//$password = "PASSWORD";
//
//$dbname = "marketgate";

$servername = "us-cdbr-iron-east-03.cleardb.net";

$username = "b60aa7b708609d";

$password = "13d3a5f7";

$dbname = "heroku_8fd7541f35eb3cc";

//Create New Database Connection

$conn = new mysqli($servername, $username, $password, $dbname);

// inline connection

$connect = mysqli_connect($servername,$username,$password, $dbname);



//Check Connection

if($conn->connect_error) {

	die("Connection Failed: ". $conn->connect_error);

}

?>