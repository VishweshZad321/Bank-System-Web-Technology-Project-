<?php
session_start();
// Set session variables

$_SESSION["Customerid"] =$_POST['txtcustomerid'] ;
$id=$_SESSION["Customerid"];
$_SESSION["CustomerFname"] =$_POST['txtfn'] ;
$_SESSION["CustomerMname"]=$_POST['txtmn'];
$_SESSION["CustomerLname"]=$_POST['txtln'];
$_SESSION["CustomerGender"]=$_POST['Gender'];
$Gender=$_SESSION["CustomerGender"];


$_SESSION["Customeropeningdate"] = date('d-m-y', strtotime($_POST['dated']));
$_SESSION["Customermobileno"]=$_POST['txtmno'];
$_SESSION["Customeremailid"]=$_POST['txtemailid'];
$_SESSION["Customerpanno"]=$_POST['txtpanno'];
$_SESSION["Customeradharno"]=$_POST['txtadharno'];
 $filename    = $_FILES["image"]["tmp_name"];
    $destination = "CustomerImages/" . $_FILES["image"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    $_SESSION['CustomerImage'] = $destination;
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>Customer Address</title>
    <script>
        

    </script>
    <style>
        #btn1
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
            width: 60%;
            color:black;
            padding:5px;
            font-size: 18px;
            cursor: pointer;
            margin: 13px;
        }
        #btn2
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
            width: 60%;
            color:black;
            padding:5px;
            font-size: 18px;
            cursor: pointer;
            margin: 13px;
        }
        #btn3
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
            width: 60%;
            color:black;
            padding:5px;
            font-size: 18px;
            cursor: pointer;
            margin: 13px;
        }
        #btn4
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
            width: 60%;
            color:black;
            padding:5px;
            font-size: 18px;
            cursor: pointer;
            margin: 13px;
        }
        #tableaddress
        {
            background-color: #ffffff;
            background-image: linear-gradient(315deg, #ffffff 0%, #cea177 74%);
            border-radius:10px ;
            transform: translate(15%,-15%);
        }
    </style>
    <link rel="stylesheet" type="text/css" href="c_details.css"/>
</head>
<body onload="doOnLoad();" bgcolor="#fff8dc">
<div id="holder"><a><img src="bank1.jpg" width="200px" height="100px"/></a>
    <div id="header">

        <ul>
            <li><a href="empsearch.php">Employee Details</a></li>
            <li><a href="transaction.php">Transaction</a></li>
            <li><a href="account_details.php">Account Details</a></li>
            <li><a href="Customer_details.php">NEW Customer</a></li>
            <li><a href="MDI.html">Home</a></li>
        </ul>
        <div id="holder1"><div>
            <div id="header1">

                <ul>
                    <li><a href="Customer_details.html">Back</a></li>
                </ul>
            </div>
        <div id="ab">
            <br>
<form name="personal" action="account_Addition.php" onsubmit="" method="post" autocomplete="on">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="20" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Customer Address</b></font></td>
        </tr>
		<tr>
		<td><b>Customer Id<b><span style="color:red">*</span></td>
            <td><input type="text" name="txtcustomerid1" size="10" value="<?php echo $id ?>" disabled></td>
		</tr>
        <tr>
            <td>Flat No./Plot No.<span style="color:red">*</span></td>
            <td colspan="2"><input type="text" name="txtflatno" size="10"></td>

        </tr>
        <tr>
            <td>Address<span style="color:red">*</span><br><input type="text" name="txtad" size="30" style="height: 60px;"></td>
            <td>Street<span style="color:red">*</span><br><input type="text" name="txtst" size="30"></td>
            <td>City<span style="color:red">*</span><br><input type="text" name="txtcity" size="30"></td>
		
			</tr>
        <tr>
			    <td>State<span style="color:red">*</span><br><input type="text" name="txtstate" size="30"></td>
            <td>Country<span style="color:red">*</span><br><input type="text" name="txtcountry" size="30"></td>
			<td>Pincode<span style="color:red">*</span><br><input type="text" name="txtpincode" size="30"></td>
		
	   </tr>
        <tr>
            <td colspan="3" align="center">
                <button value="Submit" type="Submit" id="btn1"  style="width:120px; height: 40px;"> Submit</button>&nbsp;&nbsp;&nbsp;
                <button value="Reset" id="btn4" style="width:120px; height: 40px;">Clear</button></td>
        </tr>
    </table>

</form>
<?php


$Customerid=$_SESSION["Customerid"];
$CustomerFname=$_SESSION["CustomerFname"];
$CustomerMname=$_SESSION["CustomerMname"];
$CustomerLname=$_SESSION["CustomerLname"];
$CustomerGender=$_SESSION["CustomerGender"];
$Customeropeningdate=$_SESSION["Customeropeningdate"]; 
$Customermobileno=$_SESSION["Customermobileno"];
$Customeremailid=$_SESSION["Customeremailid"];
$Customerpanno=$_SESSION["Customerpanno"];
$Customeradharno=$_SESSION["Customeradharno"];
$Customerimage=$_SESSION['CustomerImage'];

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

$sql=("insert into customer_details(Customer_ID,First_Name,Middle_Name,Last_Name,Gender,Date_Of_Birth,Phoneno1,Email_ID,Pan_Card,Addhar_Card,Image) values ('$Customerid','$CustomerFname','$CustomerMname','$CustomerLname','$CustomerGender','$Customeropeningdate','$Customermobileno','$Customeremailid','$Customerpanno','$Customeradharno','$Customerimage')" );
	if (mysqli_query($conn, $sql)) {
		echo"Values Saved";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</body>
</html>