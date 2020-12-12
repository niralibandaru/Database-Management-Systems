<?php
// include_once("mysqlConnectionClass.php");
include_once("config1.php");
class queryImplementation{
	var $db;
	var $connection;

function __construct() {
	 // $this->db = new mysql_db($GLOBALS["db_host"], $GLOBALS["db_user"], $GLOBALS["db_pass"], $GLOBALS["db_name"]);
	 // $this->connection =$this->db->getConnection();
//connection
	 $this->connection =  mysqli_connect($GLOBALS["db_host"], $GLOBALS["db_user"], $GLOBALS["db_pass"], $GLOBALS["db_name"])
			or die('Could not connect: ' . mysqli_error($this->connection));
  }

  function run_query($query){
$result = mysqli_query($this->connection,$query);
// or die ("QUERY Error: ".mysqli_error($this->connection)."\n");

return $result;
  }

  function close(){
  	mysqli_close($this->connection);
  }
  function get_error(){
  	$error = mysqli_error($this->connection);
  	return $error;
  }

  function commit(){
  	return (mysqli_commit($this->connection));
  }
}

?>