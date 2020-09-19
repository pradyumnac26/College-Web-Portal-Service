<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: white;
  color: black;
}

/* Style the header */
.header {
  padding: 80px;
  text-align: center;
  background: #ADD8E6;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
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
  background-color: #ddd;
  color: black;
}

.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #f1f1f1;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #555;
  color: white;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 20%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 80%;
  background-color: white;
  padding: 20px;
}

.dark-mode {
  background-color: black;
  color: white;
}
/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 61.52%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}


</style>

<script>
  <!--

            function LetMeKnow() {
               var password = document.getElementById("myInput").value;
               var confirmPassword = document.getElementById("myConfirmationInput").value;
               if (password != confirmPassword) {
                 alert("Passwords do not match.");
                 return false;
                }
                document.write ("This is a warning message!");
                 return true;
            }
            function checkFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                   x.type = "text";
                } else {
                   x.type = "password";
                }
            }
         //-->
</script>
</head>
<body>


<div class="header">
  <h1>ADMIN Portal</h1>
  <p>Go change the world.</p>
</div>

<div class="navbar">
  <a href="Homepage.html">Home</a>
  <a href="#">Help</a>
 <!-- <a href="#">About</a> -->
  <a href="Homepage.html" class="right">Signout</a>
</div>

<div class="row">
  <div class="side">
    <h2>Profile</h2>
    <p>Name : ADMIN </p>
    <p>Dept : ECE </p>  
  </div>
  <div class="main">
    <h2>The Input Recorded:</h2>
     <table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td>:</td>
<td><?php echo $_POST["firstname"]; ?>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td>:</td>
<td><?php echo $_POST["lastname"]; ?>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
<td>:</td>
<td>
<?php echo $_POST["Birthday_day"]; ?> / <?php echo $_POST["Birthday_Month"]; ?> / <?php echo $_POST["Birthday_Year"]; ?>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td>:</td>
<td><?php echo $_POST["email"]; ?></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>:</td>
<td>
<?php echo $_POST["mobilenumber"]; ?>
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>:</td>
<td>
<?php echo $_POST["gender"]; ?>
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td>:</td>
<td><?php echo $_POST["Address"]; ?></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td>:</td>
<td><?php echo $_POST["city"]; ?>
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td>:</td>
<td><?php echo $_POST["pincode"]; ?>
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td>:</td>
<td><?php echo $_POST["state"]; ?>
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td>:</td>
<td><?php echo $_POST["country"]; ?>
</tr>
 

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 <td>:</td>
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><?php echo $_POST["ClassX_Board"]; ?></td>
<td><?php echo $_POST["ClassX_Percentage"]; ?></td>
<td><?php echo $_POST["ClassX_YrOfPassing"]; ?></td>
</tr>
 
<tr>
<td>2</td>
<td>ClassXII</td>
<td><?php echo $_POST["ClassXII_Board"]; ?></td>
<td><?php echo $_POST["ClassXII_Percentage"]; ?></td>
<td><?php echo $_POST["ClassXII_YrOfPassing"]; ?></td>
</tr>
 
<tr>
<td>3</td>
<td>Bachelor's</td>
<td><?php echo $_POST["Graduation_Board"]; ?></td>
<td><?php echo $_POST["Graduation_Percentage"]; ?></td>
<td><?php echo $_POST["Graduation_YrOfPassing"]; ?></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><?php echo $_POST["Masters_Board"]; ?></td>
<td><?php echo $_POST["Masters_Percentage"]; ?></td>
<td><?php echo $_POST["Masters_YrOfPassing"]; ?></td>
</tr>

 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
<!----- Area of Interest ---------------------------------------------------------->
<tr>
<td>Area of Interest  <br /><br /></td>
<td>:</td>
<td><?php echo $_POST["AreaofInterest"]; ?></td>
</tr>
 
 <!----- Subjects Handled  ---------------------------------------------------------->
<tr>
<td>Subjects Handled  <br /><br /></td>
<td>:</td>
<td><?php echo $_POST["SubjectsHandled"]; ?></td>
</tr>
 
<!----- teaching experience ---------------------------------------------------------->
<tr>
<td>Experience </td>
<td>:</td>
<td>Teaching :<?php echo $_POST["Teaching_Experience"]; ?>
<tr>
<!-----Year of Joining--------------------------------------------------->
<td>Date of Joining RVCE</td>
 <td>:</td>
<td>
<?php echo $_POST["Join_Day"]; ?> / <?php echo $_POST["Join_Month"]; ?> / <?php echo $_POST["Join_Year"]; ?>
</td>
</tr>
<!----- publication details ------------------------------------------------->
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr>
<td>PUBLICATION DETAILS</td>
<td>:</td>

<!----- International Journals ------------------------------------------------->
<tr>
<td>International Journals</td>
<td>
<?php echo $_POST["InternationalJournalsnumber"]; ?>
</td>
</tr>

<tr>
<td> </td>
<td><?php echo $_POST["InternationalJournals"]; ?></td>
</tr>
<!----- International Conferences ------------------------------------------------->
<tr>
<td>International Conferences</td>
<td>
<?php echo $_POST["InternationalConferencesnumber"]; ?>
</td>
</tr>

<tr>
<td> </td>
<td><?php echo $_POST["InternationalConferences"]; ?></td>
</tr>

<!----- International Symposium ------------------------------------------------->
<tr>
<td>International Symposium</td>
<td>
<?php echo $_POST["InternationalSymposiumnumber"]; ?>
</td>
</tr>

<tr>
<td> </td>
<td><?php echo $_POST["InternationalSymposium"]; ?></td>
</tr>
<!----- Awards ------------------------------------------------->
<tr>
<td>Awards</td>
<td>
<?php echo $_POST["Awardsnumber"]; ?>
</td>
</tr>

<tr>
<td> </td>
<td><?php echo $_POST["Awards"]; ?></td>
</tr>
</tr>
</table>

<h2>Enter USERNAME and PASSWORD for lecturer to login</h2>
<form method="post" action="exportexecuteteach.php">
<table align="center" cellpadding = "10">
<tr>
<td>USERNAME</td>
<td>:</td>
<td><input type="text" placeholder="Enter USN/Username" name="uname" maxlength="30" required>
</td>
</tr>
 
<!----- Password ---------------------------------------------------------->
<tr>
<td>PASSWORD</td>
<td>:</td>
<td><input type="password" placeholder="password" name="psw" id="myInput" required></td>
<td><input type="checkbox" onclick="checkFunction()">Show Password</td>
</tr>

<tr>
<td>RE-TYPE PASSWORD</td>
<td>:</td>
<td><input type="password" placeholder="retype password" name="psw2" id="myConfirmationInput" required></td>
<td><input type="checkbox" onclick="checkFunction()">Show Password</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value = "Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table> 
   <?php
   if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) ||empty($_POST["mobilenumber"]) || empty($_POST["gender"])||empty($_POST["Address"]) || empty($_POST["city"]) || empty($_POST["pincode"]) || empty($_POST["state"]) )
     {
       header("Location: teachregedit.php");
     }
   ?>

  
  </div>
</div>

</body>
</html>