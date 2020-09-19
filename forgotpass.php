<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheetz.css">

<head>
    <title>Forgot Password</title>
</head>

<body>
    <?php
    $err = $emailErr ="";
    $the_big_array = []; 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (($h = fopen("email.csv", "r")) !== FALSE) 
        {
        while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
        {
            $the_big_array[] = $data;		
        }
        $len = count($the_big_array);
        $yes = 0;
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        else {
            for($i=0;$i<$len;$i++)
            {
                if(($_POST["email"] == $the_big_array[$i][0]))
                { $yes = 1;}
            }
            if($yes == 1)
            {
                header('Location: forgotpass_submit.html');
            }
            else{
                $err = "Email doesnt exist";
            }
        }
        fclose($h);
        };
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>

    <div class="header">
        <h1>Forgot Password</h1>
    </div>

    <div class="navbar">        
        <a href="Homepage.html"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="student_login_portal.php"><i class="fa fa-user" aria-hidden="true"></i> Student</a>
        <a href="teachers_login_portal.php"><i class="fa fa-fw fa-user"></i>Teacher</a>
        <a href="parents_login_portal.php"><i class="fa fa-fw fa-user"></i>Parents</a>
    </div>

    <div id="id01" >
  
        <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="imgcontainer">
            <img src="continue-with-email-icon.svg" alt="Avatar" class="avatar">
          </div>
      
          <div class="container" style="padding-bottom: 14px;">
            <label><span class="error"><?php echo $err;?><br></span></label>
            <label><span class="error"><?php echo $emailErr;?><br></span></label>
            <label for="uname"><b>USN / Username</b></label>
            <input type="text" placeholder="Enter USN/Username" name="uname" required>
            <br>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br>
          </div>
          <button type="submit" name="submit" value="Submit" style="width: 200px;">Submit</button>
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