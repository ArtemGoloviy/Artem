<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$player_id = $_POST['player_id']; $map_id = $_POST['map_id']; $car_id = $_POST['car_id']; $mode_id = $_POST['mode_id'];

$sql = "INSERT INTO game_search (player_id, map_id, car_id, mode_id) VALUES ('$player_id', '$map_id', '$car_id', '$mode_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("game_search.php")
?>