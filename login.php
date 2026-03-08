<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet"> <!-- Inter Font -->
    
    <title>UM:CCE | Sign In</title>
</head>
<body>
    <div class="limiter">
        <div class="flexbox-container">
            <div class="wrapper">
                <form class="login" action="formhandler.php" method="POST">
                    <span class="Logo">
                        <img src="images/logo.png" alt="Logo">
                    </span>
                    <span class="login-title">
                        <br>
                        Login to your Account
                    </span>
                    <span class="welcome-back">
                        <br>
                        Welcome Back!
                    </span>

                    <div class="email-address-block" data-validate = "Email must not be empty">
                        <input class="email-input-block" type="text" name="email" placeholder="Email Address" required>
                    </div>

                    <div class="password-block" data-validate = "Password is required">
                        <input class="password-input-block" type="password" name="pass" placeholder="Password" required>
                    </div>

                    <div class="login-btn-block">
                        <button type="submit" class="login-btn">
                            Login
                        </button>
                    </div>

                    <div class="signup-btn-block">
                        <button type="submit" class="signup-btn">
                            Create an Account
                        </button>
                    </div>

                    <div class="login-btn-block">
                        <button type="submit" class="login-btn">
                            <span class="symbol">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            Sign In with Google
                        </button>
                    </div>
            </div>
            <div class="image-block">
                <img src="images/login-bg.png" alt="IMG">
            </div>
        </div>
    </div>
</body>
</html>