<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ragistration Page</title>
    <style>

        body
        {
            margin: 0px;
            padding: 0px;
            background-color: rgb(54, 52, 52);
        }


        .container-1
        {
            display: flex;
        }

        .box-1
        {
            margin : 20px 0px 30px 180px;
            width: 380px;
            height: 510px;
            background-color: black;
            position: absolute;
            border-radius: 5px;
            border-bottom-right-radius: 0px;
            border-top-right-radius: 0px;
        }

        .box-2
        {
            width: 550px;
            height: 510px;
            background-color: white;
            margin: 20px 0px 0px 560px;
            position: absolute;
            border-radius: 5px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
        }
        
        .title
        {
            font-size: xx-large;
            color: black;
            text-align: center;
            margin: 0px;
        }

        .feild
        {
            width: 300px;
            height: 25px;
            outline: none;
            border: 0px;
            color: black;
            background-color: rgb(232, 231, 231);
            border-radius: 3px;
            margin-top: 0px;
            margin-bottom: 2px;
            font-size: medium;
            padding: 10px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
        }
        
        .feild::placeholder
        {
            color: black;
            left: 10px;
            position: absolute;
            display: none;
        }

        .register-button
        {
            width: 220px;
            height: 40px;
            margin-top: 30px;
            color: white;
            background-color: black;
            font-size: large;
            border-radius: 25px;
            border: 2px solid rgb(36, 7, 102);
        }

        .register-button:hover
        {
            width: 240px;
            height: 40px;
            margin-top: 30px;
            color: white;
            background-color: rgb(2, 2, 2);
            font-size: large;
            border-radius: 25px;
        }

        #icon
        {
            margin-right: 0px;
            font-size: 21px;
            background-color:rgb(232, 231, 231) ;
            width: 40px;
            height: 35px;
            border-radius: 3px;
            padding-top: 10px;
            margin-top: 10px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .title-2
        {
            margin-top: 130px;
            color: white;
            padding-left: 50px;
            height: 250px;
            width: 250px;
            text-align: center; 
        }

         .login-button
        {
            width: 220px;
            height: 40px;
            margin-top: 30px;
            color: white;
            background-color: black;
            font-size: large;
            border-radius: 25px;
            border: 2px solid white;
        }


        .login-button:hover
        {
            width: 240px;
            height: 40px;
            margin-top: 30px;
            color: white;
            background-color: rgb(2, 2, 2);
            font-size: large;
            border-radius: 25px;
        }

    </style>

    <script>
         function myFunction() {
            
    }
    </script>
</head>
<body>
    <div class="container-1">
        <div class="box-1">  
            <div class="title-2">
                <h1>Welcome Back!</h1>
                <h5>To keep connected with us please login with your personal info </h5>
                <button class="login-button" onclick="location.href = 'Login.php';" id="myButton" class="float-left submit-button" >Sign in</button>
            </div>
        </div>
        <div class="box-2">
            <div class="title">
                <h5>Create Account</h5>
                <form action="Register.php" method="post">
                    <i id="icon" class="fa-solid fa-circle-user"></i><input type="text" placeholder="Username" name="txtunm" required class="feild"><br>
                    <i id="icon" class="fa-solid fa-envelope"></i><input type="email" placeholder="E-mail" name="txteml" required class="feild"><br>
                    <i id="icon" class="fa-solid fa-phone"></i><input type="number" placeholder="Contect No." name="txtcont" required class="feild"><br>
                    <i id="icon" class="fa-solid fa-location-dot"></i><input type="text" placeholder="Address" name="txtadr" required class="feild"><br>
                    <i id="icon" class="fa-solid fa-lock"></i><input type="password" placeholder="Password" name="txtpwd" required class="feild"><br>
                    <input type="submit"  value="Sign Up" class="register-button">
                </form>
            </div> 
        </div>
    </div>
</body>
</html>

<?php
    ob_start();
    ob_flush();

    $con = mysqli_connect("localhost","root","","SweetDish");
    if(isset($_POST['txtunm']))
    {  
        $unm = $_POST['txtunm'];
        $eml = $_POST['txteml'];
        $cont = $_POST['txtcont'];
        $adr = $_POST['txtadr'];
        $pwd = $_POST['txtpwd'];
        $sql = "Insert Into `userdata` (`Username`,`Email`,`Contect`,`Address`,`Password`) values ('$unm','$eml','$cont','$adr','$pwd')";
        $res = mysqli_query($con,$sql);
        if($res > 0)
        {
?>
<script>
    window.location.href="Login.php";
</script>
<?php
        }
    }
?>