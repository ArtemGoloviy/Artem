<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$id_player = $_POST['id_player']; $steam_guard = $_POST['steam_guard']; $name = $_POST['name']; $age = $_POST['age']; $login = $_POST['login']; $password = $_POST['password'];

$sql = "INSERT INTO account (id_player, steam_guard, name, age, login, password) VALUES ('$id_player', '$steam_guard', '$name', '$age', '$login', '$password')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("account.php")
?>