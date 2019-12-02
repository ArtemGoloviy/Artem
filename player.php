<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Player</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця player</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'my_db');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM player')) { 
        printf("Список акаунтів: <br><br>");
        printf("<table><tr><th>ID</th><th>Rocket pass</th><th>Нік</th><th>Ранг</th><th>Кількість машинок</th><th>Баннер</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['rocket_pass'], $row['nickname'], $row['rank_title'], $row['count_of_cars'], $row['player_banner_title']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoPlayerForm.php">Вставити рядок</a><br></li>
        <li><a href="updatePlayerForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromPlayerForm.php">Видалити рядок</a><br></li>
        <li><a href="GameSearchZvit.php">Пошук ігор звіт</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>