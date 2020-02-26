<?php
// $date = "1983-02-10";
// $newFormat = DateTime::createFromFormat('Y-m-d', $date);
// echo $newFormat->format('m-d-Y');



$date1='1999-02-17';
echo($date1);
echo "<br>";
$newdate = date_format(date_create_from_format('Y-m-d', $date1),'m-d-Y'); 
echo $newdate;



?>