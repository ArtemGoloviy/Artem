<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Map</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця map</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'my_db');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM map')) { 
        printf("Список карт: <br><br>");
        printf("<table><tr><th>ID</th><th>Назва</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['name']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoMapForm.php">Вставити рядок</a><br></li>
        <li><a href="updateMapForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromMapForm.php">Видалити рядок</a><br></li>
        <li><a href="GameSearchZvit.php">Пошук ігор звіт</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>