<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$count_players = $_POST['count_players']; $Features_of_the_mode = $_POST['Features_of_the_mode'];

$sql = "INSERT INTO mode (count_players, Features_of_the_mode) VALUES ('$count_players', '$Features_of_the_mode')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("mode.php")
?>