<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$id_player = $_POST['id_player']; $steam_guard = $_POST['steam_guard']; $name = $_POST['name']; $age = $_POST['age']; $login = $_POST['login']; $password = $_POST['password'];

$sql = "UPDATE account SET id_player='$id_player', steam_guard='$steam_guard', name='$name', age='$age', login='$login', password='$password' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("account.php")
?>
