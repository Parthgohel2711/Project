<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            background-color: #363434;
        }
        .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }
        .input-group-text {
            background-color: #e8e7e7;
            border: none;
        }
        .form-control {
            background-color: #e8e7e7;
            border: none;
            padding-left: 40px;
        }
        .form-section {
            height: 100vh;
        }
        .left-box {
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .right-box {
            background-color: white;
            padding: 2rem;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .btn-custom {
            background-color: black;
            color: white;
            border: 2px solid rgb(25, 152, 139);
        }
        .btn-custom:hover {
            background-color: #000000;
            color:white;
        }
        .btn-login {
            border: 2px solid white;
            color:white;
            background-color: black;
        }
        .btn-login:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

<div class="container d-flex align-items-center justify-content-center form-section">
    <div class="row w-100 shadow rounded" style="max-width: 900px;">
        <div class="col-md-5 left-box text-center">
            <h1>Create Account </h1>
            <p class="mb-5">To keep connected with us please login with your personal info</p>
            <a href="Register.php" class="btn btn-login rounded-pill px-4">Sign Up</a>
        </div>
        <div class="col-md-7 right-box">
            <h3 class="text-center mb-4">Welcome Back!</h3>
            <form action="Login.php" method="post">
                <div class="mb-3 position-relative">
                    <i class="fa fa-user form-icon"></i>
                    <input type="text" class="form-control ps-5 mt-5" name="txtunm" placeholder="Username" required>
                </div>
                
                <div class="mb-3 position-relative">
                    <i class="fa fa-lock form-icon"></i>
                    <input type="password" class="form-control ps-5" name="txtpwd" placeholder="Password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-custom rounded-pill px-5 mb-5 mt-3" id="liveToastBtn">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
    $con = mysqli_connect("localhost","root","","FastFood");
    if(isset($_POST['txtunm']))
    {  
        $unm = $_POST['txtunm'];
        $pwd = $_POST['txtpwd'];
        $sql = "Select `Username`,`Password` From `userdata` where `Username`='$unm' and `Password`='$pwd'";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        if($count == 1)
        {
?>
<script>
    window.location.href="Register.php";
</script>
<?php
        }
        else
        {
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('loginFailToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    });
</script>
<?php
        }
    }
?>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="loginFailToast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        Invalid username or password. Please try again.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>





