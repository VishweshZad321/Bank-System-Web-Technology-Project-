<?php
session_start();
$cid=$_SESSION['Customerid'];
//$accountno=$_POST['txtaccno'];
$accounttype=$_POST['account_type'];
$balance=$_POST['txtbalance'];
$ifsc=$_POST['txtifsc'];
$micr=$_POST['txtmicr'];
$da=Date('d-m-y');

//echo $accountno;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql=("insert into Account_Details(Account_No,Account_Type,Balance,IFSC,MICR_Code,Account_Opening_Date,Customer_ID) Values('$cid','$accounttype','$balance','$ifsc','$micr','$da','$cid')");	

	if (mysqli_query($conn, $sql)) {
	include "successful.html";	
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
