
<HTML>
<head><title>Registration Successful</title>
</head>
<body bgcolor="RED">
<h1 align="Center"> Registration of Employee Successful</h1>
<h1><a href="newlogin.php" ><p align="Center">BACK</p></a></h1>
</body>
</html>
<?php
$empid=$_POST["txtempid"];
 //$filename    = $_FILES["image"]["tmp_name"];
   // $destination = "CustomerImages/" . $_FILES["image"]["name"]; 
   // move_uploaded_file($filename, $destination); //save uploaded picture in your directory
//$location=$destination;
    
$Firstname=$_POST["txtfn"];
$Middlename=$_POST["txtmn"];
$Lastname=$_POST["txtln"];
$gender=$_POST["Gender"];
$date1 = date('d-m-y', strtotime($_POST['dated']));
$mobileno=$_POST["txtmno"];
$emailid=$_POST["txtemailid"];
$post=$_POST["txtpost"];
$pancard=$_POST["txtpc"];
$adharcard=$_POST["txtac"];

$flatno=$_POST["txtflatno"];
$address=$_POST["txtad"];
$streetname=$_POST["txtst"];
$city=$_POST["txtcity"];
$state=$_POST["txtstate"];
$country=$_POST["txtcountry"];
$pincode=$_POST["txtpincode"];

$username1=$_POST["txtusername"];
$password1=$_POST["txtpassword"];



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

$sql=("insert into employee_details(Employee_ID,First_Name,Middle_Name,Last_Name,Gender,Date_Of_Birth,Phoneno1,Email_ID,Pan_Card,Addhar_Card,Post) values ('$empid','$Firstname','$Middlename','$Lastname','$gender','$date1','$mobileno','$emailid','$pancard','$adharcard','$post')" );
	if (mysqli_query($conn, $sql)) {
		echo"Values Saved";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql=("insert into employee_address_details(Block_NO,Landmark,Streetname,City,State,Country,Pincode,Employee_ID)Values ('$flatno','$address','$streetname','$city','$state','$country','$pincode','$empid')");
if (mysqli_query($conn, $sql)) {
		echo"Values Saved";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql=("insert into employee_login(Username,Password,Employee_ID) Values('$username1','$password1','$empid')");

if (mysqli_query($conn, $sql)) {
		echo"Values Saved";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);





?>