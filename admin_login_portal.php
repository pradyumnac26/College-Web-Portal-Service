<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheetz.css">
<head>
    <title>Admin | Login</title>
</head>

<body>

  <?php
    $err = "";
    $the_big_array = []; 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(($_POST["uname"] == "admin") && $_POST["pswd"] == "admin")
          { $yes = 1;}
        if($yes == 1)
        {
          header('Location: teachregedit2.php');
        }
        else{
          $err = "Incorrect username or password";
        }
    }
  ?>

  <div class="header">
      <h1>Admin Login Portal</h1>
  </div>

  <div class="navbar">
      <a href="Homepage.html"><i class="fa fa-fw fa-home"></i>Home</a>
      <a href="student_login_portal.php"><i class="fa fa-fw fa-user"></i>Student</a>
      <a class="active" href="teachers_login_portal.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Teacher</a>
      <a href="parents_login_portal.php"><i class="fa fa-fw fa-user"></i>Parents</a>
  </div>

  <div id="id01" >

      <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="imgcontainer">
          <img src="program-promise-developer-icon.svg" alt="Avatar" class="avatar">
        </div>
    
        <div class="container" style="padding-bottom: 14px;">
          <label><span class="error"><?php echo $err;?><br></span></label>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pswd" required>

        </div>
        <button type="submit">Login</button>
          <label class ="check">
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
      </form>
    </div>

  <div class="row" id = "Footer">
      <div class="side" id = "Footer">
          <a ><h5>Contact US</h5></a>
          <a href="https://www.gmail.com/"><h4><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></h4></a>
          <a href="https://www.youtube.com/"><h3><i class="fa fa-youtube" aria-hidden="true"></i></h3></a>
          <a href="https://www.twitter.com/"><h3><i class="fa fa-twitter" aria-hidden="true"></i></h3></a>
          <a href="https://www.linkedin.com/"><h3><i class="fa fa-linkedin" aria-hidden="true"></i></h3></a>
          <a href="feedback.html"><h5>Feedback</h5></a>
      </div>
      <div class="main" id = "Footer">
          <h5>Copyright 2019-20</h5>
      </div>
  </div>
</body>

</html>