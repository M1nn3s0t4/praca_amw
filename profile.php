<?php
    session_start();
    include"db_connect.php";

    if ($conn->connect_error) {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }

    var_dump($_SESSION['username']);

    if (!isset($_SESSION["username"])) {
        header("Location: log.php");
        exit();
    }
    $username = $_SESSION["username"];

    $query = "SELECT exam_name, score FROM wyniki WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if (isset($_POST["logout"])) {
        session_destroy(); // Zniszczenie sesji
        header("Location: logowanie.php"); // Przekierowanie do strony logowania
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pattern.css">
    <link rel="icon" type="image/x-icon" href="pictogram.png">
    <title>PROFIL</title>
</head>
<body>
    <section id="banner">
        <img src="exam.png" alt="exam">
        <h1>EGZAMIN ZAWODOWY</h1>
    </section>
    <section id="menu">
        <section class="menu-select">
            <a href="index.html">STRONA GŁÓWNA</a>
        </section>
        <section class="menu-select-list">
            <section class="dropdown">
                <label class="dropbtn">WYKONAJ TEST</label>
                <section class="dropdown-content">
                    <section class="buttons"><a href="quiz.php">INF.03             </a></section>
                    <section class="buttons"><a href="quiz2.php">INF.04            </a></section>
                </section>
            </section>
        </section>
        <section class="menu-select">
            <a href="profile.php">PROFIL</a>
        </section>
        <section class="menu-select">
            <a href="faq.html">FAQ</a>
        </section>
    </section>
    <section id="main-index">
        Witaj, <?php echo $username; ?>!
        <?php if ($result->num_rows > 0): ?>
            <h4>Twoje wyniki poszczególnych egzaminów:</h4>
            <ul>
                <?php while($row = $result->fetch_assoc()): ?>
                    <li>
                        <?php echo $row['exam_name']; ?>: <?php echo $row['score']; ?>
                        <?php if ($row['score'] >= 20): ?>
                            
                        Zdałeś<?php else: ?>
                        Nie zdałeś<?php endif; ?></li><?php endwhile; ?></ul><?php else: ?><p>Brak wyników egzaminów</p><?php endif; ?>
    </section>
    <section id="footer">
        <p>© 2024 Paweł Car All Rights Reserved</p>
    </section>
</body>
</html>