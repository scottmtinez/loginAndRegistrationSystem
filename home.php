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
    <div class="login-container" id="login-container">
        <form class="login-form" action="myAccount.php" method="post">
            <h1 class="login-title">LOGIN</h1>
            <div class="input">
                <input type="text" class="input-section" name="username" placeholder="Username..."><br>
                <input type="password" class="input-section" name="password" placeholder="Password..."><br>
                <input type="submit" class="btn" value="Login">
                <div id="loginSwitch">Dont have an Account? Click <a href="#">Here.</a></div>
            </div>
        </form>
    </div>

    <div class="reg-container" id="reg-container">
        <form class="reg-form" action="displayReg.php" method="post">
            <h1 class="reg-title">SIGNUP</h1>
            <div class="input">
                <input type="text" class="input-section" name="username" placeholder="Username..."><br>
                <input type="email" class="input-section" name="email" placeholder="Email..."><br>
                <input type="password" class="input-section" name="password" placeholder="Password..."><br>
                <input type="password" class="input-section" name="confPassword" placeholder="Confirm Password..."><br>
                <input type="submit" class="btn" value="Signup">
                <div id="signupSwitch">Already have an Account? Click <a href="#">Here.</a></div>
            </div>    
        </form>
    </div>

    <script>
        const loginContainer = document.getElementById("login-container");
        const signupContainer = document.getElementById("reg-container");
        const loginSwitch = document.getElementById("loginSwitch");
        const signupSwitch = document.getElementById("signupSwitch");

        loginSwitch.addEventListener("click", function(event) {
            event.preventDefault();
            loginContainer.style.display = "none";
            signupContainer.style.display = "block";
        });

        signupSwitch.addEventListener("click", function(event) {
            event.preventDefault();
            signupContainer.style.display = "none";
            loginContainer.style.display = "block";
        });

    </script>
</body>
</html>
