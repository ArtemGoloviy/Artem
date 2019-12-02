<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$rocket_pass = $_POST['rocket_pass']; $nickname = $_POST['nickname']; $rank_title = $_POST['rank_title']; $count_of_cars = $_POST['count_of_cars']; $player_banner_title = $_POST['player_banner_title'];

$sql = "INSERT INTO player (rocket_pass, nickname, rank_title, count_of_cars, player_banner_title) VALUES ('$rocket_pass', '$nickname', '$rank_title', '$count_of_cars', '$player_banner_title')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("player.php")
?>