<?php

$fname = "";
$lname = "";
$country = "";
$subject = "";

if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
if($fname !=''&& $lname !=''&& $country !=''&& $subject !='')
{
//  To redirect form on a particular page
header("location:index.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
print_r(error_get_last());
?>