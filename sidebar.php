<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
 
a.sign:hover {
  background-color: salmon; color: white;
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
  background-color: royalblue;
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
/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}


}

}
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top" style="position:fixed; min-width: 1540px">
  <a class="navbar-brand text-dark" href="#">
<button type="button" class="sidebar-toggle-button btn-small"><i class="fa fa-bars btn-rounded" style="border:none"></i> </button>
<img src="https://img.icons8.com/color/24/000000/youtube-play.png">
  MeTube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
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
        <a class="nav-link text-dark sign" data-toggle="modal" href="#login"  >Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark sign" data-toggle="modal" href="#register">SignUp</a>
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
  <div class = main-content></div>
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
document.querySelector('button').onclick = function () {
  sidebar.classList.toggle('sidebar_small');
  mainContent.classList.toggle('main-content_large')
}

</script>

</body>
</html>

