<?php
session_start();
// Set session variables

$_SESSION["Customerflatno"] =$_POST['txtflatno'] ;
$_SESSION["Customeraddress"]=$_POST['txtad'];
$_SESSION["Customerstreet"]=$_POST['txtst'];
$_SESSION["Customercity"]=$_POST['txtcity'];
$_SESSION["Customerstate"]=$_POST['txtstate'];
$_SESSION["Customercountry"]=$_POST['txtcountry'];
$_SESSION["Customerpincode"]=$_POST['txtpincode'];
$cid=$_SESSION["Customerid"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saving Acount</title>
	<script>
	</script>
    <style>
        #btn1
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
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
            transform: translate(5%,20%);
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
            <li><a href="Customer_details.php">Customer Details</a></li>
            <li><a href="MDI.html">Home</a></li>
        </ul>
	

        <div id="ab">
            <br>
<form name="personal" action="Insert.php" onsubmit="" method="post" autocomplete="on" enctype="form-data/multipart">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="24" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Account Details</b></font></td>
        </tr>
        <tr>
            <td colspan="3">Account Number<span style="color:red">*</span><input type="text" name="txtaccno" value="<?php echo $cid; ?>" size="50" disabled></td>
            </tr>
		<tr>
		 <td>Account Type<span style="color:red">*</span><br>
                <select name="account_type" style="width: 50%;">
                    <option value="Saving">SAVING</option>
                    <option value="Current">CURRENT</option>
                </select>
            <td colspan="3">Balance<span style="color:red">*</span><input type="number" name="txtbalance" size="30"></td>
        </tr>
        <tr>
            <td>IFSC Code<span style="color:red">*</span><br><input type="text" name="txtifsc" size="30"></td>
            <td colspan="2">MICR Code<span style="color:red">*</span><br><input type="text" name="txtmicr" size="30"></td>
        </tr>
         <tr>
            <td colspan="3" align="center">
                <button value="Submit" id="btn1"  style="width:120px; height: 40px;"> Submit</button>&nbsp;&nbsp;&nbsp;
                <button value="Reset" id="btn4" style="width:120px; height: 40px;">Clear</button></td>
        </tr>
    </table>

</form>
        </div>
    </div>
</div>

<?php


$cid=$_SESSION["Customerid"];
$Customerflatno=$_SESSION["Customerflatno"] ;
$Customeraddress=$_SESSION["Customeraddress"];
$Customerstreet=$_SESSION["Customerstreet"];
$Customercity=$_SESSION["Customercity"];
$Customerstate=$_SESSION["Customerstate"];
$Customercountry=$_SESSION["Customercountry"];
$Customerpincode=$_SESSION["Customerpincode"];


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


	$sql=("insert into Customer_Address_Details(Block_No,Landmark,Streetname,City,State,Country,Pincode,Customer_ID)Values ('$Customerflatno','$Customeraddress','$Customerstreet','$Customercity','$Customerstate','$Customercountry','$Customerpincode','$cid')");
	if (mysqli_query($conn, $sql)) 
	{
	echo "Values Saved"	;
    
	}
 else 
 {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>