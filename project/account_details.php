<?php
if(isset($_POST['search']))
{
$id=$_POST["id"];

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

$sql =("SELECT * FROM account_details WHERE Account_No='$id' ");
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
if(!$row)
{
	echo "<script> alert('Record NOT Found');</script>";
}

$cid=$row['Customer_ID'];
$sql2 =("SELECT * FROM customer_details WHERE Customer_ID='$cid' ");
$result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
$row2 = mysqli_fetch_array($result2);

mysqli_close($conn);
}
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
            transform: translate(5%,10%);
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
<form name="personal" action="" onsubmit="" method="post" autocomplete="on">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="24" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Account Details</b></font></td>
        </tr>
        <tr>
            <td colspan="3">Account Number<span style="color:red">*</span><input type="text" name="id" size="50">
			 <button name="search" value="Submit" id="btn1"  style="width:120px; height: 40px;">Search</button>&nbsp;&nbsp;&nbsp;
                
			</td>
            </tr>
		<?php
			if(isset($_POST['search']))
			{
		?>
		<tr>
		 <td>Account Type<span style="color:red">*</span><br>
                <select name="account_type" style="width: 50%;">
					<option value=""><?php echo $row['Account_Type'];?></option>
                    <option value="Saving">SAVING</option>
                    <option value="Current">CURRENT</option>
                </select>
            <td colspan="3">Balance<span style="color:red">*</span><input type="number" name="bl" size="30" value="<?php echo $row['Balance'];?>"></td>
        </tr>
        <tr>
            <td>IFSC Code<span style="color:red">*</span><br><input type="text" name="ic" size="30" value="<?php echo $row['IFSC'];?>"></td>
            <td colspan="2">MICR Code<span style="color:red">*</span><br><input type="text" name="mc" size="30" value="<?php echo $row['MICR_Code'];?>"></td>
        </tr>

        <tr>
            <td >Customer Id<span style="color:red">*</span><br><input type="text" name="ci" size="10" value="<?php echo $row['Customer_ID'];?>"></td>
                 <td colspan="3">Date Of Opening A/C<span style="color:red">*</span> <input type="text" name ="date" value="<?php echo $row['Account_Opening_Date'];?>"></td>
       </tr>
	   <tr>
			 <td>First Name<span style="color:red">*</span><br><input type="text" name="txtfn" size="30" value="<?php echo $row2['First_Name'];?>"></td>
            <td>Middle Name<span style="color:red">*</span><br><input type="text" name="txtmn" size="30" value="<?php echo $row2['Middle_Name'];?>"></td>
            <td>Last Name<span style="color:red">*</span><br><input type="text" name="txtln" size="30" value="<?php echo $row2['Last_Name'];?>"></td>	
        </tr>
		<tr>
			<td colspan="3" align="center"><button name="Delete" value="Delete" id="btn3"  style="width:120px; height: 40px;">Delete</button>&nbsp;&nbsp;&nbsp;
                </td>
        <?php
			}
		?>
    </table>

</form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['Delete']))
{
$aid=$_POST['id'];	
	
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


$sql=("Delete from account_details where Account_No='$aid'");
if (mysqli_query($conn, $sql)) {
		echo "<script> alert('Record Deleted Successfully')</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>



</body>
</html>