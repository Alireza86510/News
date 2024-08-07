<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/css/verify.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="../Assets/images/favicon.png">
    <title>News.Com | Verify</title>
</head>
<body>
<h2>Verify</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="../Controllers/UsersController.php" method="post">
            <h1>Create Account</h1>
            <input type="text" name="name" placeholder="Name" />
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="hidden" name="register" value="register">
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="../Controllers/UsersController.php" method="post">
            <h1>Sign in</h1>
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="hidden" name="login" value="login">
            <a href="../Controllers/UsersController.php?forgotPass=true">Forgot your password?</a>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>