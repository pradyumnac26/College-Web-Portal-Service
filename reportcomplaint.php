<html>
<head>

</head>

<body>
<?php
$usn = $_POST['usn'];
$email = $_POST['email'];
$priority = $_POST['priority'];
$message = $_POST['message'];
$formcontent=" USN:$usn \n Priority: $priority \n Message: $message";
$recipient = "dhanushu1999@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

echo '<script type="text/javascript">

          window.onload = function () { alert("Are you sure to submit?"); }

</script>';

print " Thank you!!";
echo ' <a href="complaint.html">Click here to return</a>';

?>
<h1>YOUR MAIL HAS BEEN RECORDED</h1>
<h3>A mail will be sent to your account after consideration of the report</h3>
</body>
</html>