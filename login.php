<?php
session_start();

function validatePassword($password) {
    return preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9]).{8,}$/', $password);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (validatePassword($password)) {
            if ($username === "admin" && $password === "Password123!") {
                $_SESSION["username"] = $username;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Invalid username or password";
            }
        } else {
            $error = "Password must contain at least one uppercase letter, one special character, one number, and have a minimum length of 8 characters";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pattern.css">
    <title>Storna Główna</title>
</head>
<body>
    <section id="banner">
        <img src="exam.png" alt="exam">
        <h1>EGZAMIN ZAWODOWY</h1>
    </section>
    <section id="main">
        <h1>LOGOWANIE</h1>
        <div class="login-container">
            <h2>Login</h2>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
    <section id="footer">
        <p>© 2024 Paweł Car All Rights Reserved</p>
    </section>
</body>
</html>