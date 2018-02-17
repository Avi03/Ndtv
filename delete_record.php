<?php
$servername="localhost";
$username="root";
$password="";
$db="employee";

$id = $_GET['id'];
echo $id;
$con = mysqli_connect($servername , $username , $password,$db);
$sql = "DELETE FROM employee_details WHERE Employee_id='$id'";
$result = mysqli_query($con , $sql);
echo "<script>alert('Data Deleted');
window.location='login.php'; </script>";

		?>
