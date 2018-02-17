<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Login</title>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
    width: 100%;
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
</head>
<body>


<div class="imgcontainer">
    <img src="NDTV.jpg" alt="Avatar" class="avatar">
  </div>

  <h2>Login</h2>



<form action='getData.php' method='post'>
  <div class="container">
    <label for="EmployeeId"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Employee Id" name="eid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <p>
  		Not yet a member? <a href="addemp.php">Sign up</a>
  	</p>
  </div>

  
</form>

</body>
</html>
