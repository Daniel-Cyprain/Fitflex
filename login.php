

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="login-styles.css">
    <link rel="shortcut icon" href="images/GRADEHUB.png" type="image/x-icon">
</head>
<div class="topbtn">
<a href="javascript:history.back()"><button>Go Back</button></a>
</div>
<body>
    <div class="container">
        <h2>Let's Get you Healthier, Login</h2>
        <div class="registration-form">
            <form action="student_registration.php" method="post">

                <input type="text" id="username" name="username" placeholder="Enter Your username" /*required*/>
                <input type="password" id="password" name="password" placeholder="input password" /*required*/><br>

                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" /*required*/><br>

                <a href="dashboard.html"><button type="button" name="btn_login">Login</button></a>
                <p style="margin-left:29rem; position:absolute;">Haven't been registered? - <a style="color:#EF754F;" href="registration.php" id="loginlink">Register</a></p>
            </form>
        </div>
        <img src="images/reg-pic2.png" alt="">
    </div>
    <!-- <div id= "DOLOGO">
        <img src="images/Daniel-Obichukwu.png" alt="logo-DO">
    </div> -->
</body>
</html>
