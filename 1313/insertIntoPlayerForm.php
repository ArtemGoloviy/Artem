<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("player.php")    
    ?>

    <form action="insertIntoPlayer.php" method="post">
        <label>Rocket pass</label><input name="rocket_pass" type="text"><br>
        <label>Нік</label><input name="nickname" type="text"><br>
        <label>Ранг</label><input name="rank_title" type="text"><br>
        <label>Кількість машинок</label><input name="count_of_cars" type="text"><br>
        <label>Баннер</label><input name="player_banner_title" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>