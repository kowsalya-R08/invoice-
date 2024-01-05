<?php
include 'connect.php';
//print_r($_REQUEST);
if(isset($_POST['submit']))
{
  $name= $_POST['name'];
  $email=$_POST['email'];
  $mobileno=$_POST['mobileno'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];
  $role=$_POST['role'];
  $shift=$_POST['shift'];
  $password=$_POST['password'];


  $sql="insert into crud1(name,email,mobileno,gender,city,role,shift,password) values('$name','$email','$mobileno','$gender','$city','$role','$shift','$password')";
  $res=mysqli_query($con,$sql);
  if($res)
  {
    //echo "<script>alert('Data inserted successfully')</script>";
    header('location:display.php');
  
  }
  else
  {
    die(mysqli_error($con));
  }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <center></title>ENTER YOUR DETAILS</title></center>
  </head>
  <body>
    <div class="container">
      <form method="post">
    <div class="form-group">
    <label>EMPLOYEE NAME</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name"required>
    </div>

    <div class="form-group">
    <label>E-MAIL</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email"required>
    </div>
  
    <div class="form-group">
    <label>MOBILE NUMBER</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile no" name="mobileno"required>
    </div>

    <label>GENDER </label><br>
      <input type="radio" name="gender" value="male" id="male">Male<br>
      <input type="radio" name="gender"value="female" id="female">Female<br>
      

    <div class="form-group">
    <label>CITY</label>
    <input type="text" class="form-control" placeholder="Enter your city" name="city"required>
    </div>

    <div class="form-group">
    <label>ROLE</label>
    <input type="text" class="form-control" placeholder="Enter your role" name="role"required>
    </div>

  
    <div class="form-group">
    <label>SHIFT</label>
    <input type="text" class="form-control" placeholder="Enter your shift" name="shift"required>
    </div>

    <div class="form-group">
    <label>PASSWORD</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="password"required>
    </div>

  

  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>

    
  </body>
</html>