<!DOCTYPE html>
<?php
session_start();
include_once("queryFunctions.php");
include_once("queryImplementation.php");
?>

<html lang="en">
<head>
<title>Welcome to your Channel!</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    .header h1 {
  font-size: 40px;
}

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

#wrapper {
	position: relative;
	top: 25px;
	left: 24px;
	width: 1450px;
	height: 500px;
	border: 1px solid #ddd;
}
#profileimage {
	border: 2px solid #ddd ;
	padding: 5px;
	position: relative;
	top: 25px;
	left: 25px;
	width: 260px;
	height: 270px;
	cursor: pointer;
	float: left;
}

#profileinfo {
	position: relative;
	top: 25px;
	left: 170px;
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
  <img src="channel-default.png" style="width:100%; height:30%" alt="welcome to your metube channel!"> </img>
</div>

<nav class="navbar navbar-light">
  <a href="channel.php">Home</a>
  <a href="mediapage.php">Media</a>
  <a href="playlists.php">Playlists</a>
  <a href="gallery.php">Gallery</a>
  <a href="inbox.php">Inbox</a>
  <a href="discussion.php">Discussion</a>
  <!--<a href="settings.php" class="right">Settings</a>-->
</nav>

<div class="wrapper">
  <div class="row">
    <div class="col-sm-3">
    
      <div class="card" style="width:80%">

      <?php

        if($_SESSION["gender"]=="male"){
          echo '
      <img class="card-img-top" src="images/male.jpg" alt="Card image" style="width:80%;float: right;text-align: center;margin:20px 20px 5px 20px;">';
        }else{
          echo '
      <img class="card-img-top" src="images/female.png" alt="Card image" style="width:80%;float: right;text-align: center;margin:20px 20px 5px 20px;">';
        }

        ?>

    <a href="#uploadProfilePic" style="width:80%;margin-left:20px;" data-toggle="modal">Update Profile Image</a>
    <div class="card-body">

      <!-- <?php //echo '<h3 class="card-title">'.$_SESSION("username").'</h3>'; ?> -->
      <h3 class="card-title"><?php echo $_SESSION["firstname"] ?></h3>
      <!-- <h4 class="card-text"><?php // echo "lastname: ".$_SESSION["lastname"] ?></h4> -->
      <a href="#info" data-toggle="modal" class="btn btn-primary">See Profile</a>
      <a href="#passwordCheck" data-toggle="modal" class="btn btn-primary" style="margin-top:10px;">Update Profile</a>
    </div>
    
  </div>
  </div>
   <div class="col-sm-8">
    <h2> Welcome to Metube</h2>
    <?php echo $_SESSION['username'];
    echo $_SESSION['firstname'];
    echo $_SESSION['lastname'];
    echo $_SESSION['gender'];
    echo $_SESSION['dateofbirth'];
    echo $_SESSION['email'];
    ?>
    <p>A platform where you can view, upload, and download videos, images and graphics publicly and privately. Create your own channel and use the playlist feature to create sets of media to your liking. Interact with others, add friends, and share videos within groups. Create a channel today to get started and share and view media like never before!</p>
      <!-- <a href="#upload" data-toggle="modal" class="btn btn-primary">Upload</a> -->
      <table style="width:100%">
        <div><h4>Personal Information </h4></div>
  <tr>
    <th>Label</th>
    <th>Values</th>
  </tr>
  <tr>
    

    <td>Firstname</td>
    <td><?php echo $_SESSION["firstname"];?></td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><?php echo $_SESSION["lastname"];?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $_SESSION["email"];?></td>
  </tr>

  <tr>
    <td>Date of Birth(Year/Month/Date)</td>
    <td><?php echo $_SESSION["dateofbirth"];?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $_SESSION["gender"];?></td>
  </tr>
</table>
  </div>
</div>

<!-- 
<div id="wrapper">
	<img id="profileimage" src="snowman.jpg" alt="profile picture"></img>
	<div id="profileinfo">
 -->		
 <!--<?php 
 //echo "<b>NAME: </b><br><br>"; /*.$_SESSION["firstname"]." ".$_SESSION["lastname"];*/
		//echo "<b>BIRTHDAY: </b><br><br>";/*.$_SESSION["dob"];*/
		//echo "<b>EMAIL: </b><br><br><br>";/*.$_SESSION["email"];*/
		?>
    <button class="btn btn-primary" type="submit">Update Profile</button> 
	</div>
</div>
 -->

 <!-- The passwordCheck Modal -->
  <div class="modal fade" id="passwordCheck">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enter password to confirm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           
          <!-- <form action="action.php" id="loginForm" class="needs-validated" method="POST"> -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" id="loginForm" class="needs-validated" method="POST">
          <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password" id="password" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="passwordCheckButton" name="passwordCheckSubmit" data-toggle="modal" >Check</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        

</form>
      </div>
    </div>
  </div>



  <!-- the update modal -->
  <div class="modal fade" id="update">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Account Info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" class="needs-validated" method="POST" id="registrationForm">
          <div class="form-group">
            <label for="fname">FirstName</label>
            <input type="text" class="form-control" placeholder="Enter firstname" id="fname" name='firstname' value="<?php echo $_SESSION['firstname'];?>"  required> 
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="lname">Lastname</label>
            <input type="text" class="form-control" placeholder="Enter lastName" id="lname" name="lastname" value="<?php echo $_SESSION['lastname'];?>" >
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="<?php echo $_SESSION['email'];?>"  required>
            <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
         
          <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="dateofbirth">Date of birth</label>
        <input class="form-control" id="dateofbirth" name="dateofbirth" placeholder="MM/DD/YYY" type="text" value="<?php echo $_SESSION['dateofbirth'];?>"  />
      </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <div class="form-check">
              <label class="form-check-label">

                <?php
                // echo $_SESSION["gender"];
                if($_SESSION["gender"]=="male"){
                  echo '<input type="radio" class="form-check-input" name="gender" value="male" checked>Male ';
                }else{
                  echo '<input type="radio" class="form-check-input" name="gender" value="male">Male ';
                }

                ?>

                <!-- <input type="radio" class="form-check-input" name="gender" value="male" >Male --> 
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <!-- <input type="radio" class="form-check-input" name="gender" value="female" >Female -->
                <?php

                if($_SESSION["gender"]=="female"){
                  echo '<input type="radio" class="form-check-input" name="gender" value="female" checked>Female ';
                }else{
                  echo '<input type="radio" class="form-check-input" name="gender" value="female">Female ';
                }

                ?>
              </label>
            </div>
          </div>
          
          <!-- <div></div> -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="updateButton" name="updateSubmit" data-toggle="modal" >update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
        
      </div>
    </div>
  </div> 



<?php 
 if( isset($_POST['passwordCheckSubmit'])) {
  // if(array_key_exists('passwordCheckSubmit', $_POST)) { 
            
            // echo $_POST["password"];
            check_password($_POST["password"]);
            // echo "password Check";
        } 

if(isset($_POST['updateSubmit'])){
  // echo "update Submit test";
  $query = update_user_details($_SESSION["username"],
                              $_POST["firstname"],$_POST["gender"],$_POST["dateofbirth"],
              $_POST["email"],$_POST["lastname"]
              );


      $qi = new queryImplementation();
      $result = $qi->run_query($query);
      // echo "<br>";
      // echo $result;

      if ($result){
        // $_SESSION["username"] = $line["username"];
          $_SESSION["firstname"] = $_POST["firstname"];
          $_SESSION["lastname"] = $_POST["lastname"];
          $_SESSION["email"] = $_POST["email"];
          $_SESSION["dateofbirth"] = $_POST["dateofbirth"];
          $_SESSION["gender"] = $_POST["gender"];
          // $_SESSION["lastname"] = $line["lastname"];


        echo '<script type="text/javascript">toastr.success(\'Update Successful.\')</script>';
        // header("Refresh:0");
        redirect("profile.php");
      }
      else{
        echo '<script type="text/javascript">toastr.error(\'Update Unsuccessfull.Try Again.\')</script>';
      }
}


function check_password($password){
  $query = login_query($_SESSION["username"],$password);

      $qi = new queryImplementation();
      $result = $qi->run_query($query);

      if(mysqli_num_rows($result) > 0){
        echo "<script>$('#update').modal('show');</script>";
      }else{
        echo '<script type="text/javascript">toastr.error(\'Invalid password.\')</script>';
      }

}




?>
</body>
</html>
