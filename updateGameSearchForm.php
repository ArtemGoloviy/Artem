<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Зміна даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("game_search.php")    
    ?>

<form action="updateGameSearch.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>id гравця</label><input name="player_id" type="text"><br>
        <label>id карти</label><input name="map_id" type="text"><br>
        <label>id машинки</label><input name="car_id" type="text"><br>
        <label>id режиму</label><input name="mode_id" type="text"><br>
        <input type="submit" value="Змінити рядок">
</form>

</body>
</html>