<?php

$mysqli = new mysqli('localhost', 'root', '', 'my_db'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$antenna = $_POST['antenna']; $goal_explosion = $_POST['goal_explosion']; $body_title = $_POST['body_title']; $wheels_title = $_POST['wheels_title']; $picture_title = $_POST['picture_title'];

$sql = "UPDATE car SET antenna='$antenna', goal_explosion='$goal_explosion', body_title='$body_title', wheels_title='$wheels_title', picture_title='$picture_title', picture_title='$picture_title' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("car.php")
?>
