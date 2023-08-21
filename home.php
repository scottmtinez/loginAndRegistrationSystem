<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css"> 
</head>
<body>
    <script></script>
    <div class="login-container">
        <form class="login-form" action="myAccount.php" method="post">
            <h1 class="login-title">LOGIN</h1>
            <div class="input">
                <input type="text" class="input-section" placeholder="Username..."><br>
                <input type="password" class="input-section" placeholder="Password..."><br>
                <input type="submit" class="btn" value="Login">
                <div>Dont have an Account? Click <a href="#reg-container">Here.</a></div>
            </div>
        </form>
    </div>

    <div class="reg-container" id="reg-container">
        <form class="reg-login" action="myAccount.php" method="post">
            <h1 class="reg-title">SIGNUP</h1>
            <div class="input">
                <input type="text" class="input-section" placeholder="Username..."><br>
                <input type="email" class="input-section" placeholder="Email..."><br>
                <input type="password" class="input-section" placeholder="Password..."><br>
                <input type="password" class="input-section" placeholder="Confirm Password..."><br>
                <input type="submit" class="btn" value="Signup">
                <div>Already have an Account? Click <a href="#login-container">Here.</a></div>
            </div>    
        </form>
    </div>

    <div class="myAcountInfo-container">
        <form class="myAccount-info">
            <h1 class="myAccount-title">MY INFO</h1>
            <div class="input">
                <label>Username: </label><br>
                <label>Email: </label><br>
                <input type="button" class="logout" value="Logout">
            </div>
        </form>
    </div>
</body>
</html>