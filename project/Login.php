<?php
// Set session variables
$_SESSION["Username"] =$_POST['txtusername'] ;
$_SESSION["Password"] =$_POST['txtpassword'];
$username1=$_SESSION["Username"];
$password1=$_SESSION["Password"];
echo "Welecome";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";
echo $username1;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Username,Password FROM Employee_Login WHERE Username='$username1' and Password='$password1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		header("location:MDI.html");
    }
} else {
	
    header("refresh:0;url=newlogin.php");
}

mysqli_close($conn);
?>
