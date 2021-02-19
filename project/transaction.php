<?php
if(isset($_POST['search']))
{
$id=$_POST["an"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";
$conn="";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql =("SELECT * FROM account_details WHERE Account_No='$id' ");
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);

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
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>Transaction Details</title>
    <script>
        function image(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image1')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <style>
        #btnsearch
        {
            background-color: #a38560;
            background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);
            color:black;
            padding:5px;
            font-size: 14px;
            cursor: pointer;
            margin: 13px;
        }
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
            <li><a href="Customer_details.php">NEW Customer</a></li>
            <li><a href="MDI.html">Home</a></li>
        </ul>
		
		<div id="holder1"><div>
         
		
        <div id="ab">
			<br>
<form name="personal" action="" onsubmit="" method="post" autocomplete="on">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="15" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Transaction Details</b></font></td>
        </tr>
        <tr>
            <td>Account Number<span style="color:red">*</span><br>
                <input type="text" name="an" size="50">
            <button value="Submit" id="btnsearch" name="search"  style="width:85px; height: 30px;"> Search</button>&nbsp;</td>
			<?php
			if(isset($_POST['search']))
			{
		?>
            <td>Account Type<br><input type="text" name="at" size="30"  value="<?php echo $row['Account_Type'];?>" Disabled></td>
           
        </tr>
        <tr>
            <td>First Name<br><input type="text" name="fn" size="30"  value="<?php echo $row2['First_Name'];?>" Disabled></td>
            <td>Middle Name<br><input type="text" name="mn" size="30"  value="<?php echo $row2['Middle_Name'];?>" Disabled></td>
            <td>Last Name<br><input type="text" name="ln" size="30"  value="<?php echo $row2['Last_Name'];?>" Disabled></td>
        </tr>
        <tr>
            <td>Gender<input type="text" name="gender"  value="<?php echo $row2['Gender'];?>"></td>
            <td colspan="2">Current Balance<span style="color:red">*</span>
                <input type="number" name="cb"  value="<?php echo $row['Balance'];?>" size="30"></td>
        </tr>
        <tr>

            <td>Deposite<span style="color:red">*</span><br><input type="number" name="dp" size="30"></td>
            <td colspan="2">Withdraw<span style="color:red">*</span><br><input type="number" name="wd" size="30"></td>
   
        </tr>
        <tr>
            <td colspan="3" align="center">
                <button value="button" id="btn1" name="deposite"  style="width:150px; height: 40px;" onClick="transaction.php">Deposite</button>&nbsp;&nbsp;&nbsp;
				 <button value="button" id="btn2" name="withdraw"  style="width:150px; height: 40px;" onClick="transaction.php">Withdraw</b
		</tr>
    </table>
	<?php
			}
			?>

</form>
        </div>
    </div>
</div>
<?php
if(isset($_POST["deposite"]))
{
$ano=$_POST['an'];
$current=$_POST['cb'];
$deposit=$_POST['dp'];
$sum=$current+$deposit;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql=("update account_details set Balance=$sum where Account_No=$ano ");	

	if (mysqli_query($conn, $sql)) {
	echo "Update Succesfull";	
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
<?php
if(isset($_POST["withdraw"]))
{
$ano=$_POST['an'];
$current=$_POST['cb'];
$deposit=$_POST['wd'];
$sum=$current-$deposit;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql=("update account_details set Balance=$sum where Account_No=$ano ");	

	if (mysqli_query($conn, $sql)) {
	echo "Update Succesfull";	
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
</body>
</html>