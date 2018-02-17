<head>
<title>NDTV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

			<style>

			.ems-center-wrapper {

				margin-top : 15%;
			}

			.fontsize-20 {

				font-size : 20px;
			}



body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;

}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>




<div class="container">
<div class="ems-center-wrapper">
<table class="table table-striped">

<thead>
<caption class="fontsize-20">User Details</caption>

</thead>
<tbody>

<?php
$servername="localhost";
$username="root";
$password="";



if(isset($_POST['submit']))
	{
		$email = $_POST['eid'];
		$pass = $_POST['psw'];

	if($email==10)
	{
		?>
		<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>EMPLOYEE Id</th>
        <th>PASSWORD</th>
        <th>FIRST NAME</th>
		  <th>LAST NAME</th>
		  <th>DEPARTMENT</th>
		    <th>EMAIL ID</th
      </tr>
    </thead>
    <tbody><?php
	$con = mysqli_connect($servername , $username , $password);
	$sql = "select * from employee.employee_details";
	$result = mysqli_query($con , $sql);

	if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
		?>
     <tr>
	 <td><?php echo $row['Employee_id']?></td>
	 <td><?php echo $row['Password']?></td>
	 <td><?php echo $row['First_name']?></td>
	  <td><?php echo $row['Last_name'] ?></td>
	<td><?php echo $row['Department']?></td>
	<td><?php echo 	$row['Email_id']?></td>
  <td><form action="delete_record.php">
    <?php
    $id = $row["Employee_id"];
    echo '<input type="hidden" name="id" value="'.$id.'">'?>
    <input type="submit" value="delete" >

  </form></td>
	 </tr>

<?php
	}}}
else{
	$con = mysqli_connect($servername , $username , $password);
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "select * from employee.employee_details where Employee_id='$email'";


	$result = mysqli_query($con , $sql);

	if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
              <th>ID</th>
        <td><?php  echo $row['Employee_id'];?></td></tr>
		<tr>
		<th>Password</th>
		<td><?php  echo $row['Password'];?></td>
		</tr>
		<tr>
		<th>First Name</th>
		<td><?php  echo $row['First_name'];?></td>
		</tr>
		<tr>
		<th>Last Name</th>
		<td><?php  echo $row['Last_name'];?></td>
		</tr>
		<tr>
		<th>Department</th>
		<td><?php  echo $row['Department'];?></td>
		</tr>
		<tr>
		<th>Email</th>
		<td><?php  echo $row['Email_id'];?></td>
		</tr>
		<tr>
		<th></th>
		<td><button type="button" class="btn btn-submit" data-toggle="modal" data-target="#myModal">Edit</button></td>
		</tr>
		<?php
    }
	}
	}
	}

?>
</tbody>
       </table>
	   </div>
	   </div>




 <!--model form-->
	   <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Information</h4>
        </div>
        <div class="modal-body">

<form method="post" action="update.php">

          <p><label for="EmployeeId"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Employee Id" name="eid" required>
</br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
</br>

	<label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter your First name" name="fname" required>
</br>
	<label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your Last name" name="lname" required>
</br>
	<label for="Department"><b>Department</b></label>
    <input type="text" placeholder="Enter your Department name" name="dep" required>
</br>
	<label for="Email Id"><b>Email Id</b></label>
    <input type="text" placeholder="Enter your email id" name="email" required>
</br>
</br>
    <button type="submit" name="submit">Submit</button></p>
        </div>
		</div>
		</form>
</br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>


    </div>
  </div>
</div>
