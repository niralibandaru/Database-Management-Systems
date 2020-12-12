<?php
// include_once('config.php');
session_start();
include_once("queryFunctions.php");
include_once("queryImplementation.php");

function redirect($page){
	// header("Location: ". $page);
	echo '<script language="javascript">window.location.href ="'.$page.'"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Metube</title>
  <meta charset="utf-8">
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
  

<style>
.datepicker {
  z-index: 1600 !important; /* has to be larger than 1050 */
}
.nav-item a:hover{
  color:white !important;
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
  width: 100%;
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


/*reek */ 
#notification {
    position: absolute;
    z-index: 101;
    top: 0;
    left: 0;
    right: 0;
    background: #fde073;
    text-align: center;
    line-height: 2.5;
    overflow: hidden; 
    -webkit-box-shadow: 0 0 5px black;
    -moz-box-shadow:    0 0 5px black;
    box-shadow:         0 0 5px black;
}
.cssanimations.csstransforms #notification {
    -webkit-transform: translateY(-50px);
    -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
    -moz-transform:    translateY(-50px);
    -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
}


/*nirali*/

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


</style>
</head>
<body>


<!-- Top name of site -->
<!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Welcome To MeTube</h1>
  <p>New Way to view and share your videos</p> 
</div> -->

<!-- <div id="notification">You smell Good</div> -->

<nav class="navbar navbar-expand-sm bg-light navbar-dark sticky-top" style="position:fixed; min-width: 100%">
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
        <a class="btn nav-link text-primary sign btn btn-outline-primary my-2 my-lg-1" data-toggle="modal" href="#login"  >Sign In</a>
      </li> <p>&nbsp</p>
      <li class="nav-item">
        <a class="btn nav-link text-primary sign btn btn-outline-primary my-2 my-lg-1" data-toggle="modal" href="#register">Sign Up</a>
      </li>
      
    </ul>
  </div>  
</nav>


<div class="container">
  
  <!-- The login Modal -->
  <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           
          <!-- <form action="action.php" id="loginForm" class="needs-validated" method="POST"> -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" id="loginForm" class="needs-validated" method="POST">
          <div class="form-group">
            <label for="email">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username" id="username" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password" id="password" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <!-- <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on Terms and Conditions.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div> -->
    <!-- 
          <button type="submit" id="login_button" class="btn btn-primary" name="login" data-toggle="modal">Login2</button>
          <button type="button" id="close_button" class="btn btn-danger" data-dismiss="modal">Close2</button> -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="login_button" name="loginSubmit" data-toggle="modal" >Login</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        

      </form>
      </div>
    </div>
  </div>


  <!-- the register modal -->
  <div class="modal fade" id="register">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register/ Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h2>Welcome to MeTube</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" class="needs-validated" method="POST" id="registrationForm">
          <div class="form-group">
            <label for="fname">FirstName</label>
            <input type="text" class="form-control" placeholder="Enter firstname" id="fname" name='firstname' required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="lname">Lastname</label>
            <input type="text" class="form-control" placeholder="Enter lastName" id="lname" name="lastname">
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Enter username" id="rusername" name="username" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
         
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="registerPassword" name="password" required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="dateofbirth">Date of birth</label>
        <input class="form-control" id="dateofbirth" name="dateofbirth" placeholder="MM/DD/YYY" type="text" />
      </div>
          <div id="genderimage" class="form-group">
            <label for="gender">Gender</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="male" checked>Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="female">Female
              </label>
            </div>
          </div>
          
          <!-- <div></div> -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="registerSubmit">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
        
      </div>
    </div>
  </div>
  
</div>  <!-- Container div -->

<!-- SIDEBAR FOR NAVIGATION-->

</head>
<body>

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
<!--<iframe src="videos.latest.php" class = "frame" align="middle" scrolling="yes" height="500" frameborder="0" style=" position: relative; left:255px; max-width: 100%; max-height: auto; top: 25%; width: 800px" ></iframe> -->

<!-- PROFILE PICTURE BASED ON GENDER 

//<?php

//if(isset($_POST['gender'])){
  //$gender = $_POST['gender'];
  //if ($gender=='female') {
    //$_SESSION['gender']='female';
    //$profileimage = "/metube/woman.png";
  //}
 // else if($gender == 'male') {
   // $_SESSION['gender']='male';
   // $profileimage = "/metube/man.png";
  //}
//}

//?> -->

<?php

if(isset($_POST['registerSubmit'])){
// echo "registration form submitted";
// echo "<br>";
if(filter_has_var(INPUT_POST, "username") && filter_has_var(INPUT_POST, "password") && 
filter_has_var(INPUT_POST, "firstname") && filter_has_var(INPUT_POST, "email") && 
filter_has_var(INPUT_POST, "gender") && filter_has_var(INPUT_POST, "dateofbirth")){
  // echo "in";
// echo "<br>";
  if(filter_has_var(INPUT_POST, "lastname")){
    $query = register_query($_POST["username"],$_POST["password"],
              $_POST["firstname"],$_POST["gender"],$_POST["dateofbirth"],
              $_POST["email"],$_POST["lastname"]
            );
  }else{
    $query = register_query($_POST["username"],$_POST["password"],
              $_POST["firstname"],$_POST["gender"],$_POST["dateofbirth"],
              $_POST["email"]
            );
  }

  // echo $query;
  // echo "<br>";

  $qi = new queryImplementation();
  $result = $qi->run_query($query);
  if($result){
    
    if($qi->commit()){
      $cur_dir = getcwd()."/users";
      if(!is_dir($cur_dir."/".$_POST["username"])) {
      mkdir($cur_dir."/".$_POST["username"]."/videos",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/audio",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/images",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/graphics",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/playlists",0777,true);

      mkdir($cur_dir."/".$_POST["username"]."/"."public"."/"."videos",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."public"."/"."audio",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."public"."/"."images",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."public"."/"."graphics",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."public"."/"."playlists",0777,true);

      mkdir($cur_dir."/".$_POST["username"]."/"."private"."/"."videos",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."private"."/"."audio",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."private"."/"."images",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."private"."/"."graphics",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."private"."/"."playlists",0777,true);

      mkdir($cur_dir."/".$_POST["username"]."/"."family"."/"."videos",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."family"."/"."audio",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."family"."/"."images",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."family"."/"."graphics",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."family"."/"."playlists",0777,true);
      
      mkdir($cur_dir."/".$_POST["username"]."/"."friends"."/"."videos",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."friends"."/"."audio",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."friends"."/"."images",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."friends"."/"."graphics",0777,true);
      mkdir($cur_dir."/".$_POST["username"]."/"."friends"."/"."playlists",0777,true);

      mkdir($cur_dir."/".$_POST["username"]."/"."profilepictures",0777,true);
      }

      // echo "Registered Successfully. kindly login to proceed";
      echo '<script type="text/javascript">toastr.success(\'Registered Successfully. Kindly login to proceed.\')</script>';
    }else{
      echo '<script type="text/javascript">toastr.error(\'Server Error. Please try again.\')</script>';
      // echo "unable to commit. Kindly register after some time";
      $query2 = remove_registered_user($_POST["username"]);
      $result = $qi->run_query();
      // echo "<br> Error to commit <br>";
      // echo $result;
    }

  }
  else{
    echo "<br>Error in result <br>";

    $error =  $qi->get_error();
    echo '<script type="text/javascript">toastr.error(\'Error Registering. - ERROR : $error.\')</script>';
    // echo $error;
    // echo "<br>";
    if(preg_match("/Duplicate entry/", $error) && preg_match("/PRIMARY/", $error)){
      // echo "invalid primary key";
      // echo '<script type="text/javascript">notification($error,\'error \' ); </script>';
      echo '<script type="text/javascript">toastr.error(\'Error Registering. Kindly try after some time.\')</script>';
    }
  }


}
}//register


if(isset($_POST['loginSubmit'])){
  // echo "login form submitted";
  // echo "<br>";
  if(filter_has_var(INPUT_POST,"username")){
    if(filter_has_var(INPUT_POST,"password")){
      $query = login_query($_POST["username"],$_POST["password"]);
      // echo $query;
      // echo "<br>";
      $qi = new queryImplementation();
      $result = $qi->run_query($query);
      if(mysqli_num_rows($result) > 0){

        while($line= mysqli_fetch_array($result,MYSQLI_ASSOC)){
          //echo "storing session var";
          $_SESSION["username"] = $line["username"];
          $_SESSION["firstname"] = $line["firstname"];
          $_SESSION["lastname"] = $line["lastname"];
          $_SESSION["email"] = $line["email"];
          $_SESSION["dateofbirth"] = $line["dob"];
          $_SESSION["gender"] = $line["gender"];
          $_SESSION["lastname"] = $line["lastname"];
          
        }
        //$_SESSION["username"] = $_POST["username"];

        // echo substr($_SERVER["PHP_SELF"],0,strrpos($_SERVER["PHP_SELF"],"/")+1)."profile.php";
        $nextPage = substr($_SERVER["PHP_SELF"],0,strrpos($_SERVER["PHP_SELF"],"/")+1)."profile.php";
        // echo "<br>";
        // echo $_SERVER["PHP_SELF"];
        redirect($nextPage);
      }else{
        // define error
        echo '<script type="text/javascript">toastr.error(\'Invalid username and password.\')</script>';
        // echo "invalid username and password";
      }

    }
  }
  
  
}
?>

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

</script>
</body>
</html>