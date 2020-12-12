<?php

include_once("config.php");

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Video Upload </title>
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


#cont {
  left: 250px;
  padding: #ddd;
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
}</style>
</head>

<?php
include_once("queryFunctions.php");
include_once("queryImplementation.php");

?>

</head>
<body>

<div class="header">
  <img src="channel-default.png" style="width:100%; height:30%;" alt="welcome to your metube channel!"> </img>
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

<div>
<form action="uploadmedia.php" method="POST" enctype="multipart/form-data">
<br>
<br>

<div id="cont">
<h2> Upload Media</h2>
<label for="file">Select file to upload: </label>
<input type="file" name="file" />
<select id="mediacategory" onchange="categoryFunction()">
	<option id="private" value="private">Private</option>
	<option id="private" value="public">Public</option>
	<option id="private" value="family">Family</option>
</select>
<h4> Add Description to your file: </h4>
<textarea rows ="5" columns="100"></textarea><br>
<input type="submit" name="submit" value="submit">
</form>
</div>


<?php 

if(isset($_POST['submit']))
{	
	echo "Dear ".$_SESSION["username"]. ", your ";
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	$arrayVar = explode('.', $_FILES['file']['name']);
	$ext = end($arrayVar);

	if ($ext=="jpg" OR $ext=="jpeg" OR $ext=="png") {
   // $name = md5( uniqid() . $name . rand(0,100);
    $url = $_SERVER['DOCUMENT_ROOT'].'/metube/users/'.$_SESSION['username'].'/images/'.$name;
    move_uploaded_file($temp, "$url");
    echo "upload was successful!";
    $img_id=0;
	for($id=0;$id<100;$id++) {
		$img_id = $id;
	}
  if(move_uploaded_file($_FILES['UploadFileName']['tmp_name'],$url)) {

     $filePath = realpath($_FILES["file"]["tmp_name"]);

     //$sql = 'INSERT INTO video(name, video_id, uploaded_at, link, sharing_category, user) VALUES('$name','filemtime($name)','$filePath','$_SESSION['username']')';
} 
	}
	else if($ext=="mov" OR $ext=="avi" OR $ext=="flv" OR $ext=="mp4") {
    $url = $_SERVER['DOCUMENT_ROOT'].'/metube/users/'.$_SESSION['username'].'/videos/'.$name;
    move_uploaded_file($temp, "$url");
    echo "upload was successful!";
    $vid_id=0;
	for($id=0;$id<100;$id++) {
		$vid_id = $id;
		}
	}
	else if($ext=="mp3" OR $ext=="wav") {
	$url = $_SERVER['DOCUMENT_ROOT'].'/metube/users/'.$_SESSION['username'].'/audio/'.$name;
	move_uploaded_file($temp, "$url");
    echo "upload was successful!";
    $aud_id=0;
	for($id=0;$id<100;$id++) {
		$aud_id = $id;
		}
	}
	else if($ext=="gif") {
	$url = $_SERVER['DOCUMENT_ROOT'].'/metube/users/'.$_SESSION['username'].'/graphics/'.$name;
	move_uploaded_file($temp, "$url");
    echo "upload was successful!";
    $gif_id=0;
	for($id=0;$id<100;$id++) {
		$gif_id = $id;
		}
	}
	else {
		echo "Invalid file format. Allowed file formats: JPG/JPEG/PNG/GIF/MOV/AVI/FLV/MP4/MP3.";

	}

  //$sql = "INSERT INTO `video`(filepath) VALUES";
}


?>
</div>
<script>

function categoryFunction() {
	var x = document.getElementByID("mediacategory").value;
	if (x=="private") {
		category=1;
	}
	else if(x=="public") {
		category=2;
	}
	else if(x=="family") {
		category=3;
	}
}
</script>
<?php

$category = "<script>document.getElementByID('mediacategory').value</script>";

if ($category=="private"){
	$num=1;
}
if ($category=="public") {
	$num=2;
}
if ($category=="family") {
	$num=3;
}

?>
</body>
</html>