<?php
$dbhost = 'mysql1.cs.clemson.edu';
$db_user = "metube_o2oy";
$db_pass = "weneedA123@";
$db_name = "metube_db1";

//echo "Config.php testing \n\n <br>";

// $servername = "localhost";
// $username = "username";
// $password = "password";

//echo $dbhost, $db_user,$db_pass,$db_name;

// Create connection
$mysqli = new mysqli($dbhost, $db_user, $db_pass);

mysqli_select_db($mysqli,$db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
//echo "Connected successfully";

$sql = "Select *from users";
$result = $mysqli -> query($sql);

if(!$result){
trigger_error("Invalid query : ".$mysqli->error);
}

if($result -> num_rows > 0){
	//output data from each row
	while($row = $result->fetch_assoc()){
		//echo "<br><br><br><br><br>";
		//echo "userName:".$row["username"]. "\n".
		"email:".$row["email"]."<br>";
	}
}
else{
	//echo "0 results";
}
$mysqli->close();
?>


