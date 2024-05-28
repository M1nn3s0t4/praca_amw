<?php
session_start();
include 'db_connect.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Pobranie hasła z bazy danych na podstawie nazwy użytkownika
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $hash_passoword = $row['password'];

    // Sprawdzenie czy użytkownik istnieje i czy hasło się zgadza
    if ($row && password_verify($password, $hash_passoword)) {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit();
    } else {
        $errors[] = "Nieprawidłowa nazwa użytkownika lub hasło.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="pattern.css">
    <!-- <style>
        .error-message {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style> -->
</head>
<body>
    <section id="banner">
        <img src="exam.png" alt="exam">
        <h1>LOGOWANIE</h1>
    </section>
    <section id="main">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateLoginForm()">
            <section class="faq">
                <label for="username">Nazwa użytkownika:</label><br>
                <input type="text" id="username" name="username" required><br><br>
            </section>
            <section class="faq">
                <label for="password">Hasło:</label><br>
                <input type="password" id="password" name="password" required><br><br>
            </section>
            <section class="faq">
                        <input type="submit" value="Zaloguj się">
                        <a href="rejestracja.php"><button type="button">Rejestracja</button></a>
            </section>
                    <?php if (!empty($errors)): ?>
                        <section class="error-message">
                            <?php foreach ($errors as $error): ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        </section>
                    <?php endif; ?>
        </form>
    </section>
    <section id="footer">
        <p>© 2024 Paweł Car All Rights Reserved</p>
    </section>
    <center>
    <script>
        function validateLoginForm() {
            // Tutaj można dodać dodatkową walidację, jeśli to konieczne
            return true;
        }
    </script>
    </center>
</body>
</html>