<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Mode</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця mode</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'my_db');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM mode')) { 
        printf("Список режимів: <br><br>");
        printf("<table><tr><th>ID</th><th>Кількість гравців</th><th>Особливості режиму</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['count_players'], $row['Features_of_the_mode']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoModeForm.php">Вставити рядок</a><br></li>
        <li><a href="updateModeForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromModeForm.php">Видалити рядок</a><br></li>
        <li><a href="GameSearchZvit.php">Пошук ігор звіт</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>