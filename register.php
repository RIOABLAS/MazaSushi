<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Main CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <title>UM:CCE | Sign Up</title>
</head>
<body>
    <div class="limiter">
        <!-- LEFT SIDE -->
        <div class="left">
            <form class="login" action="formhandler.php" method="POST">
                <span class="Logo">
                    <img src="images/logo.png" alt="Logo">
                </span>
                <br>
                <h2>Login to your Account</h2>
                <span class="welcome-back">
                    Create your Account
                </span>

                <div>
                    <button type="submit" class="signup-btn">
                        <span class="symbol">
                            <img src="images/search.png" alt="Google Icon">
                        </span>
                        Sign Up with Google
                    </button>
                </div>

                <div>
                    <input class="email-input-block" type="text" name="email" placeholder="Email Address" required>
                </div>

                <div>
                    <input class="contact-input-block" type="text" name="contact" placeholder="Contact Number" required>
                </div>

                <div>
                    <input class="password-input-block" type="password" name="pass" placeholder="• • • • • • • •" required>
                </div>

                <div>
                    <button type="submit" class="login-btn">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <!-- RIGHT SIDE -->
        <div class="right">
            <img src="images/login-bg.png" alt="IMG">
        </div>
    </div>
</body>
</html>