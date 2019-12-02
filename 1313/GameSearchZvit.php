<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Пошук ігор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Пошук ігор</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'my_db');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT player.nickname, map.name, game_search.car_id, mode.Features_of_the_mode FROM game_search LEFT JOIN player ON game_search.player_id = player.id INNER JOIN map ON map.id = game_search.map_id RIGHT JOIN mode ON mode.id = game_search.mode_id ORDER BY player.nickname')) {

        printf("<h3>Звіт - Пошук ігор </h3><br>");
        printf("<table><tr><th>Гравець</th><th>Карта</th><th>id машинки</th><th>Режим</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['nickname'], $row['name'], $row['car_id'], $row['Features_of_the_mode']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="player.php">Таблиця player</a><br></li>
        <li><a href="map.php">Таблиця map</a><br></li>
        <li><a href="car.php">Таблиця car</a><br></li>
        <li><a href="mode.php">Таблиця mode</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
