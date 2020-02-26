<?php
include_once('condition.php');
//1.
if(empty($fname) || empty($lname) || empty($mname)|| empty($address) 
    || empty($contact) || empty($bday) || empty($pbirth) || empty($select_gender)
    || empty($guardian)|| empty($civilstatus) || empty($yearlevel)
    || empty($course)|| empty($schoolyear) || empty($email)) 
{
    echo "Warning : Please fill up everything. <br>";
}
//1.
if(isEmpty($fname) || isEmpty($lname) || isEmpty($mname)|| isEmpty($address) 
    || isEmpty($contact) || isEmpty($bday) || isEmpty($pbirth) || isEmpty($select_gender)
    || isEmpty($guardian)|| isEmpty($civilstatus) || isEmpty($yearlevel)
    || isEmpty($course)|| isEmpty($schoolyear) || isEmpty($email)) 
{
    echo "Error : Null input is not valid. <br>";
}
//2.
// if(Newdateformat($bday)){
// }
//3.
if (isNumbers($contact)){
    echo "Error : Contact must be number. <br>";
}
//4.
if (Checkcontact($contact)){
    echo "Error : Invalid input of contact number. Check it's lenght. Prefix must start with +63 <br>";
}
//5.
if (correctLenght($fname)){
    echo "Error : First name is too short. <br>";
}
if (correctLenght($lname)){
    echo "Error : Last name is too short. <br>";
}
//6.
//  if (startWithSpecialChar($fname) || startWithSpecialChar($lname) 
// || startWithSpecialChar($mname)|| startWithSpecialChar($address) 
// || startWithSpecialChar($pbirth)|| startWithSpecialChar($guardian)
// || startWithSpecialChar($civilstatus) || startWithSpecialChar($schoolyear) 
// || startWithSpecialChar($email)){
//     echo "inputs should not start with special character (ex. !,#,*..) <br>";
// }
if (startWithSpecialChar($fname)){
    echo "Error : First name should not start with special character(ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($lname)){
    echo "Error : Last name should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($mname)){
    echo "Error : Middle name should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($address)){
    echo "Error : Address should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($pbirth)){
    echo "Error : Place of birth should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($guardian)){
    echo "Error : Guardian name should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($civilstatus)){
    echo "Error : Civil status should not start with special character (ex. !,#,*..) or space.<br>";
}
if (startWithSpecialChar($schoolyear)){
    echo "Error : School Year should not start with special character or space (ex. !,#,*..), it is year (number). <br>";
}
if (startWithSpecialChar($email)){
    echo "Error : E-mail should not start with special character (ex. !,#,*..) or space. <br>";
}
//7.
if (startWithNumber($fname) || startWithNumber($lname) || startWithNumber($mname)
|| startWithNumber($pbirth) || startWithNumber($select_gender)
|| startWithNumber($guardian)|| startWithNumber($civilstatus)
|| startWithNumber($course) || startWithNumber($email)){
    echo "Error : Inputs must not start with number. <br>";
}
//8.
if (containHtmlTags($fname) || containHtmlTags($lname) || containHtmlTags($mname)|| containHtmlTags($address) 
|| containHtmlTags($contact) || containHtmlTags($pbirth) || containHtmlTags($guardian)|| containHtmlTags($civilstatus) 
|| containHtmlTags($yearlevel)|| containHtmlTags($email)){
    echo "Error : HTML Tags are not allowed. <br>";
}
//9.
if (checkEmail($email)){
    echo "Error : Invalid email format. <br>";
}
// for year
if (yearlenght($schoolyear)){
    echo "Error : Invalid School year, it must be year (ex. 2001). <br>";
}
?>