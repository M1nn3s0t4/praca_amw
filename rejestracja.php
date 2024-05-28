<?php
include 'db_connect.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Sprawdzenie czy nazwa użytkownika jest już w użyciu
    $stmt_check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows >= 0) {
        $errors[] = "Nazwa użytkownika jest już zajęta.";
    }

    // Sprawdzenie czy hasło spełnia kryteria
    $policyRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/';
    if (!preg_match($policyRegex, $_POST['password'])) {
        $errors[] = "Hasło nie spełnia wymagań polityki hasła.";
    }

    // Sprawdzenie czy potwierdzenie hasła jest zgodne
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors[] = "Potwierdzenie hasła nie pasuje.";
    }

    // Jeśli nie ma błędów, wstaw nowego użytkownika do bazy danych
    if (empty($errors)) {
        $stmt_insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt_insert->bind_param("ss", $username, $password);
        $stmt_insert->execute();

        header("Location: logowanie.php");
        exit();
    }

    $stmt_check->close(); // Zamknij zapytanie
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="pattern.css">
</head>
<body>
    <section id="banner">
        <img src="exam.png" alt="exam">
        <h1>REJESTRACJA</h1>
    </section>
    <section id="main">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateRegistration()">
            <section class="faq">
                <label for="username">Nazwa użytkownika:</label><br>
                <input type="text" id="username" name="username" required><br><br>
            </section>
            <section class="faq">
                <label for="password">Hasło:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <i>Hasło musi zawierać od 8 do 20 znaków, co najmniej jedną małą literę, jedną wielką literę, jedną cyfrę i jeden znak specjalny.</i>
            </section>
            <section class="faq">
                <label for="confirm_password">Potwierdź hasło:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            </section>
            <section class="faq">
                <center>
                    <input type="submit" value="Zarejestruj">
                    <a href="logowanie.php"><button type="button">Zaloguj się</button></a>
                </center>
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

    <script>
        function validateRegistration() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            var policyRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;

            if (!policyRegex.test(password)) {
                alert("Hasło nie spełnia wymagań polityki hasła.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Potwierdzenie hasła nie pasuje.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
