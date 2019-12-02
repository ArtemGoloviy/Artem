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
        include("mode.php")    
    ?>

    <form action="insertIntoMode.php" method="post">
        <label>Кількість гравців</label><input name="count_players" type="text"><br>
        <label>Особливості режиму</label><input name="Features_of_the_mode" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>