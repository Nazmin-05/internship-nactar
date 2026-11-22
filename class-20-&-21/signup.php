<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass ='';
$dbname = 'cv';
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
  </head>
  <body>
    <section style="margin-top:50px;>
      <div class="container">
        <div class="row justify-content-center">
            <div class= "col-md-5">

            <?php

            if(isset($_POST['btnSignUp'])){
            $uname = $_POST['uname'];
            $uphone = $_POST['uphone'];
            $uemail = $_POST['uemail'];
            $username = $_POST['username'];             
            $password = $_POST['password'];

            $ustatus = 'active';
            $uslug = uniqid();

            $usql= "insert into cv_user(u_name,u_phone,u_email,u_pass,u_status,u_slug) values ('$uname','$uphone','$uemail','$username','$password','$uslug') ";
            $uresult = $conn->query($usql);
            if($uresult){
              echo'<div class="alert alert-success" role="alert">Data insert successfully!</div>';
            }
            else{
              echo'<div class="alert alert-danger" role="alert">AData not insart!</div>';
            }

            }

             ?>
 <div class="card">
    <div class="card body">
        <form action="" method="post">
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="uname" placeholder="Enter your Name">
</div>
 <div class="mb-2">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" name="uphone" placeholder="Enter Your phone" >
</div>
 <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="uemail" placeholder="Enter your Email">
</div>
 <div class="mb-2">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter your username">
</div>

  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="btnSignUp">Signup</button>
</form>

    </div>
    </div>
     </div>
    </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
  </body>
</html>