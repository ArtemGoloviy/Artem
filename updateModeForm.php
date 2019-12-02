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
        include("mode.php")    
    ?>

<form action="updateMode.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Кількість гравців</label><input name="count_players" type="text"><br>
        <label>Особливості режиму</label><input name="Features_of_the_mode" type="text"><br>
        <input type="submit" value="Змінити рядок">
</form>

</body>
</html>