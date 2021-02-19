<?php
$firstname=$_POST['txtfn'];
$middlename=$_POST['txtmn'];
$lastname=$_POST['txtln'];
$gender=$_POST['Gender'];
$new_date = date('d-m-y', strtotime($_POST['dated']));
$mobileno=$_POST['txtmno'];
$emailid=$_POST['txtemailid'];
$panno=$_POST['txtpanno'];
$adharno=$_POST['txtadharno'];

echo $firstname;
echo $lastname;
echo $middlename;
echo $gender;
echo $new_date;
echo $mobileno;
echo $emailid;
echo $panno;
echo $adharno;
?>

