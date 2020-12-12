<?php

include_once("config.php");
include_once("queryFunctions.php");
include_once("queryImplementation.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Media Display </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  
  <script src="welcome.js"></script>

<style>
/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #f5f5f5;
  position: sticky-top;
  text-decoration: none;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  color: #007bff;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

#parent {
	position: relative;
}

#coverpage {
	width: 100%;
	height: 30%;
	position: relative;
}

#latestvideo {
	border: 1px solid #ddd;
	position: relative;
	top: 25px;
	left: 35px;
	height: 300px;
	width: 1000px;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>


<div class="header">
  <img id="coverpage" src="channel-default.png" alt="welcome to your metube channel!"> </img>
</div>

<nav class="navbar navbar-light">
  <a href="#">Home</a>
  <a href="#">Media</a>
  <a href="#">Playlists</a>
  <a href="#">Gallery</a>
  <a href="#">Inbox</a>
  <a href="#">Discussion</a>
  <a href="#" class="right">Settings</a>
</nav>


<div id="wrapper">
	<div id= "latestvideo"><br>
	<h4>&nbsp&nbspLatest Video</h4>
	<?php 
	$sql = "SELECT link FROM video WHERE user='$_SESSION['username']'";
	$filepath_latestvideo = $mysqli->query($sql);

	?>

</div>


</body>
</html>