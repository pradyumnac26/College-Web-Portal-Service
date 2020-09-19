<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="stylesheetz.css">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.error {color: #FF0000;}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: white;
  color: black;
}

h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:Black;
  text-align: center; 
  text-decoration: underline
}

table{
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  border-collapse: collapse; 
  border: 2px solid white
}
table.inner{
  border: 100px
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
</style>

<script type = "text/javascript">
                 <!--

            function Redirect() {
               window.location = "Homepage.html";
            }
            setTimeout('Redirect()', 1000000);

            function Inform() {
               alert ("Your Data has been recorded");
               window.location = "execute2.php";
            }
         //-->

</script>
</head>
<body>


<div class="header">
  <h1>ADMIN Portal</h1>
  
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
      <?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $mobilenumberErr = $genderErr = $cityErr = $pincodeErr = $stateErr= "";
$firstname = $lastname =  $email = $mobilenumber = $gender = $Address = $city = $pincode = $state = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["mobilenumber"])) {
    $mobilenumberErr = "mobilenumber is required";
  } else {
    $mobilenumber = test_input($_POST["mobilenumber"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{10}+$/",$mobilenumber)) {
      $mobilenumberErr = "Only numbers are allowed";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["pincode"])) {
    $pincodeErr = "pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{10}+$/s",$pincode)) {
      $pincodeErr = "Only numbers are allowed";
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["state"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
      $stateErr = "Only letters and white space allowed";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3>LECTURER REGISTRATION FORM</h3>
<p><span class="error">* required field</span></p>
<form action="execute2.php" method="post">

<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="firstname" maxlength="30" required>
<span class="error">* <?php echo $firstnameErr;?></span>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lastname" maxlength="30" required>
<span class="error">* <?php echo $lastnameErr;?></span>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
<option value="-1">Year:</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>

<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
 
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
 
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100" maxsize="100" required>
<span class="error">* <?php echo $emailErr;?></span></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobilenumber" maxlength="10" required>
<span class="error">* <?php echo $mobilenumberErr;?></span>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
Other<input type="radio" name="gender" value="Other" />
<span class="error">* <?php echo $genderErr;?></span>
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" maxlength="30" required>
<span class="error">* <?php echo $cityErr;?></span>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pincode" maxlength="6" required>
  <span class="error">* <?php echo $pincodeErr;?></span>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" maxlength="30" required>
  <span class="error">* <?php echo $stateErr;?></span>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="country" value="India" readonly="readonly" >
</td>
</tr>
 

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
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
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board" maxlength="30" /></td>
<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
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
<td><textarea name="AreaofInterest" rows="2" cols="30"></textarea></td>
</tr>
 
 <!----- Subjects Handled  ---------------------------------------------------------->
<tr>
<td>Subjects Handled  <br /><br /></td>
<td><textarea name="SubjectsHandled" rows="2" cols="30"></textarea></td>
</tr>
 
<!----- teaching experience ---------------------------------------------------------->
<tr>
<td>Experience </td>
<td>Teaching :
<select name="Teaching_Experience" id="Teaching_Experience">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>

<!-----Year of Joining--------------------------------------------------->
<tr>
<td>Date of Joining RVCE</td>
 
<td>
<select name="Join_Day" id="Join_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Join_Month" name="Join_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Join_Year" id="Join_Year">
<option value="-1">Year:</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
</select>
</td>
</tr>
<!----- publication details ------------------------------------------------->
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr>
<td>PUBLICATION DETAILS</td>

<!----- International Journals ------------------------------------------------->
<tr>
<td>International Journals</td>
<td>
<select name="InternationalJournalsnumber" id="InternationalJournals">
<option value="-1">  </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td>
</tr>

<tr>
<td> </td>
<td><abbr title="Enter details here"><textarea name="InternationalJournals" rows="4" cols="30"></textarea></abbr></td>
</tr>
<!----- International Conferences ------------------------------------------------->
<tr>
<td>International Conferences</td>
<td>
<select name="InternationalConferencesnumber" id="InternationalConferences">
<option value="-1">  </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td>
</tr>

<tr>
<td> </td>
<td><abbr title="Enter details here"><textarea name="InternationalConferences" rows="4" cols="30"></textarea></abbr></td>
</tr>

<!----- International Symposium ------------------------------------------------->
<tr>
<td>International Symposium</td>
<td>
<select name="InternationalSymposiumnumber" id="InternationalSymposium">
<option value="-1">  </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td>
</tr>

<tr>
<td> </td>
<td><abbr title="Enter details here"><textarea name="InternationalSymposium" rows="4" cols="30"></textarea></abbr></td>
</tr>
<!----- Awards ------------------------------------------------->
<tr>
<td>Awards</td>
<td>
<select name="Awardsnumber" id="Awards">
<option value="-1">  </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td>
</tr>

<tr>
<td> </td>
<td><abbr title="Enter details here"><textarea name="Awards" rows="4" cols="30"></textarea></abbr></td>
</tr>
</tr>
<!----- Awards ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit">Submit</button>
<button type="reset">Reset</button>
</td>
</tr>
</table>
 
</form>
  
</div>
</div>

</body>
</html>