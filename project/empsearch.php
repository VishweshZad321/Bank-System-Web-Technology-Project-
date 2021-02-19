<?php
if(isset($_POST['search']))
{
$id=$_POST["txtempid"];

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

$sql =("SELECT * FROM employee_details WHERE Employee_ID='$id' ");
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
if(!$row)
{
	echo "<script> alert('Record NOT Found');</script>";
}


$sql2 =("SELECT * FROM employee_address_details WHERE Employee_ID='$id' ");
$result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
$row2 = mysqli_fetch_array($result2);
if(!$row2)
{
	echo "<script> alert('Record NOT Found');</script>";
}


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
    <title>Employee Personal Details</title>
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
            transform: translate(5%,-10%);
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
		<div id="holder1"><div>
            <div id="header1">

                <ul>
                    <li><a href="emplyee_personal.html">ADD</a></li>
                </ul>
            </div>
	
        
        <div id="ab">
            <br>

<form name="personal" action="" onsubmit="" method="post" autocomplete="on">
    <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="15" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Employee Personal Information</b></font></td>
        </tr>
        <tr>
            <td>Employee Id<span style="color:red">*</span></td>
            <td colspan="3"><input type="text" name="txtempid"  size="10">
			 <button name="search" value="Search"  id="btn2"  style="width:140px; height: 40px;">Search</button>&nbsp;&nbsp;&nbsp;
               
			</td>
            
        </tr>
		<?php
			if(isset($_POST['search']))
			{
		?>
		<tr>
		 <td>Employee Id<span style="color:red">*</span></td>
            <td colspan="3"><input type="text" name="txtempid1" size="10" value="<?php echo $row['Employee_ID']; ?>" >
		</tr>
        <tr>
            <td>First Name<span style="color:red">*</span><br><input type="text" name="txtfn" value="<?php echo $row['First_Name'];?>" size="30" ></td>
            <td>Middle Name<span style="color:red">*</span><br><input type="text" name="txtmn" value="<?php echo $row['Middle_Name'];?>" size="30" ></td>
            <td>Last Name<span style="color:red">*</span><br><input type="text" name="txtln" value="<?php echo $row['Last_Name'];?>" size="30" ></td>
        </tr>
        <tr>
            <td>Gender<span style="color:red">*</span></td>
            <td colspan="2"><input type="text" name="Gender" value="<?php echo $row['Gender']?>" ></td>
        </tr>
        <tr>
            <td>DOB<span style="color:red">*</span></td>
            <td colspan="2"><input type="date" name="dated" value="<?php echo $row['Date_Of_Birth'];?>" ></td>
        </tr>
        <tr>
            <td>Mobile Number<span style="color:red">*</span><br><input type="number" name="txtmno"  value="<?php echo $row['Phoneno1'];?>" size="30" ></td>
            <td colspan="2">E-mail<span style="color:red">*</span><br><input type="text" name="txtemailid" value="<?php echo $row['Email_ID'];?>" size="30" ></td>
        </tr>
        <tr>
            <td>Post<span style="color:red">*</span><br><input type="text" name="txtpost" value="<?php echo $row['Post'];?>" size="30" ></td>
            <td>Pan card<span style="color:red">*</span><br><input type="text" name="txtpc" value="<?php echo $row['Pan_Card'];?>" size="30" ></td>
            <td>Addhar Card<span style="color:red">*</span><br><input type="number" name="txtac" value="<?php echo $row['Addhar_Card'];?>" size="30" ></td>
        </tr>
       
    </table>
	
	<br>
	<br>
	<br>
	<br>
	   <table id="tableaddress" align="center" width="50%" cellspacing="2" cellpadding="20" border="5">
        <tr>
            <td colspan="3" align="center" style="font-family: cooper; "><font size="6"><b>Employee Address</b></font></td>
        </tr>
        <tr>
            <td colspan="3">Flat No./Plot No.<span style="color:red">*</span><br><input type="text" name="txtflatno" value="<?php echo $row2['Block_NO'];?>" size="10"></td>
            
        </tr>
        <tr>
            <td>Address<span style="color:red">*</span><br><input type="text" name="txtad" value="<?php echo $row2['Landmark'];?>" size="30" style="height: 60px;"></td>
            <td>Street<span style="color:red">*</span><br><input type="text" name="txtst" value="<?php echo $row2['Streetname'];?>" size="30" ></td>
            <td>City<span style="color:red">*</span><br><input type="text" name="txtcity" value="<?php echo $row2['City'];?>"  size="30" ></td>
        </tr>
        <tr>
            <td>State<span style="color:red">*</span><br><input type="text" name="txtstate" value="<?php echo $row2['State'];?>" size="30"></td>
            <td>Country<span style="color:red">*</span><br><input type="text" name="txtcountry" value="<?php echo $row2['Country'];?>" size="30"></td>
            <td>Pin Code<span style="color:red">*</span><br><input type="text" name="txtpincode"  value="<?php echo $row2['Pincode'];?>" size="30"></td>
        </tr>
		<tr>
			<td colspan="3" align="center"><button name="Update" value="Submit" id="btn3"  style="width:120px; height: 40px;">Update</button>&nbsp;&nbsp;&nbsp;
                </td>
			
		</tr>
		
        <?php
			}
		?>
    </table>
	<br>
	<br>
	<br>
	<br>
	<br>
	  
</form>
        </div>
    </div>
</div>
    </div>
</div>

<?php
if (isset($_POST['Update']))
{
$empid1=$_POST['txtempid1'];
$Firstname=$_POST["txtfn"];
$Middlename=$_POST["txtmn"];
$Lastname=$_POST["txtln"];
$Gender=$_POST['Gender'];
$Date=$_POST['Dated'];
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

$sql=("Update employee_details set First_Name='$Firstname', Middle_Name='$Middlename', Last_Name='$Lastname',Gender='$Gender', Phoneno1='$mobileno', Email_ID='$emailid', Pan_Card='$pancard', Addhar_Card='$adharcard', Post='$post' where Employee_ID='$empid1'");	
	if (mysqli_query($conn, $sql)) {
		echo	"Updated Successful";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql1=("update employee_address_details set Block_NO='$flatno', Landmark='$address', Streetname='$streetname', City='$city', State='$state', Country='$country', Pincode='$pincode' where Employee_ID='$empid1'");	
if (mysqli_query($conn, $sql1)) {
		header("Location:updateemp.php");
    
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>

</body>
</html>