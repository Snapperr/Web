<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Must be filled.";
    } elseif (strlen($password) < 5) {
        $error = "Password is at least 5 characters.";
    } elseif (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        $error = "Password must consist of letters and numbers.";
    } elseif ($username == 'kafka' && $password == 'utsweb1') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">ABC Hotel</div>
        </div>
    </header>

    <div class="content">
        <div class="login-container">
            <form method="POST" action="login.php">
                <h2>Please login to enter</h2>

                <?php if (!empty($error)): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="input-group">
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>

    <footer>
        ABC Hotel &copy;
    </footer>
</body>
</html>