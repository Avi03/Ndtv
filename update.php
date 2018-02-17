<!--Updated Code -->
<?php
$servername="localhost";
$username="root";
$password="";

	$con = mysqli_connect($servername , $username , $password);
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{
		$eid = $_POST['eid'];
		$fname = $_POST['fname'];
		$lname= $_POST['lname'];
		$department = $_POST['dep'];
		$email = $_POST['email'];

		$sql = "update employee.employee_details set First_name='$fname',Last_name='$lname',Department='$department',Email_id='$email'
		where Employee_id=$eid";
	
		if(mysqli_query($con,$sql))
		{
			echo "<script>alert('Data Updated');
			window.location='login.php'; </script>";
		}
		else
		{
			echo "Please check connection";
		}
	}
	
?>