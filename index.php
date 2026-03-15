<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <title>UM:CCE | Dashboard</title>
    <style>
        .dashboard {
            background: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .welcome-container {
            background: white;
            padding: 60px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 600px;
        }

        .welcome-container h1 {
            font-family: "Inria Serif";
            color: #413B0F;
            font-size: 48px;
            margin-bottom: 20px;
        }

        .user-info {
            background: #f8f8f8;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            border-left: 5px solid #F9E022;
        }

        .user-info p {
            font-family: "Inter";
            font-size: 18px;
            color: #333;
            margin: 15px 0;
            text-align: left;
        }

        .user-info strong {
            color: #413B0F;
            font-weight: 600;
        }

        .logout-form {
            margin-top: 30px;
        }

        .logout-btn {
            padding: 15px 40px;
            background: #676660;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
            font-family: "Inter";
            font-weight: 600;
        }

        .logout-btn:hover {
            background: #5a5550;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-family: "Inter";
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='success-message'>" . htmlspecialchars($_SESSION['message']) . "</div>";
            unset($_SESSION['message']);
        }
        ?>
        
        <div class="welcome-container">
            <h1>Welcome Back! 🎉</h1>
            
            <div class="user-info">
                <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                <p><strong>Contact:</strong> <?php echo htmlspecialchars($_SESSION['user_contact']); ?></p>
                <p><strong>User ID:</strong> <?php echo htmlspecialchars($_SESSION['user_id']); ?></p>
            </div>

            <p style="font-family: 'Inter'; font-size: 16px; color: #666; margin-bottom: 30px;">
                You are successfully logged into your Maza Sushi account!
            </p>

            <form class="logout-form" action="formhandler.php" method="POST">
                <input type="hidden" name="action" value="logout">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
