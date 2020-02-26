<?php 
include_once('function.php');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mname=$_POST['middlename'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$bday=$_POST['bday'];
$pbirth=$_POST['pbirth'];
$select_gender = $_POST['gender'];
if ($select_gender == 'male') {
    //echo "male";
}
else if ($select_gender == 'female') {
   // echo "female";
}
$guardian=$_POST['guardian'];
$civilstatus=$_POST['civilstatus'];
$yearlevel=$_POST['yearlevel'];
$course=$_POST['course'];
$schoolyear=$_POST['schoolyear'];
$email=$_POST['email'];
#############################################
include_once('condition.php');

echo "<br><br><br><br><br>";

echo "First name: $fname <br>";
echo "Last name: $lname <br>";
echo "Middle name: $mname <br>";
echo "Address: $address <br>";
echo "Contact Number: $contact <br>";
echo "Date of Birth: ";
if($bday){
    $newFormat = DateTime::createFromFormat('Y-m-d', $bday);
    echo $newFormat->format('m-d-Y');
}
echo "<br>";
echo "Place of Birth: $pbirth <br>";
echo "Gender: $select_gender <br>";
echo "Name of Guardian: $guardian <br>";
echo "Civil status: $civilstatus <br>";
echo "Year level: $yearlevel <br>";
echo "Course: $course <br>";
echo "School year: $schoolyear <br>";
echo "E-mail address: $email <br>";








?>
