<?php 
session_start(); 
include_once('queryFunctions.php');
include_once('queryImplementation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="welcome.js"></script>
  <script type="text/javascript"></script>
<style>


.nav-item a:hover{
  color:#007bff !important;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 100;
  font-weight: normal;
  left: 0;
  background-color: gainsboro;
  overflow-x: hidden;
  padding-top: 100px;
}

html, body{
  overflow-x: hidden;
  max-width: 100%;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-weight: normal;
  font-size: 20px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;

}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover{
  color: white;
  background-color: #007bff;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: cornflowerblue;
  color: lightblue;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: seashell;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.frame {

  padding-top: 100px;
  padding-left: 250px;
  width: 550px;
  height: 250px;

}

.main-content {
  width: 70%;
  height: 100%;
  background-color: #ccc;
  transition: 0.1s ease;
}
.main-content_large {
  width: 90%;
}

.sidebar_small {
  width: 0%;
}

.iframe {
  position: relative;
  min-width: 1520px;
  overflow-x: hidden;
  overflow-y: visible;
  height: 100%;
  top:60px;
  left:0;
  bottom: 20000px;
}

.main {
  border: 1px solid black;
  flex: 1;
}

}
body {
  overflow: hidden;
}
}
.sidebar-toggle-button {
  position: absolute;
  border: none;
  height: 40px;
  width: 40px;
  border-radius: 15px;
  border-collapse: separate;
  box-shadow: 0px 1px 4px 1px rgba(0 ,0, 0, .3);
  left: 100%;
  top: 2rem;
  transform: translateX(-50%);
  cursor: pointer;
}


</style>
  </head>
<body>
 
<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top" style="position:fixed; min-width: 1540px">
  <a class="navbar-brand text-dark" href="#">
<button type="button" class="sidebar-toggle-button btn-small"><i class="fa fa-bars btn-rounded" style="border:none"></i> </button>
<a href="welcome.php"><img src="https://img.icons8.com/color/24/000000/youtube-play.png"></a>
  <a href="welcome.php" style="text-decoration: none">MeTube</a></a> <p>&nbsp&nbsp</p>
  <button onclick="window.location.href = 'welcome.php';" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" collapse navbar-collapse" id="collapsibleNavbar">
    <form class="form-inline my-3 my-lg-1">
      <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-lg-1" type="submit">Search</button>
    </form>
<pre>            </pre>
<div> 

      <label for="cars">Search By:</label>
      <select id="searchby">
        <option value="name">Name</option>
        <option value="keyword">Keyword</option>
      </select>
      <label for="organize">&nbsp  Organize By: </label>
      <select id="organize">
        <option value="name">Name</option>
        <option value="type">Media Type</option>
        <option value="uploadtime">Uploading Time</option>
        <option value="filesize">File Size</option>
      </select>
    </div>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a id="uploadmedia" class="nav-link text-dark " data-toggle="modal" href="uploadmedia.php" target="myiframe" 
        onclick="setIframeSrc('myiframe',this.href); return false">Upload</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="contacts.php" target="myiframe">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" href="#" onclick="window.location.href = 'logout.php';">Sign out</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="sidenav">
  <a href="#home">Home</a>
  <button class="dropdown-btn">Popular Media 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Videos</a>
    <a href="#">Audio</a>
    <a href="#">Images</a>
    <a href="#">Graphics</a>
  </div>
  <a href="#recentuploads">Recent Uploads</a>
  <a href="#recommended">Recommended</a>
  </div>

<div id="main"> 
<iframe src="channel1.php" class="iframe" id="myiframe" frameborder="0" style="height: 2000px;"></iframe>
</div>

 <script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

const sidebar = document.querySelector('.sidenav');
const mainContent = document.querySelector('.main-content');
document.querySelector('button').onclick = function() {
  sidebar.classList.toggle('sidebar_small');
  mainContent.classList.toggle('main-content_large');
}

function setIframeSrc(id, url) {
    document.getElementById(id).src = url;
}

</script>
</body>
</html>