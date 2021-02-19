<?php

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

$sql =("SELECT MAX(Customer_ID) as Cusid  FROM customer_details");
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
 $Custid=$row["Cusid"]+1;

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>customer Personal Details</title>

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
    transform: translate(5%,15%);
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
            <li><a href="Customer_details.php">NEW Customer </a></li>
            <li><a href="MDI.html">Home</a></li>
        </ul>
       
        <div id="ab">
            <br>
<form name="Customer_personal" action="caddress_detail.php" onsubmit="" method="post" autocomplete="on" enctype="multipart/form-data">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="20" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Customer Personal Information</b></font></td>
        </tr>
        <tr>
            <td><b>Customer Id<b><span style="color:red">*</span></td>
            <td><input type="text" name="txtcustomerid" value="<?php echo $Custid;?>" size="10"></td>
           <td> <img id="image1" src="#" alt="Image"><br>
               <input type='file' name="image" onchange="image(this);" required></td>

        </tr>
        <tr>
            <td>First Name<span style="color:red">*</span><br><input type="text" name="txtfn" size="30"></td>
            <td>Middle Name<span style="color:red">*</span><br><input type="text" name="txtmn" size="30"></td>
            <td>Last Name<span style="color:red">*</span><br><input type="text" name="txtln" size="30"></td>
        </tr>
        <tr>
            <td>Gender<span style="color:red">*</span></td>
            <td colspan="2"><input type="radio" name="Gender" id="m" value="Male">MALE <input type="radio" name="Gender" value="Female" id="f">FEMALE</td>
        </tr>
        <tr>
            <td>DOB<span style="color:red">*</span></td>
            <td colspan="2"><input type="date" name="dated"></td>
        </tr>
        <tr>
            
            <td>Mobile Number<span style="color:red">*</span><br><input type="number" name="txtmno" size="30"></td>
            <td colspan="2">E-mail<span style="color:red">*</span><br><input type="text" name="txtemailid" size="30"></td>
			
		</tr>
		<tr>
			<td>Pan Card Number<span style="color:red">*</span><br><input type="text" name="txtpanno" size="30"></td>
			<td colspan="2">Addhar Card Number<span style="color:red">*</span><br><input type="text" name="txtadharno" size="30"></td>
			
		
		</tr>
        <tr>
            <td colspan="3" align="center">
                <button value="Submit" id="btn1"  style="width:120px; height: 40px;">NEXT</button>&nbsp;&nbsp;&nbsp;
				<button value="Reset" type="Reset" id="btn4" style="width:120px; height: 40px;">Reset</button></td>
        </tr>
    </table>

</form>
        </div>
    </div>
        </div>
</div>
</div>



</body>
</html>