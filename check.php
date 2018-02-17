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
		$password = $_POST['pass'];
		$fname = $_POST['fname'];
		$lname= $_POST['lname'];
		$department = $_POST['dep'];
		$email = $_POST['email'];

		$sql = "insert into employee.employee_details(Employee_id,Password,First_name,Last_name,Department,
		Email_id) values('$eid','$password','$fname','$lname','$department','$email')";
		
		if(mysqli_query($con,$sql))
		{
			echo "<script>alert('Data Added');
			window.location='login.php'; </script>";;
		}
		else
		{
			echo "Please check connection";
		}
		
		
		echo $fname;
	}
	
?>