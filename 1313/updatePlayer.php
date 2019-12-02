<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$rocket_pass = $_POST['rocket_pass']; $nickname = $_POST['nickname']; $rank_title = $_POST['rank_title']; $count_of_cars = $_POST['count_of_cars']; $player_banner_title = $_POST['player_banner_title'];

$sql = "UPDATE player SET rocket_pass='$rocket_pass', nickname='$nickname', rank_title='$rank_title', count_of_cars='$count_of_cars', player_banner_title='$player_banner_title' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("player.php")
?>
