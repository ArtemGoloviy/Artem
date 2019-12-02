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
        include("car.php")    
    ?>

    <form action="insertIntoCar.php" method="post">
        <label>Антена</label><input name="antenna" type="text"><br>
        <label>Анімація голу</label><input name="goal_explosion" type="text"><br>
        <label>Кузов</label><input name="body_title" type="text"><br>
        <label>Колеса</label><input name="wheels_title" type="text"><br>
        <label>Декаль</label><input name="picture_title" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>