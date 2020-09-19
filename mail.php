<?php
$name = $_POST['name'];
$email = $_POST['email'];
$usn = $_POST['usn'];
$priority = $_POST['priority'];
$message = $_POST['message'];
$formcontent=" From: $name \n USN:$usn \n Priority: $priority \n Message: $message";
$recipient = "maanasmakam@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

echo '<script type="text/javascript">

          window.onload = function () { alert("Are you sure to submit?"); }

</script>';

print " Thank you!!";
echo "\n";
print " Your counseling appointment will be scheduled at the earliest.  ";
echo ' <a href="proj1.html">Click here to return</a>';

?>
